@extends('layouts.master')

@section('title', 'Patient`s MAR')

@section('content')
    <section class="content mt-3">
        <div class="container mt-10">

            <a href="/ehr" class=" btn btn-primary">Scan Patient</a>

            <a href="/patient/{{$patient->id}}" class=" btn btn-secondary">View to Patient`s EHR</a>

            @include('medicationPatient.marTable')
        </div>
    </section>
@endsection
