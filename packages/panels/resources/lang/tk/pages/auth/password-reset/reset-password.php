<?php

return [

    'title' => 'Açar sözüňizi täzeden düzüň',

    'heading' => 'Açar sözüňizi täzeden düzüň',

    'form' => [

        'email' => [
            'label' => 'E-poçta salgysy',
        ],

        'password' => [
            'label' => 'Açar söz',
            'validation_attribute' => 'password',
        ],

        'password_confirmation' => [
            'label' => 'Açar sözi tassykla',
        ],

        'actions' => [

            'reset' => [
                'label' => 'Açar sözi tassykla',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Gaty köp täzeden düzme synanyşmasy',
            'body' => ':seconds sekuntdan soňra täzeden synanyşyň.',
        ],

    ],

];
