@extends('layouts.master')

@section('title', 'Patient`s Medication')

@section('content')
    <section class="content mt-3">
        <div class="container mt-10">
            <a href="/patient" class=" btn btn-primary">View All Patients</a>

            <a href="/patient/{{$patient->id}}" class=" btn btn-secondary">View to Patient`s EHR</a>
            <div class="row m-2">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header">
                            <h6 class="card-title"> <strong>Medication's to {{$patient->name}} Level: {{$patient->level }}</strong></h6>
                        </div>
                        <div class="mt m-5 align-center">
                            <h5><strong> List Of Medications Already Assigned</strong></h5>
                            <div class="m-3">

                                @if(isset($assignedMeds))
                                @foreach($assignedMeds as $assignMed)
                                    <div class="row">
                                        <div class="col-8">
                                            {{$assignMed->name}} Type:{{$assignMed->type}} {{$assignMed->time}}
                                        </div>
                                        <div class="col-2">
                                            <a href="/mar/{{$patient->id}}/{{$assignMed->id}}/time" class="">Medication Time</a>
                                        </div>
                                    </div>
                                @endforeach
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title"> <strong>Select Medications for {{$patient->name}}</strong></h6>
                        </div>
                        <div class="card-body">

                                @foreach($medications as $medication)
                                    <ul>
                                        <div class="row">
                                            <div class="col-9">
                                        {{$medication->name}}
                                            </div>
                                            <div class="col-3">
                                                <a href="/mar/{{$patient->id}}/{{$medication->id}}/add" class="">Assign Med & Time</a>
                                            </div>
                                        </div>
                                    </ul>
                                @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
