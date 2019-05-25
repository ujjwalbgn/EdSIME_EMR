@extends('layouts.master')

@section('title', 'Patient`s Medication')

@section('content')
    <section class="content mt-3">
        <div class="container mt-10">
            <a href="/patient" class=" btn btn-primary">View All Patients</a>

            <a href="/patient/{{$patient->id}}" class=" btn btn-secondary">View to Patient`s EHR</a>
            <div class="row m-2">


                @include('medicationPatient.marTable')
                <div class="col-md-12">
                    <div class=" card">
                        <div class="card-header">
                            <h6 class="card-title"> <strong>Select Medications for {{$patient->name}}</strong></h6>
                        </div>
                        <div class="card-body">
                            @foreach($medications as $medication)
                                <ul>
                                    <div class="row">
                                        <div class="col-8">
                                            {{$medication->name}}
                                        </div>

                                        <div class="col-2">
                                            <button href="/patient/mar/{{$patient->id}}/{{$medication->id}}/add" class="btn btn-success">Assign Time</button>
                                        </div>
                                        <div class="col-2">
                                            @if($medication->type == "PRN Medication")
                                                <form method="post" action="/patient/mar/{{$patient->id}}/{{$medication->id}}/add">
                                                    @method('post')
                                                    @csrf
                                                    <input type="hidden" name="medication_id" id="medication" value="{{$medication->id}}">
                                                    <input type="hidden" name="day" id="day" value="today">
                                                    <input type="hidden" name="given" id="given" value="0">
                                                    <input type="hidden" name="lock" id="given" value="1">
                                                    <button class="btn btn-primary">Assign PRN</button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
                @include('nurse.index')
            </div>

        </div>
    </section>
@endsection
