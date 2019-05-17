<?php

namespace App\Http\Controllers;

use App\AdmissionRecord;
use App\Patient;
use App\PatientDiagnosticStudy;
use App\PatientForm;
use App\PatientHistory;
use App\PatientLabResult;
use App\ProviderOrder;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient, AdmissionRecord $admissionRecord, PatientHistory $patientHistory,
                         PatientLabResult $patientLabResult , ProviderOrder $providerOrder, PatientForm $patientForm ,
                         PatientDiagnosticStudy $patientDiagnosticStudy)
    {
        $admissionRecord = AdmissionRecord::where('patient_id', '=', $patient->id )->first();
        $patientHistory = PatientHistory::where('patient_id', '=', $patient->id )->first();
        $patientLabResult = PatientLabResult::where('patient_id', '=', $patient->id )->first();
        $providerOrder = ProviderOrder::where('patient_id', '=', $patient->id )->first();
        $patientForm = PatientForm::where('patient_id', '=', $patient->id )->first();
        $patientDiagnosticStudy = PatientDiagnosticStudy::where('patient_id', '=', $patient->id )->first();

        return view('patient.show',compact('patient','admissionRecord','patientHistory',
            'patientLabResult','providerOrder','patientForm','patientDiagnosticStudy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
