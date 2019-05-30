@extends('layouts.master')

@section('title', 'Patient`s MAR')

@section('content')
    <section class="content mt-3">
        <div class="container mt-10">

            <a href="/ehr" class=" btn btn-primary">Scan Patient</a>

            <a href="/patient/{{$patient->id}}" class=" btn btn-secondary">View to Patient`s EHR</a>

            <div class="row justify-content-center mt-4">
                <div class="col-md-12">
                    <form method="post" action="/ehr/mar/{{$patient->id}}/medScan">@csrf
                        @Method('post')
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend ">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-search"></i>&nbsp </span>
                            </div>
                            <input autofocus="autofocus" type="text" name="barcode" class="form-control border border-primary" id="barcode"
                                   placeholder="Scan barcod or enter patient's name here"
                                   height="20" required>
                        </div>
                    </form>
                </div>
            </div>
            @include('patient.marDetails')
            @include('medicationPatient.marTable')

            @include('nurse.index')
        </div>
    </section>
    @can('isAdminAuthor')
        <div class="row no-print">
            <div class="col-12">

                <a href="" @click.prevent="printme" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>

            </div>
        </div>

    @endcan
@endsection
