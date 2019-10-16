<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::prefix('auth')->group(function () {
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::get('refresh', 'AuthController@refresh');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('user', 'AuthController@user');
        Route::post('logout', 'AuthController@logout');
    });
});

Route::get('users/{id}', 'UserController@show');
Route::post('users/agent/feedback', 'UserController@agentFeedback');

Route::prefix('admin')->group(function () {

    Route::get('cities', function () {
        $cities = \App\City::all();
        return response()->json(['status' => 'success', 'cities' => $cities], 200);
    });

    // Users
    Route::get('users', 'UserController@index');
    Route::get('users/{id}', 'UserController@show');
    Route::post('users/update', 'UserController@usersUpdate');
    Route::post('users/delete', 'UserController@usersDelete');

    Route::get('agents', 'UserController@agents');
    Route::post('agents/approve', 'UserController@agentsApprove');

    Route::get('uni/all', 'UniversityController@all');
    Route::post('uni/add', 'UniversityController@add');
    Route::post('uni/update', 'UniversityController@update');
    Route::post('uni/delete', 'UniversityController@delete');

    Route::get('students', 'UserController@students');
});

Route::prefix('agent')->group(function () {
    Route::get('uni/universities', 'UniversityController@universities');
    Route::post('uni/register', 'UniversityController@agentRegister');
});

Route::prefix('student')->group(function () {
    Route::get('all', 'StudentController@all');
    Route::post('enrollment', 'StudentController@enrollment');
    Route::post('agent/feedback', 'StudentController@createFeedback');
});
