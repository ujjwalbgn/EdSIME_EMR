<?php

namespace App\Http\Controllers;
use App\MedicationPatient;
use App\Patient;
use App\Medication;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Illuminate\Http\Request;

class MARController extends Controller
{
    public function index(Patient $patient, Medication $medication)
    {
        $medications = Medication::all();
        $assignedMeds = $patient->medication()->get();

        $scheduledMeds = $assignedMeds->where('type','=','Scheduled Medication')
            ->groupBy('name')->toBase();

        $prnMeds = $assignedMeds->where('type','=','PRN Medication')
            ->groupBy('name')->toBase();

        return view('ehr.mar', compact('patient', 'medications'),
            [
                'scheduledMeds' => $scheduledMeds,
                'prnMeds' => $prnMeds
            ]
        );
    }

    public function medScan(Request $request, Patient $patient, Medication $medication)
    {

        $attributes = request()->validate([
            'barcode' => ['required', 'min:2']
        ]);
        $barcode = $attributes;

        try {
            $scanMedication = $medication = Medication::where('barcode', $barcode)->firstorfail();
        }  catch (ModelNotFoundException $ex) {
            return redirect()->back()->with('warning', 'Invalid Barcode for Medication. The barcode is not assigned to any medication in the system.'
            );
        }
        $exists = $medication->patient->contains($patient->id);
        if ($exists == true) {
            $medication = MedicationPatient::where('patient_id', $patient->id)->where('medication_id', $medication->id)->get();
            $yesterdayMeds = $medication->where('day', 'yesterday');
            $todayMeds = $medication->where('day', 'today');
            $tomorrowMeds = $medication->where('day', 'tomorrow');

            return view('medicationPatient.giveMed', compact('patient'),
                [
                    'yesterdayMeds' => $yesterdayMeds,
                    'todayMeds' => $todayMeds,
                    'tomorrowMeds' => $tomorrowMeds,
                    'medication' => $scanMedication
                ]
            );
        } else {
            return redirect()->back()->with('warning', $medication->name . ' was not found in ' . $patient->name .
                '`s records. Please check again.'
            );
        }
    }
}
