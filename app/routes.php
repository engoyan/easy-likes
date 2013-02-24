<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource("/", 'HomeController');

$admin_url = Config::get('admin.url');

Route::resource("{$admin_url}/login", 'LoginController', array('only' => array('index', 'store')));

Route::group(array('prefix' => $admin_url, 'before' => 'auth'), function()
{

    Route::get('/', array('as' => 'admin', function()
    {
        return 'admin page';
    }));

});
