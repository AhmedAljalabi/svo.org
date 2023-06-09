<?php

use Illuminate\Support\Facades\Route;


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

/* *************************** without login**************************************  */
Route::get('/join', function () {
    return view('join4');
});

Route::get('/join1', function () {
    return view('join1');
});
Route::get('/join2', function () {
    return view('join2');
});
Route::get('/join3', function () {
    return view('join3');
});

Route::get('/svo-aeed', function () {
    return view('aeed');
});


Route::get('/the-news', function () {
    return view('news');
});

Route::get('/the-team', function () {
    return view('teams');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/more', function () {
    return view('more-news');
});
Route::get('/find', function () {
    return view('search');
});

Route::get('/contact', function () {
    return view('contact'); 
});
Route::get('/donetions', function () {
    return view('donate'); 
});




/* *************************** without login**************************************  */



Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */

/** ************************************protected by login routes*********************************************     */







Route::get('/c', function () {
    return view('includes/contact2');   
});

Route::get('/r', function () {
    return view('results');
});





/** ************************************ End of  login routes*********************************************     */


        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
