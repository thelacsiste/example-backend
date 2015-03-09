<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

get('/', function() {});

get('home', 'HomeController@index');

get('login', 'Auth\AuthController@login');
get('logout', 'Auth\AuthController@getLogout');

Route::group(array('prefix' => 'api'), function() {

    resource('comments', 'CommentController', 
        array('only' => array('index', 'store', 'destroy')));

});