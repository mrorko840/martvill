<?php

return [
    'name' => 'DirectBankTransfer',
    'alias' => 'directbanktransfer',
    'logo' => 'Modules/DirectBankTransfer/Resources/assets/thumbnail.png',
    'options' => [
        ['label' => __('Settings'), 'type' => 'modal', 'url' => 'bank.edit'],
    ],

    /**
     * Stripe data validation
     */
    'fields' => [
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

    'store_route' => 'bank.store',
];
