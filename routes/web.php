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

Route::get('/', function () {
    return view('indexfirst');
});
Route::get('admin', function () {
    Voyager::routes();
});
Route::get('admin/receive', function () {
    return view('FeedProject.RecieveOP.index');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('login', function() {
    return view('login');
});
Route::get('hello','HelloController@index');

Route::get('/post/{id}/{name}',function($id,$name){
  return "This is post number ".$id.' And Name is '.$name;
});
//Route::get('welcome/hello','WelcomeController@hello');
//Route::get('welcome/page/{id}/{title?}','WelcomeController@page')
//->where(['id'=>'[0-9]+','title'=>'[a-zA-Z]+']);
//Route::controller('welcome','WelcomeController');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
