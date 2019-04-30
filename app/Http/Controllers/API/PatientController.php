<?php

namespace App\Http\Controllers\API;

use App\AdmissionRecord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;

class PatientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        return Patient::all()->first()->paginate(2);
    }

    public function store(Request $request)
    {
        $attributes=  request()->validate([
            'name' => ['required','min:2','max:200'],
            'level' => ['required'],
            'instructorNote' => [],
            'barcode' => ['required','numeric','min:2'],
        ]);

        $patient = Patient::create($attributes);

        //Create Record
        AdmissionRecord::create([
           'patient_id' =>  $patient->id
        ]);
    }

    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);

        $this->validate($request,[
            'name' => ['required','min:2','max:200'],
            'level' => ['required'],
            'instructorNote' => [],
            'barcode' => ['required','numeric','min:2'],
        ]);

        $patient->update($request->all());
    }


    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
    }
}