<?php

return [

    'apiKey'          => env('MAILCHIMP_APIKEY', 'c68fcb97722ce42c82ca902a2cf43c03-us16'),
    'defaultListName' => 'notification',
    'lists'           => [
        'notification' => [
            'id' => env('MAILCHIMP_NOTIFICATION_LIST_ID', '22cb9e6caf'),
        ],
        'presalequeue' => [
            'id' => env('MAILCHIMP_PRESALE_LIST_ID', '80b1bdf6fe'),
        ],
        'partnership'  => [
            'id' => env('MAILCHIMP_PARTNERSHIP_LIST_ID', '6317d830cb'),
        ],
    ],
    'ssl'             => true,
];
