<?php
/**
 * @package BatchController
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 29-12-2022
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BatchController extends Controller
{
    /**
     * Delete batch data
     *
     * @param Request $request
     * @return array $response
     */
    public function destroy(Request $request)
    {
        $response = ['status' => 'failed', 'message' => __('Something went wrong, please try again.')];

        if (config('martvill.is_demo')) {
            $response['message'] = __('Batch operation is disabled in demo mode.');

            return $response;
        }
        
        if (!$this->isValid($request)) {
            return $response;
        }

        try {
            $model = new $request->namespace;
            $model->whereIn($request->column, $request->records)->delete();

            $model->forgetCache();

            return ['status' => 'success', 'message' => __('Batch :x has been successfully deleted.', ['x' => $this->getModelName($request->namespace)])];
        } catch (\Exception $e) {
            $response['message'] = $e->getMessage();

            return $response;
        }
    }

    /**
     * Check validity
     *
     * @param Request $request
     * @return boolean
     */
    private function isValid($request)
    {
        $validate = !Validator::make($request->all(), [
            'records' => 'required',
            'namespace' => 'required',
            'column' => 'required'
        ])->fails();

        return $validate && class_exists($request->namespace);
    }

    /**
     * Get model name
     *
     * @param string $namespace
     * @return string
     */
    private function getModelName($namespace)
    {
        $modelName = explode('\\', $namespace);

        return end($modelName);
    }
}
