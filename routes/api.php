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
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->get('/me', function(){
        return ['success' => 'true', 'data' => 'Ini data'];
    });
    $api->post('/register',function(){
        return ['success' => 'true', 'data' => 'Register berhasil'];
    });
    $api->post('/login',function(){
        return ['success' => 'true', 'data' => 'Login berhasil'];
    });
    $api->delete('/logout',function(){
        return ['success' => 'true', 'data' => 'Logout berhasil'];
    });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');