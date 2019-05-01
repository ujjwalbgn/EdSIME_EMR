<?php

namespace App\Http\Controllers;

use App\PatientHistory;
use App\Patient;
use Illuminate\Http\Request;

class PatientHistoryController extends Controller
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
     * @param  \App\PatientHistory  $patientHistory
     * @return \Illuminate\Http\Response
     */
    public function show(PatientHistory $patientHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PatientHistory  $patientHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientHistory $patientHistory)
    {
        $patient = Patient::where('id', '=' , $patientHistory->patient_id)->first();
        return view('patient.editHistory', compact('patientHistory', 'patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PatientHistory  $patientHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patientHistory = PatientHistory::findorFail($id);
        $patientHistory->fill($request->all())->save();

        return back()->with(['message' => 'Patient updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PatientHistory  $patientHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientHistory $patientHistory)
    {
        //
    }
}
