<?php

namespace App\Http\Controllers\Api;

use App\Compare\Compare;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

use App\Models\{
    PasswordReset,
    Role,
    RoleUser,
    User
};
use App\Services\Mail\{
    UserResetPasswordMailService,
    UserSetPasswordMailService,
    UserVerificationCodeMailService
};
use Auth, Validator, Cart, DB;

class AuthController extends Controller
{
    /**
     * Sign Up
     *
     * @param Request $request
     * @return jsonResponse
     */
    public function signUp(Request $request)
    {
        $role = Role::getAll()->where('slug', 'customer')->first();
        $request['status'] = "Pending";
        $validator = User::siteStoreValidation($request->all());
        if ($validator->fails()) {
            return $this->unprocessableResponse($validator->messages());
        }

        $password = $request->password;
        $request['password'] = \Hash::make($request->password);
        $request['email'] = validateEmail($request->email) ? strtolower($request->email) : null;
        $request['activation_code'] = \Str::random(10);
        $request['activation_otp'] = random_int(1111, 9999);

        try {
            \DB::beginTransaction();
            $id = (new User)->store($request->only('name', 'email', 'activation_code', 'activation_otp', 'password', 'status'));
            if (!empty($id)) {
                if (!empty($role)) {
                    (new RoleUser())->store(['user_id' => $id, 'role_id' => $role->id]);
                }

                $emailResponse = (new UserVerificationCodeMailService)->send($request);

                if ($emailResponse['status'] == false) {
                    \DB::rollBack();
                    return $this->badRequestResponse([], $emailResponse['message']);
                }

               \DB::commit();
                return $this->createdResponse([], __('Registration successful. Please verify your email.'));
            }
        } catch (\Exception $e) {
            \DB::rollBack();
            return $this->badRequestResponse([], $e->getMessage());
        }
    }

    /**
     * Login
     *
     * @param Request $request
     * @return json $data
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->input(), [
            'email' => 'email|required|exists:users',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->unprocessableResponse($validator->messages());
        }

        if (!auth()->attempt($request->only(['email', 'password']))) {
            return $this->unprocessableResponse(['message' => __('Invalid Credentials')]);
        }
        Cart::cartDataTransfer();
        Compare::compareDataTransfer();
        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        $userInfo = ['name', 'email', 'email_verified_at', 'status', 'activation_code', 'created_at', 'updated_at'];
        foreach ($userInfo as $value) {
            $data[$value] = auth()->user()->$value;
        }
        $data['image'] = auth()->user()->fileUrl();

        $roleList = [];
        foreach (auth()->user()->roles as $role) {
            $roleList[] = $role->type;
        }
        return $this->response(['user_roles' => $roleList, 'user' => $data, 'access_token' => $accessToken]);
    }

    /**
     * Send Password Reset Link
     *
     * @param Request $request
     * @return json $data
     */
    public function sendResetLinkEmail(Request $request)
    {
        $data = ['status' => 'fail', 'message' => __('Invalid Request')];
        $validator = PasswordReset::storeValidation($request->all());
        if ($validator->fails()) {
            return $this->unprocessableResponse($validator->messages());
        }

        $request['token'] = Password::getRepository()->createNewToken();
        $request['otp'] = random_int(1111, 9999);
        $request['created_at'] = date('Y-m-d H:i:s');
        try {
            \DB::beginTransaction();
            (new PasswordReset)->storeOrUpdate($request->only('email', 'token', 'otp', 'created_at'));
            $emailResponse = (new UserResetPasswordMailService)->send($request);

            if ($emailResponse['status'] == false) {
                \DB::rollBack();
                return $this->response(['fail' => $emailResponse['message']]);
            }
            $data['status'] = 'success';
            $data['message'] = __('Password reset link sent to your email address.');
            \DB::commit();
        } catch (Exception $e) {
            \DB::rollBack();
            $data['status'] = 'fail';
            $data['message'] = $e->getMessage();
        }
        return $this->response($data);
    }

    /**
     * Check OTP validity
     *
     * @param int $otp
     * @return json $data
     */
    public function checkOtp($otp)
    {
        $token = (new PasswordReset)->tokenExist($otp);

        if (empty($token)) {
            return $this->unprocessableResponse(['otp' => __("Invalid OTP")]);
        }

        $data = ['token' => $otp];
        $data['user'] = (new User)->getData($otp);

        if (!$data['user']) {
            return $this->unprocessableResponse(['otp' => __("Invalid OTP")]);
        }

        return $this->successResponse(__('OTP verification successful.'));
    }

    /**
     * Reset Password
     *
     * @param Request $request
     * @return json $data
     */
    public function setPassword(Request $request)
    {
        $response = ['status' => 'fail', 'message' => __('Invalid Request')];
        if ($request->isMethod('post')) {
            $data['user'] = (new User)->getData($request->token);
            $validator = PasswordReset::passwordValidation($request->all());
            if ($validator->fails()) {
                return $this->unprocessableResponse($validator->messages());
            }

            $request['user_name'] =  $data['user']->name;
            $request['email'] =  $data['user']->email;
            $request['raw_password'] = $request->password;
            $request['updated_at'] = date('Y-m-d H:i:s');
            $request['password'] = \Hash::make(trim($request->password));

            if ((new PasswordReset)->updatePassword($request->only('password', 'token', 'updated_at'), $data['user']->id)) {
                $emailResponse = (new UserSetPasswordMailService)->send($request);
                if ($emailResponse['status'] == false) {
                    return $this->unprocessableResponse(['fail' => $emailResponse['message']]);
                }

                $response['status'] = 'success';
                $response['message'] = __('Password update successfully.');
            } else {
                $response['message'] = __('Nothing is updated.');
            }
        }

        return $this->response($response);
    }

    /**
     * User Logout
     *
     * @return json $success
     */
    public function logout()
    {
        Auth::guard('api')->user()->token()->delete();
        $success['status']  = __("Ok");
        $success['message'] = __("Logout successfully");
        return $this->response(['response' => $success]);
    }

    /**
     * save user data
     *
     * @param Request $request
     * @return array
     */
    public function registerOrLoginUser(Request $request)
    {
        $user = User::where('email', '=', $request->email ?? null)->first();
        if (!$user) {
            try {
                $validator = User::siteStoreValidation($request->all(), false);
                if ($validator->fails()) {
                    return $this->unprocessableResponse($validator->messages());
                }
                DB::beginTransaction();
                $id = (new User)->store(['name' => $request->name, 'email' => $request->email, 'password' => \Hash::make($request->password), 'status' => 'Active', 'sso_account_id' => $request->id, 'sso_service' => $request->service], "url", $request->avatar);
                if (!empty($id)) {
                    $role = Role::getAll()->where('slug', 'customer')->first();
                    if (!empty($role)) {
                        (new RoleUser)->store(['user_id' => $id, 'role_id' => $role->id]);
                    }
                    DB::commit();
                }
            } catch (Exception $e) {
                DB::rollBack();
                return $this->badRequestResponse([], $e->getMessage());
            }
            $user = User::where('id', '=', $id)->first();
        }
        Auth::guard('user')->login($user);
        Cart::cartDataTransfer();
        Compare::compareDataTransfer();
        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        $userInfo = ['name', 'email', 'email_verified_at', 'status', 'activation_code', 'created_at', 'updated_at'];
        foreach ($userInfo as $value) {
            $data[$value] = auth()->user()->$value;
        }

        $roleList = [];
        foreach (auth()->user()->roles as $role) {
            $roleList[] = $role->type;
        }
        return $this->response(['user_roles' => $roleList, 'user' => $data, 'access_token' => $accessToken]);
    }
    /**
     * Verify email
     * @param string $otp
     * @return json $response
     */
    public function verifyEmail($otp = null)
    {
        $response['status'] = 'fail';
        if (empty($otp)) {
            $response['message'] = __('The OTP is required.');
            return $this->notFoundResponse($response);
        }

        $user = User::where('activation_otp', $otp);
        if ($user->count() == 0) {
            $response['message'] = __('Your OTP is invalid.');
            return $this->notFoundResponse($response);
        }

        if ($user->update(['activation_otp' => null, 'activation_code' => null, 'status' => 'Active'])) {
            $response['status'] = 'success';
            $response['message'] = __('Account activation successful. Please login');
            return $this->createdResponse($response);
        }

        $response['message'] = __('Something went wrong, please try again.');
        return $this->response($response);
    }
}
