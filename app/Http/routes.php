<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Interface and Implementation binding
|--------------------------------------------------------------------------
|
|
*/
App::bind('App\AdminRepositoryInterface', 'App\AdminRepository');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {

    //AdminController
    Route::get('admin/index', [
        'uses' => 'AdminController@getindex',
        'as' => 'admin.index'
    ]);

    Route::get('getsignin', [
        'uses' => 'AdminController@getsignin',
        'as' => 'admin.getsignin'
    ]);

    Route::post('postsignin', [
        'uses' => 'AdminController@postsignin',
        'as' => 'admin.postsignin'
    ]);

    Route::get('getsignout', [
        'uses' => 'AdminController@getsignout',
        'as' => 'admin.signout'
    ]);
});
