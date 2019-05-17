<?php

namespace App\Http\Controllers\API;

use App\Medication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Medication::all()->first()->paginate(10);

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
        $attributes=  request()->validate([
            'name' => ['required','min:2','max:200'],
            'type' => ['required'],
            'description' => [],
            'barcode' => ['required','numeric','min:2'],
        ]);

        return $medication = Medication::create($attributes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $medication = medication::findOrFail($id);

        $this->validate($request,[
            'name' => ['required','min:2','max:200'],
            'type' => ['required'],
            'description' => [],
            'barcode' => ['required','numeric','min:2'],
        ]);

        $medication->update($request->all());
    }

    public function search(){
        if($search = \Request::get('q')){
            $medications = Medication::where(function($query) use ($search){
                $query->where('name','LIKE',"%$search%")
                    ->orWhere('barcode','LIKE',"%$search%")
                    ->orWhere('type','LIKE',"%$search%");
            })->paginate(10);

        } else {
            $medications = parent::all()->first()->paginate(10);
        }

        return $medications;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medication = medication::findOrFail($id);
        $medication->delete();
    }
}
