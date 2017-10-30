<?php

return [

    'supportedLocales'        => [
        'en' => ['name' => 'English', 'script' => 'Latn', 'native' => 'English', 'short' => 'Eng', 'regional' => 'en_GB'],
        'ru' => ['name' => 'Russian', 'script' => 'Cyrl', 'native' => 'Русский', 'short' => 'Рус', 'regional' => 'ru_RU'],
        'es' => ['name' => 'Spanish', 'script' => 'Latn', 'native' => 'Español', 'short' => 'Esp', 'regional' => 'es_ES'],
        'fr' => ['name' => 'French', 'script' => 'Latn', 'native' => 'Français', 'short' => 'Fra', 'regional' => 'fr_FR'],
        'de' => ['name' => 'German', 'script' => 'Latn', 'native' => 'Deutsch', 'short' => 'Deu', 'regional' => 'de_DE'],
        'po' => ['name' => 'Português', 'script' => 'Latn', 'native' => 'Português', 'short' => 'Por', 'regional' => 'pt_PT'],
        'jp' => ['name' => 'Japanese', 'script' => 'Jpan', 'native' => '日本語', 'short' => '日本語', 'regional' => 'ja_JP'],
        'zh' => ['name' => 'Chinese', 'script' => 'Hans', 'native' => '简体中文', 'short' => '简体中文', 'regional' => 'zh_CN'],
    ],

    // Negotiate for the user locale using the Accept-Language header if it's not defined in the URL?
    // If false, system will take app.php locale attribute
    'useAcceptLanguageHeader' => true,

    // If LaravelLocalizationRedirectFilter is active and hideDefaultLocaleInURL
    // is true, the url would not have the default application language
    //
    // IMPORTANT - When hideDefaultLocaleInURL is set to true, the unlocalized root is treated as the applications default locale "app.locale".
    // Because of this language negotiation using the Accept-Language header will NEVER occur when hideDefaultLocaleInURL is true.
    //
    'hideDefaultLocaleInURL'  => true,

    // If you want to display the locales in particular order in the language selector you should write the order here. 
    //CAUTION: Please consider using the appropriate locale code otherwise it will not work
    //Example: 'localesOrder' => ['es','en'],
    'localesOrder'            => [],

];
