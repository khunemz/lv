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
App::bind('App\BlogRepositoryInterface', 'App\BlogRepository');

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
    Route::get('admin', [
        'uses' => 'AdminController@get',
        'as' => 'admin.get'
    ]);

    Route::get('getsignin', [
        'uses' => 'AdminController@getsignin',
        'as' => 'admin.getsignin'
    ]);

    Route::get('getsignup', [
        'uses' => 'AdminController@getsignup',
        'as' => 'admin.getsignup'
    ]);

    Route::post('admin', [
        'uses' => 'AdminController@postsignin',
        'as' => 'admin.postsignin'
    ]);

    Route::post('postsignup', [
        'uses' => 'AdminController@postsignup',
        'as' => 'admin.postsignup'
    ]);

    Route::get('admin/getsignout', [
        'uses' => 'AdminController@getsignout',
        'as' => 'admin.getsignout'
    ]);

    //BlogController(resource)
   Route::resource('blog', 'BlogController');

});
