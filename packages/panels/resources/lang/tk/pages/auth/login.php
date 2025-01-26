<?php

return [

    'title' => 'Giriş',

    'heading' => 'Hasaba gir',

    'actions' => [

        'register' => [
            'before' => 'ýa-da',
            'label' => 'täze hasap dörediň',
        ],

        'request_password_reset' => [
            'label' => 'Açar sözüňizi ýatdan çykardyňyzmy?',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'E-poçta adresi',
        ],

        'password' => [
            'label' => 'Açar söz',
        ],

        'remember' => [
            'label' => 'Meni ýatla',
        ],

        'actions' => [

            'authenticate' => [
                'label' => 'Hasaba gir',
            ],

        ],

    ],

    'messages' => [

        'failed' => 'Bu bellikler biziň ýazgylarymyz bilen gabat gelmeýär.',

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Giriş synanyşyklary gaty köp',
            'body' => ':seconds sekuntdan soňra täzeden synanyşyň.',
        ],

    ],

];
