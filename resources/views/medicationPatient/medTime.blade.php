@extends('layouts.master')

@section('title', 'Patient`s Medication')

@section('content')
    <section class="content mt-3">
        <div class="container mt-10">
            <a href="/mar/patient/{{$patient->id}}/" class=" btn btn-primary">View to Patient`s Medication <List></List></a>
            <div class="row m-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title"> <strong>Medication's to {{$patient->name}} Level: {{$patient->level }}</strong></h6>

                        </div>
                        <div class="mt m-3 align-center">
                            <h5><strong>Add Time For Medication</strong></h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
