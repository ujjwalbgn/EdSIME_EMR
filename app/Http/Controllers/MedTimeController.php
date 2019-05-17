<?php

namespace App\Http\Controllers;

use App\MedTime;
use App\Medication;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Patient $patient, Medication $medication)
    {
//        dd($patient, $medication);
        return view('medicationPatient.medTime', compact('patient','medication'));
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
    public function store(Request $request, Patient $patient, Medication $medication)
    {
       $medPatient = DB::table('medication_patient')->where([
           ['patient_id','=', $patient->id],
           ['medication_id' ,'=', $medication->id]
       ])->get()->first;

       $medPatientId = $medPatient->id->id;


        dd($medPatientId);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedTime  $medTime
     * @return \Illuminate\Http\Response
     */
    public function show(MedTime $medTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedTime  $medTime
     * @return \Illuminate\Http\Response
     */
    public function edit(MedTime $medTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedTime  $medTime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedTime $medTime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedTime  $medTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedTime $medTime)
    {
        //
    }
}
