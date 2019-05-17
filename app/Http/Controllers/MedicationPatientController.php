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

        return view('medicationPatient.index', compact('patient', 'medications', 'assignedMeds' ));
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
    public function store(Request $request, Patient $patient)
    {

        foreach ($request->assigned as $med_id) {
            $exists = DB::table('medication_patient')
                    ->whereMedication_id($med_id)
                    ->wherePatient_id($patient->id)
                    ->count() > 0;
                if($exists == true){
                return redirect('/mar/patient/'.$patient->id )->with(['warning' =>
                    'One or more of the selected Medication is already  present in Patient`s Record. Please try again']);
            }
        }

        $patient->medication()->attach($request->assigned);
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
        $patient->medication()->detach($medication->id);
        return redirect('/mar/patient/'.$patient->id )->with(['message' => 'Medication has been removed from Patient`s record successfully']);
    }
}
