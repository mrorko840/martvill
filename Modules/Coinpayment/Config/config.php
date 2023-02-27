<?php

return [
    'name' => 'Coinpayment',

    'alias' => 'coinpayment',

    'logo' => 'Modules/Coinpayment/Resources/assets/coinpayment.svg',

    // Coinbase addon settings

    'options' => [
        ['label' => __('Settings'), 'type' => 'modal', 'url' => 'coinpayment.edit'],
        ['label' => __('Coinpayment Documentation'), 'type' => 'href', 'target' => '_blank', 'url' => 'https://docs.cloud.coinbase.com/commerce/docs']
    ],

    'validation' => [
        'rules' => [
            'merchantId' => 'required',
            'publicKey' => 'required',
            'privateKey' => 'required',
            'currencies' => 'required',
            'sandbox' => 'required',
        ],
        'attributes' => [
            'merchantId' => __('Merchant Id'),
            'publicKey' => __('Public Key'),
            'privateKey' => __('Private Key'),
            'currencies' => __('Currencies'),
            'sandbox' => __('Please specify sandbox enabled/disabled.')
        ]
    ],
    'fields' => [
        'merchantId' => [
            'label' => __('Merchant Id'),
            'type' => 'text',
            'required' => true
        ],
        'publicKey' => [
            'label' => __('Public Key'),
            'type' => 'text',
            'required' => true
        ],
        'privateKey' => [
            'label' => __('Private Key'),
            'type' => 'text',
            'required' => true
        ],
        'currencies' => [
            'label' => __('Currencies'),
            'placeholder' => 'BTC,BCH,LTC',
            'note' => __('Comma separated currency codes :names', ['names' => 'BTC,BCH,LTC']),
            'type' => 'text',
            'required' => true
        ],
        'instruction' => [
            'label' => __('Instruction'),
            'type' => 'textarea',
        ],
        'sandbox' => [
            'label' => __('Sandbox'),
            'type' => 'select',
            'required' => true,
            'options' => [
                'Enabled' => 1,
                'Disabled' =>  0
            ]
        ],
        'status' => [
            'label' => __('Status'),
            'type' => 'select',
            'required' => true,
            'options' => [
                'Active' => 1,
                'Inactive' =>  0
            ]
        ]
    ],

    'store_route' => 'coinpayment.store',

];
