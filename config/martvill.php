<?php

return [

    /*
    |--------------------------------------------------------------------------
    | The application is in demo mode or not
    |--------------------------------------------------------------------------
    |
    | This option controls the demo mode of the application.
    |
    | value: true, false
    |
    */

    'is_demo' => env('IS_DEMO', false),

    /* The application version */
    'version' => env('MARTVILL_VERSION', '1.0.0'),

    /**
     * Thumbnail path
     *
     * Note:If you want to change the thumbnail_dir name,
     * You must change dir name from public/uploads/[old thumbnail directory name]
     * */
    'thumbnail_dir' => 'sizes',


    /* Demo account credentails, Only work when the application on demo mode */
    'credentials' => [
        'admin' => [
            'email' => 'admin@techvill.net',
            'password' => '123456'
        ],
        'vendor' => [
            'email' => 'vendor@techvill.net',
            'password' => '123456'
        ],
        'customer' => [
            'email' => 'user@techvill.net',
            'password' => '123456'
        ]
    ],
];
