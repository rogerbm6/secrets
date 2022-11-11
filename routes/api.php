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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Secrets
Route::get('secrets', '\App\Http\Controllers\Api\SecretController@index');

Route::post('crear', '\App\Http\Controllers\Api\SecretController@store');

Route::get('ver/{id}', '\App\Http\Controllers\Api\SecretController@show');

Route::delete('delete/{id}', '\App\Http\Controllers\Api\SecretController@destroy');