<?php

/**
 * @package FlutterwaveBody
 * @author TechVillage <support@techvill.org>
 * @contributor Kabir Ahmed <[kabir.techvill@gmail.com]>
 * @created 05-01-2022
 */

namespace Modules\Flutterwave\Entities;

use Modules\Gateway\Entities\GatewayBody;

class FlutterwaveBody extends GatewayBody
{
    public $secretKey;
    public $publicKey;
    public $encryptionKey;
    public $instruction;
    public $status;


    public function __construct($request)
    {
        $this->secretKey = $request->secretKey;
        $this->publicKey = $request->publicKey;
        $this->encryptionKey = $request->encryptionKey;
        $this->instruction = $request->instruction;
        $this->status = $request->status;
    }
}
