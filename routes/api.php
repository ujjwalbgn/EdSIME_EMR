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

Route::apiResources([
    'user' => 'API\UserController',
    'patient' => 'API\PatientController',
    'medication' => 'API\MedicationController'
]);

Route::get('profile','API\UserController@profile');
Route::get('findUser','API\UserController@search');
Route::get('findPatient','API\PatientController@search');
Route::get('findMedication','API\MedicationController@search');
Route::put('profile','API\UserController@updateProfile');
