<?php

return [

    'apiKey'          => env('MAILCHIMP_APIKEY'),
    'defaultListName' => 'notification',
    'lists'           => [
        'notification' => [
            'id' => env('MAILCHIMP_NOTIFICATION_LIST_ID'),
        ],
        'presalequeue' => [
            'id' => env('MAILCHIMP_PRESALE_LIST_ID'),
        ],
        'partnership'  => [
            'id' => env('MAILCHIMP_PARTNERSHIP_LIST_ID'),
        ],
        'wire'  => [
            'id' => env('MAILCHIMP_WIRE_LIST_ID'),
        ],
    ],
    'ssl'             => true,
];
