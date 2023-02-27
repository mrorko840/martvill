<?php

return [
    'name' => 'Coinbase',

    'alias' => 'coinbase',

    'logo' => 'Modules/Coinbase/Resources/assets/coinbase.png',

    // Coinbase addon settings

    'options' => [
        ['label' => __('Settings'), 'type' => 'modal', 'url' => 'coinbase.edit'],
        ['label' => __('Coinbase Documentation'), 'type' => 'href', 'target' => '_blank', 'url' => 'https://docs.cloud.coinbase.com/commerce/docs']
    ],

    'validation' => [
        'rules' => [
            'apiKey' => 'required',
            'sandbox' => 'required',
        ],
        'attributes' => [
            'apiKey' => __('Client Api Key'),
            'sandbox' => 'Please specify sandbox enabled/disabled.'
        ]
    ],
    'fields' => [
        'apiKey' => [
            'label' => __('Client Api Key'),
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

    'store_route' => 'coinbase.store',
    'edit_route' => 'coinbase.edit',
];
