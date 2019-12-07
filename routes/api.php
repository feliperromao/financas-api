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

Route::group([
    'prefix' => '/v1',
    'middleware' => 'api',
    'namespace' => 'API\V1',
], function ($router) {

    Route::prefix('/auth')->group(function(){
        Route::post('/login', 'AuthController@login');
        Route::post('/logout', 'AuthController@logout');
        Route::post('/refresh', 'AuthController@refresh');
        Route::post('/me', 'AuthController@me');

    });

    // Rotas de recursos protegidas por autenticação via token JWT
    Route::group(['middleware' => 'auth:api'], function(){
        Route::resource('/category', 'CategoryController');
        Route::resource('/payment', 'PaymentController');
    });

});