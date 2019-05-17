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
        $medPatient = DB::table('medication_patient')->select('id')
            ->Where([
                ['patient_id','=', $patient->id],
                ['medication_id' ,'=', $medication->id]
            ])->get()->first;
        $medPatientId = $medPatient->id->id;
        $assignedMedTimes = MedTime::where('med_patient_id' ,'=' , $medPatientId)->get();

        $yesterdayMedTimes = $assignedMedTimes->where('day', '=', 'yesterday')->all();
        $todayMedTimes = $assignedMedTimes->where('day', '=', 'today')->all();
        $tomorrowMedTimes = $assignedMedTimes->where('day', '=', 'tomorrow')->all();

    //        dd($todayMed);

        return view('medicationPatient.medTime', compact('patient','medication'),[
            'assignedMedTimes' => $assignedMedTimes,
            'yesterdayMedTimes' => $yesterdayMedTimes,
            'todayMedTimes' => $todayMedTimes,
            'tomorrowMedTimes' => $tomorrowMedTimes,
        ]);
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
        $medPatient = DB::table('medication_patient')->select('id')
            ->Where([
                ['patient_id','=', $patient->id],
                ['medication_id' ,'=', $medication->id]
            ])->get()->first;

        $medPatientId = $medPatient->id->id;


        MedTime::create([
            'med_patient_id' => $medPatientId,
            'day' => $request->day,
            'time' => $request->time,
            'given' => $request->given,
            'givenby' => $request->givenby,
            'lock' => $request->lock,
        ]);

        return back()->with(['message' => 'Medication has been added to Patient`s record successfully']);



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
        $medTime->delete();
        return back()->with(['message' => 'Medication Time has been removed']);
    }
}
