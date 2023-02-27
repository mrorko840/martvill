<?php

return [
    'name' => 'Razorpay',

    'alias' => 'razorpay',

    'logo' => 'Modules/Razorpay/Resources/assets/razorpay.png',

    'options' => [
        ['label' => __('Settings'), 'type' => 'modal', 'url' => 'razorpay.edit'],
        ['label' => __('Razorpay Documentation'), 'target' => '_blank', 'url' => 'https://razorpay.com/docs/payments/payment-gateway/server-integration/php/']
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
            'label' => __('Api Key'),
            'type' => 'text',
            'required' => true
        ],
        'apiSecret' => [
            'label' => __('Api Secret'),
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
            ],
        ]
    ],

    'store_route' => 'razorpay.store',
];
