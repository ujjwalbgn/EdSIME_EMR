<?php

namespace App\Http\Controllers;

use App\Medication;
use App\MedicationPatient;
use App\Patient;
use App\ProviderOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MedicationPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Patient $patient, Medication $medication, ProviderOrder $providerOrder)
    {
        $medications = Medication::all();
        $assignedMeds = $patient->medication()->get();

        $scheduledMeds = $assignedMeds->where('type','=','Scheduled Medication')
            ->groupBy('name')->toBase();

        $prnMeds = $assignedMeds->where('type','=','PRN Medication')
            ->groupBy('name')->toBase();

        $nurses= $patient->nurse()->get();

        $providerOrder = ProviderOrder::where('patient_id', '=', $patient->id )->first();

        return view('medicationPatient.index', compact('patient', 'medications', 'providerOrder'),
                    [
                        'scheduledMeds' => $scheduledMeds,
                        'prnMeds' => $prnMeds,
                        'nurses' => $nurses,
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


    public function show(Request $request, Patient $patient, Medication $medication)
    {
        $medicationDetail = MedicationPatient::where('patient_id', $patient->id)->where('medication_id', $medication->id)->get();
        $yesterdayMeds = $medicationDetail->where('day', 'yesterday');
        $todayMeds = $medicationDetail->where('day', 'today');
        $tomorrowMeds = $medicationDetail->where('day', 'tomorrow');

        return view('medicationPatient.giveMed', compact('patient'),
            [
                'yesterdayMeds' => $yesterdayMeds,
                'todayMeds' => $todayMeds,
                'tomorrowMeds' => $tomorrowMeds,
                'medication' => $medication
            ]
        );
    }


    public function edit(Request $request, Medication $medication, Patient $patient)
    {
        try {
            $medtime = DB::table('medication_patient')
            ->where('id' , '=', $request->id)->get()->first();
        }  catch (ModelNotFoundException $ex) {
            return redirect()->back()->with('warning', 'There was an error, Please check your selection and  try Again'
            );
        }

        $medication = Medication::where('id', $medtime->medication_id)->first();
        $patient = Patient::where('id', $medtime->patient_id)->first();
        return view('medicationPatient.medTime' ,[
            'medtime'=> $medtime,
            'medication' => $medication,
            'patient' => $patient,
        ]);
    }


    public function update(Request $request, $id, $patient_id)
    {
        $medTime= MedicationPatient::findorFail($id);
        $medTime->fill($request->all())->save();
        if ($patient_id == 0){
            return back()->with(['message' => 'Patient`s MAR updated successfully']);
        } else {
            return redirect('/ehr/mar/'.$patient_id)->with(['message' => 'Patient`s MAR updated successfully']);
        }
    }


    public function destroyMedPatient(Request $request,Patient $patient,Medication $medication)
    {
        $this->authorize('isAdminAuthor');
        $patient->medication()->detach($medication->id);
        return redirect('/patient/mar/'.$patient->id )->with(['message' => 'Medication has been removed from Patient`s record successfully']);
    }

    public function destroyMedTime(Request $request, $id)
    {
        $this->authorize('isAdminAuthor');

        $pateint_id = $request->patient_id;
        $medTime= MedicationPatient::findorFail($id);
        $medTime->delete();

        return redirect('/ehr/mar/'.$pateint_id)->with(['message' => 'Medication Time has been removed Patient`s record successfully']);
    }
}
