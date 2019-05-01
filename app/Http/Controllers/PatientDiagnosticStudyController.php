<?php

namespace App\Http\Controllers;

use App\PatientDiagnosticStudy;
use App\Patient;
use Illuminate\Http\Request;

class PatientDiagnosticStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PatientDiagnosticStudy  $patientDiagnosticStudy
     * @return \Illuminate\Http\Response
     */
    public function show(PatientDiagnosticStudy $patientDiagnosticStudy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PatientDiagnosticStudy  $patientDiagnosticStudy
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientDiagnosticStudy $patientDiagnosticStudy)
    {
        $patient = Patient::where('id', '=' , $patientDiagnosticStudy->patient_id)->first();
        return view('patient.editPatientDiagnosticStudy', compact('patientDiagnosticStudy', 'patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PatientDiagnosticStudy  $patientDiagnosticStudy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patientDiagnosticStudy = PatientDiagnosticStudy::findorFail($id);
        $patientDiagnosticStudy->fill($request->all())->save();

        return back()->with(['message' => 'Patient updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PatientDiagnosticStudy  $patientDiagnosticStudy
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientDiagnosticStudy $patientDiagnosticStudy)
    {
        //
    }
}
