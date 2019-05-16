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
                                @foreach($assignedMeds as $assignMed)
                                    <div class="row">
                                        <div class="col-8">
                                            {{$assignMed->name}} Type:{{$assignMed->type}}
                                        </div>
                                        <div class="col-2">
                                            <a href="/mar/{{$patient->id}}/{{$assignMed->id}}/time" class="">Medication Time</a>
                                        </div>
                                        <div class="col-2">
                                            <form method="post" action="/mar/patient/{{$patient->id}}/med/{{$assignMed->id}}">
                                                @method('DELETE')
                                                @csrf
                                                <button class="small-box btn-danger">Remove</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title"> <strong>Select Medications for {{$patient->name}}</strong></h6>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/mar/patient/{{$patient->id}}/med">
                                @method('post')
                                @csrf
                                @foreach($medications as $medication)
                                    <ul>
                                            <input type="checkbox" name="assigned[]" value="{{$medication->id}}">
                                            {{$medication->name}} Type: {{$medication->type}}
                                    </ul>
                                @endforeach
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button  type="reset" class="btn btn-default float-right">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
