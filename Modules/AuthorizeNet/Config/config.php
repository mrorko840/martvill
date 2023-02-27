<?php

return [
    'name' => 'AuthorizeNet',

    'alias' => 'authorizenet',

    'logo' => 'Modules/AuthorizeNet/Resources/assets/Authorize.net_Logo.png',

    // authorize net addon settings

    'options' => [
        ['label' => __('Settings'), 'type' => 'modal', 'url' => 'authorizenet.edit'],
        ['label' => __('Authorize Documentation'), 'target' => '_blank', 'url' => 'https://www.authorize.net/']
    ],

    /**
     * Authorize net data validation
     */
    'validation' => [
        'rules' => [
            'merchantLoginId' => 'required',
            'merchantTransactionKey' => 'required',
            'sandbox' => 'required',
        ],
        'attributes' => [
            'merchantLoginId' => __('Merchant Login Id'),
            'merchantTransactionKey' => __('Merchant Transaction Key'),
            'sandbox' => __('Please specify sandbox enabled/disabled.')
        ]
    ],
    'fields' => [
        'merchantLoginId' => [
            'label' => __('Merchant Login Id'),
            'type' => 'text',
            'required' => true
        ],
        'merchantTransactionKey' => [
            'label' => __('Merchant Transaction Key'),
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

    'store_route' => 'authorizenet.store',

];

