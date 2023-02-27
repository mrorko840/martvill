<?php

return [
    'name' => 'CheckPayments',
    'alias' => 'checkpayments',
    'logo' => 'Modules/CheckPayments/Resources/assets/thumbnail.png',
    'options' => [
        ['label' => __('Settings'), 'type' => 'modal', 'url' => 'checkPayment.edit'],
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

    'store_route' => 'checkPayment.store',
];
