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
foreach(user_routes() as $prefix){

    Route::prefix($prefix.'/business')->group(function() {
        Route::get('/', 'BusinessController@index');
    });
}