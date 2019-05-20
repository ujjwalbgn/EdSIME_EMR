<?php

namespace App\Http\Controllers;

use App\Medication;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicationPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Patient $patient, Medication $medication)
    {
        $medications = Medication::all();
        $assignedMeds = $patient->medication()->get();

//        $assignedMeds_group = $assignedMeds->groupBy('name');

//        dd($assignedMeds_group);

        return view('deleteMe', ['assignedMeds' => $assignedMeds]);

//                return view('medicationPatient.index', compact('patient', 'medications'),
//                    ['assignedMeds' => $assignedMeds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,Patient $patient, Medication $medication)
    {
        return view('medicationPatient.medTime', compact('patient','medication'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patient $patient, Medication $medication)
    {
        $this->authorize('isAdminAuthor');

        $patient->medication()->attach($request->medication,
            array('day'=>$request->day,'time'=>$request->time,'given'=>$request->given,
                'givenby'=>$request->givenby,'lock'=>$request->lock)
        );

        return redirect('/mar/patient/'.$patient->id )->with(['message' => 'Medication has been added to Patient`s record successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Patient $patient,Medication $medication)
    {
        $this->authorize('isAdminAuthor');

        $patient->medication()->detach($medication->id);
        return redirect('/ehr/patient/'.$patient->id )->with(['message' => 'Medication has been removed from Patient`s record successfully']);
    }
}
