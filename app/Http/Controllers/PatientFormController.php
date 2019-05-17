<?php

namespace App\Http\Controllers;

use App\PatientForm;
use App\Patient;
use Illuminate\Http\Request;

class PatientFormController extends Controller
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
     * @param  \App\PatientForm  $patientForm
     * @return \Illuminate\Http\Response
     */
    public function show(PatientForm $patientForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PatientForm  $patientForm
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientForm $patientForm)
    {
        $this->authorize('isAdminAuthor');

        $patient = Patient::where('id', '=' , $patientForm->patient_id)->first();
        return view('patient.editPatientForm', compact('patientForm', 'patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PatientForm  $patientForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('isAdminAuthor');

        $patientForm = PatientForm::findorFail($id);
        $patientForm->fill($request->all())->save();

        return back()->with(['message' => 'Patient updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PatientForm  $patientForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientForm $patientForm)
    {
        //
    }
}
