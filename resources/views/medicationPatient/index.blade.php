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
                            <h6 class="card-title"> <strong>Assign Medication to {{$patient->name}}</strong></h6>

                        </div>
                        <div class="card-body">
                            @foreach($medications as $medication)
                                {{$medication->name}} <br>
                                @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>

        </div>
    </section>
@endsection
