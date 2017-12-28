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
    Route::get('/home', 'MainController@mainPage')->name('main');
//     Route::get('/', 'MainController@icoPage')->name('main-ico');
    Route::get('/tge', 'MainController@icoPage')->name('ico');
    Route::get('/TGE', 'MainController@icoPage')->name('ico');
    Route::get('/apps/what-kind-of-crypto-trader-are-you/{level}', 'MainController@quizResult')->name('quizResult');
    Route::post('/send', 'MainController@addUser')->name('add-user');
    Route::post('/sendfull', 'MainController@addFullUser')->name('add-full-user');
    Route::post('/sendqueue', 'MainController@addQueueUser')->name('add-queue-user');
    Route::post('/sendwire', 'MainController@addWireUser')->name('add-wire-user');
    Route::get('/vacancies', 'MainController@vacancies')->name('vacancies');
    // redirects
    Route::get('/docs/{filename}', 'RedirectController@go');
});
