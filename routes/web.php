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
    return view('welcome');
});
//Route::get('/test', 'UserController@test');

Route::get('art', function() {
    return view('/member/art');
});
Route::get('foo',function(){
    return 'hello world';
});
//Route::redirect('/user','/test',301);

//Route::permanentRedirect('/user','/test');

//Route::view('/welcome','welcome')->name('profile');

/*Route::get('/test/{id}',function($id){
    return 'user'.$id;
});*/

Route::get('/test/{id}',function($id){
    return 'hello'.$id;
});

Route::get('api/users/{user}', function (App\User $user) {
    return $user->email;
});
Route::get('profile/{user}', function (App\User $user) {
    //
});

//Route::get('art/index','ArtController@index');
//Route::get('art/create','ArtController@create');
//Route::get('art/store','ArtController@store');

Route::prefix('art')->group(function(){
    Route::get('index','ArtController@index');
    Route::get('create','ArtController@create');
    Route::get('store','ArtController@store');
    Route::get('edit/{id}/{name}','ArtController@edit');
    Route::get('update','ArtController@update');
    Route::get('show','ArtController@show');
    Route::get('destroy/{id}','ArtController@destroy');

});

/*Route::prefix('admin/art')->namespace('Admin')->group(function(){
    Route::get('index','ArtController@index');
    Route::get('create','ArtController@create');
    Route::get('store','ArtController@store');
});*/

Route::prefix('admin')->namespace('Admin')->middleware('amber')->group(function(){
   Route::prefix('art')->group(function(){
       Route::get('index','ArtController@index');
       Route::get('create','ArtController@create');
       Route::get('store','ArtController@store');
   });
});

Route::get('admin/index/index','Admin\IndexController@index');
Route::post('admin/index/logon','Admin\IndexController@logon');

