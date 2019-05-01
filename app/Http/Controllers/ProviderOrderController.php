<?php

namespace App\Http\Controllers;

use App\ProviderOrder;
use App\Patient
use Illuminate\Http\Request;

class ProviderOrderController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProviderOrder  $providerOrder
     * @return \Illuminate\Http\Response
     */
    public function show(ProviderOrder $providerOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProviderOrder  $providerOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(ProviderOrder $providerOrder)
    {
        $patient = Patient::where('id', '=' , $providerOrder->patient_id)->first();
        return view('patient.editProviderOrder', compact('providerOrder', 'patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProviderOrder  $providerOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $providerOrder = ProviderOrder::findorFail($id);
        $providerOrder->fill($request->all())->save();

        return back()->with(['message' => 'Patient updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProviderOrder  $providerOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProviderOrder $providerOrder)
    {
        //
    }
}
