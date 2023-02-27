<?php

/**
 * @package SslCommerzProcessor
 * @author techvillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 30-10-22
 */

namespace Modules\SslCommerz\Processor;

use App\Models\User;
use Modules\Gateway\Contracts\PaymentProcessorInterface;
use Modules\Gateway\Facades\GatewayHelper;
use Modules\SslCommerz\Response\SslCommerzResponse;

use Illuminate\Http\Request;
use Modules\Gateway\Contracts\RequiresCallbackInterface;
use Modules\SslCommerz\Library\SslCommerz\SslCommerzNotification;

class SslCommerzProcessor implements PaymentProcessorInterface, RequiresCallbackInterface
{

    private $data;
    private $code;

    /**
     * Setup
     *
     * @return void
     */
    private function setup()
    {
        $this->code = GatewayHelper::getPaymentCode();
        $this->data = GatewayHelper::getPurchaseData($this->code);
    }

    /**
    * Ajax payment
    *
    * @param object $request
    * @return payment view
    */
    public function pay($request)
    {
        # Here you have to receive all the order data to initate the payment.
        # Lets your oder trnsaction informations are saving in a table called "orders"
        # In orders table order uniq identity is "transaction_id","status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.
        $this->setup();
        $user = User::find($this->data->sending_details->user_id);


        $post_data = array();
        $post_data['total_amount'] = $this->data->total; # You cant not pay less than 10
        $post_data['currency'] = $this->data->currency_code;
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        // # CUSTOMER INFORMATION
        $post_data['cus_name'] = $user->name;
        $post_data['cus_email'] = $user->email;
        $post_data['cus_add1'] = '';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "";
        $post_data['cus_phone'] = $user->phone ?? '8801700000000';

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "";
        $post_data['ship_add1'] = "";
        $post_data['ship_city'] = "";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "none";
        $post_data['product_category'] = "none";
        $post_data['product_profile'] = "none";

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'checkout', 'json');
        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }

    /**
     * Validate Transaction
     *
     * @param Request $request
     * @return SslCommerzResponse
     */
    public function validateTransaction(Request $request)
    {
        $this->setup();
        return new SslCommerzResponse($this->data, $request->all());
    }

    /**
     * Cancel Payment
     *
     * @param object $request
     * @return void
     */
    public function cancel($request)
    {
        throw new \Exception(__('Payment cancelled from ssl commerz.'));
    }
}
