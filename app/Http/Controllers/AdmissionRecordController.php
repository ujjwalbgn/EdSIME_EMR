<?php

namespace App\Http\Controllers;

use App\AdmissionRecord;
use App\Patient;
use Illuminate\Http\Request;

class AdmissionRecordController extends Controller
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AdmissionRecord $admissionRecord)
    {
        $this->authorize('isAdminAuthor');
        $patient = Patient::where('id', '=' , $admissionRecord->patient_id)->first();
//        dd($patient);
        return view('patient.editAdmissionRecord', compact('admissionRecord', 'patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('isAdminAuthor');

//        dd($request->healthcare_provider, $request->medical_record_no);
        $admissionRecord = AdmissionRecord::findorFail($id);
        $admissionRecord->fill($request->all())->save();

        return back()->with(['message' => 'Patient updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
