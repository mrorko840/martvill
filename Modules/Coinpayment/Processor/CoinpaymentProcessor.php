<?php

namespace Modules\Coinpayment\Processor;

use Modules\Coinpayment\Entities\Coinpayment;
use Modules\Coinpayment\Helper\CoinpaymentApi;
use Modules\Coinpayment\Response\CoinpaymentResponse;
use Modules\Gateway\Contracts\PaymentProcessorInterface;
use Modules\Gateway\Contracts\RequiresCallbackInterface;
use Modules\Gateway\Contracts\RequiresCancelInterface;
use Modules\Gateway\Contracts\RequiresWebHookValidationInterface;
use Modules\Gateway\Entities\PaymentLog;
use Modules\Gateway\Services\GatewayHelper;

class CoinpaymentProcessor implements
    PaymentProcessorInterface,
    RequiresWebHookValidationInterface,
    RequiresCancelInterface
{


    /**
     * Handles the initial payment request to the payment gateway
     *
     * @param \Illuminate\Http\Request $request;
     */
    public function pay($request)
    {
        $helper = GatewayHelper::getInstance();
        $purchaseData = $helper->getPurchaseData($helper->getPaymentCode());
        $coinpayment = unserialize(Coinpayment::firstWhere('alias', 'coinpayment')->data);
        $api = new CoinpaymentApi($coinpayment->privateKey, $coinpayment->publicKey);

        $code = $purchaseData->code . floor(time() - 999999999);

        $req = array(
            'amount' => $purchaseData->total,
            'currency1' => $purchaseData->currency_code,
            'currency2' => $request->currency,
            'buyer_email' => $request->email,
            'invoice' => $purchaseData->code,
            'custom' => $code,
            'success_url' => route(config('gateway.payment_callback'), ['gateway' => 'coinpayment']),
            'cancel_url' => route(config('gateway.payment_cancel'), ['gateway' => 'coinpayment']),
        );

        $transaction = $api->CreateTransactionSimple($req);
        if (isset($transaction["error"]) && $transaction["error"] <> "ok") {
            paymentLog($transaction);
            throw new \Exception($transaction["error"]);
        }
        $transaction['result']['currency'] = $request->currency;
        $transaction['result']['params'] = json_encode($request->currency);
        $response = new CoinpaymentResponse($transaction, $purchaseData);
        $response->setUniqueCode($code);
        $response->setPaymentStatus('pending');
        return $response;
    }

    public function cancel($request)
    {
        throw new \Exception(__('Payment cancelled.'));
    }


    public function validatePayment($request)
    {
        $status = htmlspecialchars($request->status);

        if ($status == 100 || $status == -1) {

            $payment = PaymentLog::uniqueCode($request->custom)->first();

            if (!$payment) {
                paymentLog($request);
                paymentLog('------ Payment data with the requested coinbase unique code ("field: custom") -------');
                return false;
            }

            $payment->response_raw = json_encode($request->all());

            if ($status == -1) {

                $payment->status = 'cancelled';
            } else {
                $payment->status = 'completed';
                $payment->response = json_encode([
                    'amount' => $request->amount1,
                    'amount2' => $request->amount2,
                    'amount_captured' => $request->amount1,
                    'currency' => $request->currency1,
                    'currency2' => $request->currency2,
                    'code' => $payment->code
                ]);
            }

            $payment->store();

            return true;
        }
        return false;
    }
}
