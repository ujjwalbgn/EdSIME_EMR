<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Medication;

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

//            dd($prnMeds);
        return view('ehr.mar', compact('patient', 'medications'),
            [
                'scheduledMeds' => $scheduledMeds,
                'prnMeds' => $prnMeds
            ]
        );
    }
}
