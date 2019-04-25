<?php

namespace App\Http\Controllers\API;

use App\AdmissionRecord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;

class AdmissionRecordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {

    }


    public function store(Request $request)
    {
        $attributes=  request()->validate([

        ]);


    }


    public function show($id)
    {
        return 123;
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
    public function destroy($id)
    {
        //
    }
}
