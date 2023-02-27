<?php

return [
    'name' => 'Flutterwave',

    'alias' => 'flutterwave',

    'logo' => 'Modules/Flutterwave/Resources/assets/flutter.png',

    // flutterwave addon settings

    'options' => [
        ['label' => __('Settings'), 'type' => 'modal', 'url' => 'flutterwave.edit'],
        ['label' => __('Flutterwave Documentation'), 'target' => '_blank', 'url' => 'https://developer.flutterwave.com/']
    ],

    /**
     * flutterwave data validation
     */
    'validation' => [
        'rules' => [
            'publicKey' => 'required',
            'secretKey' => 'required',
            'encryptionKey' => 'required'
        ],
        'attributes' => [
            'publicKey' => __('Public Key'),
            'secretKey' => __('Secret key'),
            'encryptionKey' => __('Encryption key')
        ]
    ],
    'fields' => [
        'publicKey' => [
            'label' => __('public Key'),
            'type' => 'text',
            'required' => true
        ],
        'secretKey' => [
            'label' => __('Secret Key'),
            'type' => 'text',
            'required' => true
        ],
        'encryptionKey' => [
            'label' => __('Encryption Key'),
            'type' => 'text',
            'required' => true
        ],
        'instruction' => [
            'label' => __('Instruction'),
            'type' => 'textarea',
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

    'ssl_verify_host' => false,

    'ssl_verify_peer' => false,

    'store_route' => 'flutterwave.store',

];
