<?php

namespace App\Http\Controllers;

use App\Nurse;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $this->authorize('isAdminAuthor');

        $attributes=  request()->validate([
            'patient_id' => ['required','numeric'],
            'nurseName' => ['required'],
            'nurseInitial' => ['required'],
            'nurseSign' => ['required'],
            'dateTime' => ['required'],
        ]);

//        dd($attributes);

        Nurse::create($attributes);

        return back()->with(['message' => 'Nurse has been added to patient']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function show(Nurse $nurse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function edit(Nurse $nurse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nurse $nurse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nurse $nurse)
    {
        $this->authorize('isAdminAuthor');
//        dd($nurse);
//        $nurse = Nurse::findOrFail($nurse);
        $nurse->delete();
        return back()->with(['message' => 'Nurse has been deleted']);

    }
}
