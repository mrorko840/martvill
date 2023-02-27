<?php

return [
    'name' => 'SslCommerz',

    'alias' => 'sslcommerz',

    'logo' => 'Modules/SslCommerz/Resources/assets/sslcommerz.png',

    'options' => [
        ['label' => __('Settings'), 'type' => 'modal', 'url' => 'sslcommerz.edit'],
        ['label' => __('SSLCommers Documentation'), 'target' => '_blank', 'url' => 'https://developer.sslcommerz.com/doc/v4/']
    ],

    'validation' => [
        'rules' => [
            'apiKey' => 'required',
            'apiSecret' => 'required',
            'sandbox' => 'required',
        ],
        'attributes' => [
            'apiSecret' => __('Api Secret'),
            'apiKey' => __('Api Key'),
            'sandbox' => __('Please specify sandbox enabled/disabled.')
        ]
    ],
    'fields' => [
        'apiKey' => [
            'label' => __('Store Id'),
            'type' => 'text',
            'required' => true
        ],
        'apiSecret' => [
            'label' => __('Secret Key'),
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

    'store_route' => 'sslcommerz.store',
];
