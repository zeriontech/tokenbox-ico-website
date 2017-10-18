<?php

return [
    /* -----------------------------------------------------------------
     |  Title
     | -----------------------------------------------------------------
     */
    'title' => [
        'default'   => 'Tokenbox — Unique ecosystem for crypto investors, traders and funds',
        'site-name' => '',
        'separator' => '—',
        'first'     => false,
        'max'       => 155,
    ],

    /* -----------------------------------------------------------------
     |  Description
     | -----------------------------------------------------------------
     */
    'description' => [
        'default'   => 'ᐅᐅᐅ Tokenbox is a №❶ ecosystem for crypto-investors, traders and funds. ᐅᐅᐅ TGE starts on 14 November 2017!',
        'max'       => 155,
    ],

    /* -----------------------------------------------------------------
     |  Keywords
     | -----------------------------------------------------------------
     */
    'keywords'  => [
        'default'   => [
            //
        ],
    ],

    /* -----------------------------------------------------------------
     |  Miscellaneous
     | -----------------------------------------------------------------
     */
    'misc'      => [
        'canonical' => true,
        'robots'    => config('app.env') !== 'production', // Tell robots not to index the content if it's not on production
        'default'   => [
            'viewport'  => 'initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no', // Responsive design thing
            'author'    => '', // https://plus.google.com/[YOUR PERSONAL G+ PROFILE HERE]
            'publisher' => '', // https://plus.google.com/[YOUR PERSONAL G+ PROFILE HERE]
        ],
    ],

    /* -----------------------------------------------------------------
     |  Webmaster Tools
     | -----------------------------------------------------------------
     */
    'webmasters' => [
        'google'    => '',
        'bing'      => '',
        'alexa'     => '',
        'pinterest' => '',
        'yandex'    => '',
    ],

    /* -----------------------------------------------------------------
     |  Open Graph
     | -----------------------------------------------------------------
     */
    'open-graph' => [
        'enabled'     => true,
        'prefix'      => 'og:',
        'type'        => 'website',
        'title'       => 'Tokenbox - TGE starts on 14 November 2017',
        'description' => 'Tokenbox is a №1 ecosystem for crypto-investors, traders and funds.',
        'site-name'   => '',
        'properties'  => [
            //
        ],
    ],

    /* -----------------------------------------------------------------
     |  Twitter
     | -----------------------------------------------------------------
     |  Supported card types : 'app', 'gallery', 'photo', 'player', 'product', 'summary', 'summary_large_image'.
     */
    'twitter' => [
        'enabled' => true,
        'prefix'  => 'twitter:',
        'card'    => 'summary',
        'site'    => 'tokenbox',
        'title'   => 'Tokenbox - Unique ecosystem for crypto investors, traders and funds',
        'metas'   => [
            //
        ],
    ],

    /* -----------------------------------------------------------------
     |  Analytics
     | -----------------------------------------------------------------
     */
    'analytics' => [
        'google' => '', // UA-XXXXXXXX-X
    ],
];
