<?php

return [

    'title' => 'Registrasiýa',

    'heading' => 'Hasaba ýazyl',

    'actions' => [

        'login' => [
            'before' => 'ýa-da',
            'label' => 'hasabyňyza giriň',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'E-poçta adresi',
        ],

        'name' => [
            'label' => 'At',
        ],

        'password' => [
            'label' => 'Açar söz',
            'validation_attribute' => 'password',
        ],

        'password_confirmation' => [
            'label' => 'Açar sözi tassykla',
        ],

        'actions' => [

            'register' => [
                'label' => 'Hasaba ýazyl',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Hasaba alyş synanyşyklary gaty köp',
            'body' => ':seconds sekuntdan soňra täzeden synanyşyň.',
        ],

    ],

];
