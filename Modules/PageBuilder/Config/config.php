<?php

use Modules\CMS\Entities\Page;

return [
    'name' => 'PageBuilder',

    'page' => \Modules\CMS\Entities\Page::class,

    'fields' => [
        'html' => 'description',
        'css' => 'css',
        'component' => 'component',
        'style' => 'style'
    ],
];
