<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('email', 'AuthController@checkEmail');
    Route::post('signup', 'AuthController@signup');
    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::post('verify', 'AuthController@verify');
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
        Route::get('search/users', 'UserController@search');
        Route::get('users/{id}', 'UserController@chat_room');
        Route::get('{slug}/users', 'CompanyController@users');
        Route::post('{slug}/users/attach', 'CompanyController@attachUser');
        Route::post('{slug}/users/detach', 'CompanyController@detachUser');
        Route::post('/department/{slug}/users/attach', 'DepartmentController@attachUser');
        Route::post('/department/{slug}/users/detach', 'DepartmentController@detachUser');
        Route::apiResource('company', 'CompanyController');
        Route::apiResource('chats', 'ChatController');
        Route::post('chats/guard', 'ChatController@navigationGuardForChat');
        Route::get('chats/room/{id}', 'ChatController@chat_room');
        Route::apiResource('messages', 'ChatMessageController');
        Route::apiResource('users', 'UserController');
        Route::apiResource('departments', 'DepartmentController');
        Route::apiResource('activities', 'ActivityController');
        Route::apiResource('company_types', 'CompanyTypeController');
    });
});
