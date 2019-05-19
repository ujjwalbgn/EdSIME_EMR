<?php

namespace App\Http\Controllers\API;

use App\AdmissionRecord;
use App\PatientDiagnosticStudy;
use App\PatientForm;
use App\PatientHistory;
use App\PatientLabResult;
use App\ProviderOrder;
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
        $this->authorize('isAdminAuthor');
        return Patient::all()->first()->paginate(10);
    }

    public function store(Request $request)
    {
        $this->authorize('isAdminAuthor');
        $attributes=  request()->validate([
            'name' => ['required','min:2','max:200'],
            'level' => ['required'],
            'instructorNote' => [],
            'barcode' => ['required','numeric','min:2'],
        ]);

        $patient = Patient::create($attributes);

        //Create Patient Record
        AdmissionRecord::create([
           'patient_id' =>  $patient->id
        ]);
        PatientHistory::create([
            'patient_id' =>  $patient->id
        ]);
        PatientLabResult::create([
            'patient_id' =>  $patient->id
        ]);
        ProviderOrder::create([
            'patient_id' =>  $patient->id
        ]);
        PatientForm::create([
            'patient_id' =>  $patient->id
        ]);
        PatientDiagnosticStudy::create([
            'patient_id' =>  $patient->id
        ]);

    }

    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $this->authorize('isAdminAuthor');

        $patient = Patient::findOrFail($id);

        $this->validate($request,[
            'name' => ['required','min:2','max:200'],
            'level' => ['required'],
            'instructorNote' => [],
            'barcode' => ['required','numeric','min:2'],
        ]);

        $patient->update($request->all());
    }

    public function search()
    {
        if($search = \Request::get('q')){
            $patients = Patient::where(function($query) use ($search){
                $query->where('name','LIKE',"%$search%")
                    ->orWhere('barcode','LIKE',"%$search%")
                    ->orWhere('level','LIKE',"%$search%");
            })->paginate(10);

        } else {
            $patients = parent::all()->first()->paginate(10);
        }

        return $patients;
    }


    public function destroy($id)
    {
        $this->authorize('isAdminAuthor');

        $patient = Patient::findOrFail($id);
        $patient->delete();
    }
}
