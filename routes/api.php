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
    Route::post('signup', 'AuthController@signup');
    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::post('verify', 'AuthController@verify');
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
        Route::get('users/{id}', 'UserController@for_chat_create');
        Route::apiResource('company', 'CompanyController');
        Route::apiResource('chats', 'ChatController');
        Route::get('chats/room/{id}', 'ChatController@chat_room');
        Route::apiResource('messages', 'ChatMessageController');
        Route::apiResource('departments', 'DepartmentController');
        Route::apiResource('activities', 'ActivityController');
        Route::apiResource('company_types', 'CompanyTypeController');
    });
});
