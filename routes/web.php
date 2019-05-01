<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//authenticated user can view these
Route::middleware('auth')->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/users', function () {
        return view('vueLoader.usersTable');
    });
    Route::get('/userProfile', function () {
        return view('vueLoader.userProfile');
    });
    Route::resources([
        'patient' => 'PatientController',
        'admissionRecord' => 'AdmissionRecordController',
        'patientHistory' => 'PatientHistoryController',
        'patientLabResult' => 'PatientLabResultController',
        'providerOrder' => 'ProviderOrderController',
    ]);
});

Auth::routes();
