<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MARController extends Controller
{
    public function index(){
        return view('ehr.index');
    }
}
