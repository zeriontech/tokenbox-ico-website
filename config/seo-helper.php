<?php

return [
    /* -----------------------------------------------------------------
     |  Title
     | -----------------------------------------------------------------
     */
    'title'       => [
        'default'   => 'Tokenbox — Uniting Crypto',
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
        'default' => 'ᐅᐅᐅ №1 ecosystem for crypto-investors, traders and funds. ᐅᐅᐅ TGE has ended.',
        'max'     => 155,
    ],

    /* -----------------------------------------------------------------
     |  Keywords
     | -----------------------------------------------------------------
     */
    'keywords'    => [
        'default' => [
            //
        ],
    ],

    /* -----------------------------------------------------------------
     |  Miscellaneous
     | -----------------------------------------------------------------
     */
    'misc'        => [
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
    'webmasters'  => [
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
    'open-graph'  => [
        'enabled'     => true,
        'prefix'      => 'og:',
        'type'        => 'website',
        'title'       => 'Tokenbox - Uniting Crypto',
        'description' => 'ᐅᐅᐅ №1 ecosystem for crypto-investors, traders and funds. ᐅᐅᐅ TGE has ended.',
        'image'       => 'https://tokenbox.io/tokenbox-ograph.png',
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
    'twitter'     => [
        'enabled' => true,
        'prefix'  => 'twitter:',
        'card'    => 'summary',
        'site'    => 'tokenbox',
        'title'   => 'Tokenbox - Uniting Crypto',
        'image'   => 'https://tokenbox.io/favicon-228.png',
        'metas'   => [
            //
        ],
    ],

    /* -----------------------------------------------------------------
     |  Analytics
     | -----------------------------------------------------------------
     */
    'analytics'   => [
        'google' => '', // UA-XXXXXXXX-X
    ],
];
