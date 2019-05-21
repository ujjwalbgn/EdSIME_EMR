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

        $scheduledMeds = $assignedMeds->where('type','=','Scheduled Medication')
            ->groupBy('name')->toBase();

        $prnMeds = $assignedMeds->where('type','=','PRN Medication')
            ->groupBy('name')->toBase();

                return view('medicationPatient.index', compact('patient', 'medications'),
                    [
                        'scheduledMeds' => $scheduledMeds,
                        'prnMeds' => $prnMeds
                    ]
                );
    }


    public function create(Request $request,Patient $patient, Medication $medication)
    {
        return view('medicationPatient.medTime', compact('patient','medication'));
    }


    public function store(Request $request, Patient $patient, Medication $medication)
    {
        $this->authorize('isAdminAuthor');

        $patient->medication()->attach($request->medication,
            array('day'=>$request->day,'time'=>$request->time,'given'=>$request->given,
                'givenby'=>$request->givenby,'lock'=>$request->lock)
        );

        return redirect('/patient/mar/'.$patient->id )
            ->with(['message' => 'Medication has been added to Patient`s record successfully']);
    }


    public function show(Patient $patient)
    {

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Request $request,Patient $patient,Medication $medication)
    {
        $this->authorize('isAdminAuthor');

        $patient->medication()->detach($medication->id);
        return redirect('/patient/mar/'.$patient->id )->with(['message' => 'Medication has been removed from Patient`s record successfully']);
    }
}
