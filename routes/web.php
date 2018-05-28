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
    abort(404);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register',['as' => 'register', 'uses' => function(){
    abort(404);
}]);
Route::get('/password/reset',['as' => 'password.request', 'uses' => function(){
    abort(404);
}]);

Route::get('/getout', ['as' => 'getout', 'uses' => function(){
    Auth::logout();
    return redirect()->route('login');
}]);


Route::group(['middleware' => ['web', 'auth']], function(){
    Route::group(['prefix' => '/app', 'as' => 'app.'], function(){
        Route::get('/index', ['as' => 'index', 'uses' => 'ApplicationController@index']);
        Route::get('{id}/edit', ['as' => 'edit', 'uses' => 'ApplicationController@showEdit']);
        Route::post('{id}/edit', ['as' => 'doedit', 'uses' => 'ApplicationController@doEdit']);
        Route::get('/add', ['as' => 'add', 'uses' => 'ApplicationController@showAdd']);
        Route::post('/add', ['as' => 'doadd', 'uses' => 'ApplicationController@doAdd']);
        Route::get('{id}/delete', ['as' => 'delete', 'uses' => 'ApplicationController@doDelete']);
    });
});
