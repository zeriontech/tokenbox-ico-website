<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group([
    'prefix'     => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::get('/', 'MainController@mainPage')->name('main');
    Route::get('/tge', 'MainController@icoPage')->name('ico');
    Route::get('/apps/what-kind-of-crypto-trader-are-you/{level}', 'MainController@quizResult')->name('quizResult');
    Route::post('/send', 'MainController@addUser')->name('add-user');
    Route::post('/sendfull', 'MainController@addFullUser')->name('add-full-user');
    Route::post('/sendqueue', 'MainController@addQueueUser')->name('add-queue-user');
    Route::post('/sendwire', 'MainController@addWireUser')->name('add-wire-user');

    // redirects
    Route::any('/docs/TBX-WhitePaper-Eng.pdf', function () {
        return \Illuminate\Support\Facades\Redirect::away('https://tokenbox.io/docs/Tokenbox-WhitePaper-En.pdf');
    });
    Route::any('/docs/TBX-WhitePaper-Rus.pdf', function () {
        return \Illuminate\Support\Facades\Redirect::away('https://tokenbox.io/docs/Tokenbox-WhitePaper-Ru.pdf');
    });

    Route::any('/docs/Tokenbox-BusinessOverview-Eng.pdf', function () {
        return \Illuminate\Support\Facades\Redirect::away('https://tokenbox.io/docs/Tokenbox-BusinessOverview-En.pdf');
    });
    Route::any('/docs/Tokenbox-BusinessOverview-Rus.pdf', function () {
        return \Illuminate\Support\Facades\Redirect::away('https://tokenbox.io/docs/Tokenbox-BusinessOverview-Ru.pdf');
    });

    Route::any('/docs/Tokenbox-Overview-Eng.pdf', function () {
        return \Illuminate\Support\Facades\Redirect::away('https://tokenbox.io/docs/Tokenbox-Overview-En.pdf');
    });
    Route::any('/docs/Tokenbox-Overview-Rus.pdf', function () {
        return \Illuminate\Support\Facades\Redirect::away('https://tokenbox.io/docs/Tokenbox-Overview-Ru.pdf');
    });

    Route::any('/docs/Tokenbox-Onepager-Eng.pdf', function () {
        return \Illuminate\Support\Facades\Redirect::away('https://tokenbox.io/docs/Tokenbox-Onepager-En.pdf');
    });
    Route::any('/docs/Tokenbox-OnepagerPS-Eng.pdf', function () {
        return \Illuminate\Support\Facades\Redirect::away('https://tokenbox.io/docs/Tokenbox-OnepagerPS-En.pdf');
    });

});
