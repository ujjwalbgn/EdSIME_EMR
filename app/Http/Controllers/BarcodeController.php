<?php

namespace App\Http\Controllers;

use App\Medication;
use App\MedicationPatient;
use App\Patient;
use Illuminate\Http\Request;

class BarcodeController extends Controller
{
        public function patient(Patient $patient)
        {
            $patients= Patient::all();
            return view('barcode.index', compact('patients'));
        }

        public function medication (Medication $medication)
        {
            return view('barcode.index', compact('medication'));
        }
}
