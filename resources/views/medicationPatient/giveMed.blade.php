@extends('layouts.master')

@section('title', 'Give Medication')

@section('content')
    <section class="content mt-3">
        <div class="container mt-10">
            <a href="/ehr/mar/{{$patient->id}}" class=" btn btn-info">Back to {{$patient->name}}'s MAR</a>

            <a href="/ehr" class="btn btn-primary">Scan Patient</a>

            <a href="/patient/{{$patient->id}}" class=" btn btn-secondary">View to Patient`s EHR</a>

            <div class="row justify-content-center mt-4">
                <div class="col-md-12">
                    @include('medicationPatient.editMedTime')
                </div>
            </div>
        </div>
    </section>
@endsection
