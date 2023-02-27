<?php

return [
    'name' => 'Instamojo',

    'alias' => 'instamojo',

    'logo' => 'Modules/Instamojo/Resources/assets/instamojo.png',

    'options' => [
        ['label' => __('Settings'), 'type' => 'modal', 'url' => 'instamojo.edit'],
        ['label' => __('Instamojo Documentation'), 'target' => '_blank', 'url' => 'https://docs.instamojo.com/docs']
    ],

    /**
     * Instamojo data validation
     */
    'validation' => [
        'rules' => [
            'apiKey' => 'required',
            'authToken' => 'required',
            'sandbox' => 'required',
        ],
        'attributes' => [
            'apiKey' => __('Api Key'),
            'authToken' => __('Auth Token'),
            'sandbox' => 'Please specify sandbox enabled/disabled.'
        ]
    ],
    'fields' => [
        'apiKey' => [
            'label' => __('Api Key'),
            'type' => 'text',
            'required' => true
        ],
        'authToken' => [
            'label' => __('Auth Token'),
            'type' => 'text',
            'required' => true
        ],
        'instruction' => [
            'label' => 'Instruction',
            'type' => 'textarea'
        ],
        'sandbox' => [
            'label' => 'Sandbox',
            'type' => 'select',
            'required' => true,
            'options' => [
                'Enabled' => 1,
                'Disabled' =>  0
            ]
        ],
        'status' => [
            'label' => 'Status',
            'type' => 'select',
            'required' => true,
            'options' => [
                'Active' => 1,
                'Inactive' =>  0
            ],
            'note' => __("Instamojo does not support any currency except 'INR'."),
        ]
    ],

    'store_route' => 'instamojo.store',

    'ssl_verify_host' => false,
    'ssl_verify_peer' => false,
];
