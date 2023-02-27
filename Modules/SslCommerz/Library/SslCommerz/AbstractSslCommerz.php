<?php
namespace Modules\SslCommerz\Library\SslCommerz;

abstract class AbstractSslCommerz implements SslCommerzInterface
{
    protected $apiUrl;
    protected $storeId;
    protected $storePassword;

    /**
     * Set Store Id
     *
     * @param string $storeID
     * @return void
     */
    protected function setStoreId($storeID)
    {
        $this->storeId = $storeID;
    }

    /**
     * Get Store Id
     *
     * @return string $this->storeId
     */
    protected function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * Set Store Password
     *
     * @param string $storePassword
     * @return void
     */
    protected function setStorePassword($storePassword)
    {
        $this->storePassword = $storePassword;
    }

    /**
     * Get Store Password
     *
     * @return string $this->storePassword
     */
    protected function getStorePassword()
    {
        return $this->storePassword;
    }

    /**
     * Set API Url
     *
     * @param string $url
     * @return void
     */
    protected function setApiUrl($url)
    {
        $this->apiUrl = $url;
    }

    /**
     * Get API Url
     *
     * @return string $this->apiUrl
     */
    protected function getApiUrl()
    {
        return $this->apiUrl;
    }

    /**
     * Call API
     * @param $data
     * @param array $header
     * @param bool $setLocalhost
     * @return bool|string
     */
    public function callToApi($data, $header = [], $setLocalhost = false)
    {
        $curl = curl_init();
        if (!$setLocalhost) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2); // The default value for this option is 2. It means, it has to have the same name in the certificate as is in the URL you operate against.
        } else {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0); // When the verify value is 0, the connection succeeds regardless of the names in the certificate.
        }

        curl_setopt($curl, CURLOPT_URL, $this->getApiUrl());
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_TIMEOUT, 60);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $curlErrorNo = curl_errno($curl);
        curl_close($curl);

        if ($code == 200 & !($curlErrorNo)) {
            return $response;
        }
        return __('Failed to connect with SSL Commerz API.');
    }

    /**
     * Format Response Data
     *
     * @param $response
     * @param string $type
     * @param string $pattern
     * @return false|mixed|string
     */
    public function formatResponse($response, $type = 'checkout', $pattern = 'json')
    {
        $sslcz = json_decode($response, true);

        if ($type != 'checkout') {
            return $sslcz;
        }

        $response = json_encode(['status' => 'fail', 'data' => null, 'message' => $sslcz['failedreason']]);
        if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL'] != "") {
            // this is important to show the popup, return or echo to send json response back
            $successStatus = 'success';
            if ($this->getApiUrl() != null && $this->getApiUrl() == 'https://securepay.sslcommerz.com') {
                $successStatus = 'SUCCESS';
            }
            $response = json_encode(['status' => $successStatus, 'data' => $sslcz['GatewayPageURL'], 'logo' => $sslcz['storeLogo']]);
        }

        return $response;
    }

    /**
     * Redirect
     *
     * @param $url
     * @param bool $permanent
     * @return void
     */
    public function redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }
}
