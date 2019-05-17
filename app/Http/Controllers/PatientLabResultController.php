<?php

namespace App\Http\Controllers;

use App\PatientLabResult;
use App\Patient;
use Illuminate\Http\Request;

class PatientLabResultController extends Controller
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
     * @param  \App\PatientLabResult  $patientLabResult
     * @return \Illuminate\Http\Response
     */
    public function show(PatientLabResult $patientLabResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PatientLabResult  $patientLabResult
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientLabResult $patientLabResult)
    {
        $this->authorize('isAdminAuthor');

        $patient = Patient::where('id', '=' , $patientLabResult->patient_id)->first();
        return view('patient.editLabResult', compact('patientLabResult', 'patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PatientLabResult  $patientLabResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('isAdminAuthor');

        $patientLabResult = PatientLabResult::findorFail($id);
        $patientLabResult->fill($request->all())->save();

        return back()->with(['message' => 'Patient updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PatientLabResult  $patientLabResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientLabResult $patientLabResult)
    {
        //
    }
}
