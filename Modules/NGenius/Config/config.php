<?php

return [
    'name' => 'NGenius',

    'alias' => 'ngenius',

    'logo' => 'Modules/NGenius/Resources/assets/ngenius.png',

    'options' => [
        ['label' => __('Settings'), 'type' => 'modal', 'url' => 'ngenius.edit'],
        ['label' => __('NGenius Documentation'), 'target' => '_blank', 'url' => 'https://docs.ngenius-payments.com/']
    ],

    'validation' => [
        'rules' => [
            'apiKey' => 'required',
            'outletReference' => 'required',
            'sandbox' => 'required',
        ],
        'attributes' => [
            'apiKey' => __('Api Key'),
            'outletReference' => __('Outlet Reference'),
            'sandbox' => __('Please specify sandbox enabled/disabled.')
        ]
    ],

    'fields' => [
        'apiKey' => [
            'label' => __('Api Key'),
            'type' => 'text',
            'required' => true
        ],
        'outletReference' => [
            'label' => __('Outlet Reference'),
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

    'store_route' => 'ngenius.store',

    'return_url' => 'ngenius.capture',

    'cancel_url' => 'ngenius.cancel'
];
