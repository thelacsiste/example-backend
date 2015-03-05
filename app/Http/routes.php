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

Route::get('/', function() {});

Route::group(array('prefix' => 'api'), function() {

    Route::resource('comments', 'CommentController', 
        array('only' => array('index', 'store', 'destroy')));
  
});