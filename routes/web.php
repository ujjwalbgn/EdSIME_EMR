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

    Route::get('/ehr', function () {
        return view('ehr.index');
    });

    Route::resources([
        'patient' => 'PatientController',
        'admissionRecord' => 'AdmissionRecordController',
        'patientHistory' => 'PatientHistoryController',
        'patientLabResult' => 'PatientLabResultController',
        'providerOrder' => 'ProviderOrderController',
        'patientForm' => 'PatientFormController',
        'patientDiagnosticStudy' => 'PatientDiagnosticStudyController',
        'medication' => 'MedicationController',
    ]);


    //Admin and Author
    Route::middleware('can:isAdminAuthor')->group(function (){
        Route::get('/patient/mar/{patient}','MedicationPatientController@index');
        Route::get('/patient/mar/{patient}/{medication}/add','MedicationPatientController@create');
        Route::post('/patient/mar/{patient}/{medication}/add','MedicationPatientController@store');
//        Route::get('/patient/{patient}/{medication}','MedicationPatientController@edit');
        Route::delete('/patient/mar/{patient}/{medication}','MedicationPatientController@destroyMedPatient');

//        Route::get('/ehr/{patient}/{medication}/time', 'MedTimeController@index');
//        Route::post('/ehr/{patient}/{medication}/time', 'MedTimeController@store');
//        Route::delete('/ehr/{medTime}', 'MedTimeController@destroy');
    });


    //EHR Route
    Route::get('/ehr/mar/{patient}','MARController@index');
    Route::post('/ehr/mar/{patient}/medScan','MARController@medScan');

    //Edit or Give Medication
    Route::get('/patient/mar/{patient}/{medication}','MedicationPatientController@show');
    Route::get('/patient/edit/mar/{id}', 'MedicationPatientController@edit');
    Route::patch('/patient/edit/mar/{id}', 'MedicationPatientController@update');
    Route::delete('/patient/edit/mar/{id}', 'MedicationPatientController@destroyMedTime');




});

Auth::routes();
