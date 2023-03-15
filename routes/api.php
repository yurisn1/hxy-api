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

//get all colaborators
Route::get('colaborators', 'App\Http\Controllers\ColaboratorController@getColaborators');

//get colaborator by id
Route::get('colaborator/{id}', 'App\Http\Controllers\ColaboratorController@getColaboratorById');

//create colaborator
Route::post('register', 'App\Http\Controllers\ColaboratorController@registerColaborator');

//update colaborator
Route::put('updateColaborator/{id}', 'App\Http\Controllers\ColaboratorController@updateColaborator');

//delete colaborator
Route::delete('deleteColaborator/{id}', 'App\Http\Controllers\ColaboratorController@deleteColaborator');