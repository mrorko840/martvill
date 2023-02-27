<?php

/**
 * @package FlutterwaveProcessor
 * @author TechVillage <support@techvill.org>
 * @contributor Kabir Ahmed <[kabir.techvill@gmail.com]>
 * @created 09-11-22
 */

namespace Modules\Flutterwave\Processor;

use Modules\Gateway\Contracts\PaymentProcessorInterface;
use Modules\Gateway\Facades\GatewayHelper;
use Modules\Flutterwave\Entities\Flutterwave;
use Modules\Gateway\Contracts\RequiresCallbackInterface;
use Modules\Flutterwave\Response\FlutterwaveResponse;

class FlutterwaveProcessor implements PaymentProcessorInterface, RequiresCallbackInterface
{

	private $url = 'https://api.flutterwave.com/v3';
	private $payload;
	private $data;
	private $flutterwave;

	/**
	 * Purchase data
	 * @return object
	 */
	private function setPurchaseDate()
    {
        $this->data = GatewayHelper::getPurchaseData(GatewayHelper::getPaymentCode());
    }

	/**
	 * gateway data
	 * @return object
	 */
	private function setFlutterwave()
    {
        $this->flutterwave = Flutterwave::first()->data;
    }

    /**
     * Generates payment request url
     *
     * @return string
     *
     * @throws \Exception
     */
	public function paymentRequest()
    {
        $response = $this->curlRequest('payment-requests');
        $response = json_decode($response);

        if ($response->status != 'success') {
            paymentLog('Flutterwave::' . json_encode($response->message));
            throw new \Exception(__('Couldn\'t initiate the payment.'));
        }

		return $response->data->link;
    }

	/**
	 * @param mixed $request
	 *
	 * @return json
	 */
	private function setPayload($request)
    {
        $this->payload = json_encode([
           "tx_ref" => 'FLW |'.time(),
		   "amount" => round($this->data->total, 2),
		   "currency" => $this->data->currency_code,
		   "redirect_url" => route(config('gateway.payment_callback'), withOldQueryIntegrity(['gateway' => 'flutterwave'])),
		   "payment_options" =>"card,banktransfer",
		   "customer" =>[
		      "email" => $request->email,
		      "name" => $request->name
		   ],
        ]);
    }

	/**
	 * @param mixed $action
	 *
	 * @return string
	 */
	public function curlRequest($action)
    {
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => $this->url . '/payments',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
        CURLOPT_SSL_VERIFYHOST => config('flutterwave.ssl_verify_host'),
        CURLOPT_SSL_VERIFYPEER => config('flutterwave.ssl_verify_peer'),
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => $this->payload,
		CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer ' . $this->flutterwave->secretKey, //Get your Secrete key from flutterwave dashboard.
			'Content-Type: application/json'
		),

	));

    	return curl_exec($curl);
    }

    /**
     * @param mixed $request
     *
     * @return object
     */
    public function pay($request)
    {
		$this->setPurchaseDate();
		$this->setPayload($request);
		$this->setFlutterwave();
		return redirect($this->paymentRequest());
    }

	/**
	 * valdiate payment
	 * @param mixed $request
	 *
	 * @return [type]
	 */
	private function paymentValidate($request)
    {
        if ($request->status != 'successful') {
            throw new \Exception(__('Payment failed.'));
        }
		$response = $this->getPayment($request);
        $response = json_decode($response);

        if ($response->status != 'success') {
            paymentLog($response);
            throw new \Exception(__('Payment could not be verified.'));
        }
        if ($response->data->status != 'successful') {
            paymentLog($response);
            throw new \Exception(__('Payment is not completed.'));
        }

        return $response;
    }

	public function getPayment($action)
    {
		$txid = $action->transaction_id;

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => $this->url . '/transactions/'. $txid . '/verify', // Pass transaction ID for validation
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_SSL_VERIFYHOST => config('flutterwave.ssl_verify_host'),
        CURLOPT_SSL_VERIFYPEER => config('flutterwave.ssl_verify_peer'),
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json",
			'Authorization: Bearer ' . $this->flutterwave->secretKey, //Get your Secrete key from flutterwave dashboard.
		),
		));

		return curl_exec($curl);

    }
    /**
     * Validate transactions
     * @param Request
     * @return FlutterwaveResponse
     *
     * @throws \Exceptions
     */
    public function validateTransaction($request)
    {
        $this->setFlutterwave();
        $this->setPurchaseDate();
        $response = $this->paymentValidate($request);
		return new FlutterwaveResponse($this->data, $response->data);
    }
}
