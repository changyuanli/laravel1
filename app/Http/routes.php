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

Route::get('/', function () {
    $user = new App\User();
    $users = $user->usertest();
    return $users->all();
});
Route::get('/test','TestController@test');
Route::get('/my/about','myController@getAbout');
Route::get('/my/welcome','myController@index');
Route::get('/my/{number}',function($number){
    return view('home'.$number);
});
Route::get('form',function(){
    return view('form');
});
Route::any('test',function(){
    return Request::all();
});