<?php

namespace App\Http\Controllers\API;

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
        //
    }

    public function store(Request $request)
    {
        $attributes=  request()->validate([
            'name' => ['required','min:2','max:200'],
            'level' => ['required'],
            'instructorNote' => [],
            'barcode' => ['required','numeric','min:2'],
        ]);

        return Patient::create($attributes);

    }

    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
