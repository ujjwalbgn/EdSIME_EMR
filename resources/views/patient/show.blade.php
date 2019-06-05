@extends('layouts.master')

@section('title', 'Patient Details')

@section('content')
    <div>
        <section class="content mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h6><i class="fa fa-info"></i> Note:</h6>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                Create, View, Edit EHR for <strong>{{$patient->name}}</strong>
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            {{--<div class="card">--}}
                                {{--<div class="card-header p-2">--}}
                                    {{--<ul class="nav nav-pills">--}}
                                        {{--<li class="nav-item"><a class="nav-link active show" href="#admissionRecord" data-toggle="tab">Admission Record</a></li>--}}
                                        {{--<li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">H&P</a></li>--}}
                                        {{--<li class="nav-item"><a class="nav-link" href="#labResults" data-toggle="tab">Lab Results</a></li>--}}
                                        {{--<li class="nav-item"><a class="nav-link" href="#providerOrder" data-toggle="tab">Provider Order</a></li>--}}
                                        {{--<li class="nav-item"><a class="nav-link" href="#patientForm" data-toggle="tab">Form</a></li>--}}
                                        {{--<li class="nav-item"><a class="nav-link" href="#patientDiagnosticStudy" data-toggle="tab">Diagnostic Study</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}

                                {{--Main Content--}}
                                <div class="card-body">
                                    {{--<div class="tab-content">--}}
                                        {{--<div class="tab-pane active show" id="admissionRecord">--}}
                                            {{--<form method="post" action="/admissionRecord/{{$admissionRecord->id}}">--}}
                                                {{--@method('PATCH')--}}
                                                {{--@csrf--}}
                                                {{--@include('patient.formAdmissionRecord')--}}
                                                {{--@can('isAdminAuthor')--}}
                                                {{--<div class="card-footer">--}}
                                                    {{--<button type="submit" class="btn btn-info">Submit</button>--}}
                                                    {{--<button  class="btn btn-default float-right">Cancel</button>--}}
                                                {{--</div>--}}
                                                    {{--@endcan--}}
                                            {{--</form>--}}
                                        {{--</div>--}}
                                        {{--Patient History--}}
                                        {{--<div class="tab-pane" id="history">--}}
                                            {{--@can('isAdminAuthor')--}}
                                            {{--<a class="btn btn-primary" href="/patientHistory/{{$patientHistory->id}}/edit">ADD/Edit Patient History</a>--}}
                                            {{--@endcan--}}
                                            {{--<div class="mt-3">--}}
                                                {{--{!! $patientHistory->content !!}--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--Patient Lab Result--}}
                                        {{--<div class="tab-pane" id="labResults">--}}
                                            {{--@can('isAdminAuthor')--}}
                                            {{--<a class="btn btn-primary" href="/patientLabResult/{{$patientLabResult->id}}/edit">ADD/Edit Patient's Lab Results</a>--}}
                                           {{--@endcan--}}
                                            {{--<div class="mt-3">--}}

                                                {{--{!! $patientLabResult->content !!}--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--Provider Order--}}
                                        {{--<div class="tab-pane" id="providerOrder">--}}
                                            {{--@can('isAdminAuthor')--}}
                                            {{--<a class="btn btn-primary" href="/providerOrder/{{$providerOrder->id}}/edit">ADD/Edit Patient's Provider Order</a>--}}
                                            {{--@endcan--}}
                                            <div class="mt-3">
                                                <form method="post" action="/providerOrder/{{$providerOrder->id}}">
                                                    @method('PATCH')
                                                    @csrf
                                                @include('patient.formProviderOrder')
                                                @can('isAdminAuthor')
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-info">Submit</button>
                                                        {{--<button  class="btn btn-default float-right">Cancel</button>--}}
                                                    </div>
                                                @endcan
                                                {!! $providerOrder->content !!}
                                            </div>
                                        </div>
                                        {{--Patient Form--}}
                                        {{--<div class="tab-pane" id="patientForm">--}}
                                            {{--<a class="btn btn-primary" href="/patientForm/{{$patientForm->id}}/edit">ADD/Edit Patient Forms</a>--}}
                                            {{--<div class="mt-3">--}}
                                                {{--{!! $patientForm->content !!}--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--Patient Diagnostic Study--}}
                                        {{--<div class="tab-pane" id="patientDiagnosticStudy">--}}
                                            {{--<a class="btn btn-primary" href="/patientDiagnosticStudy/{{$patientDiagnosticStudy->id}}/edit">ADD/Edit Patient Diagnostic Study</a>--}}
                                            {{--<div class="mt-3">--}}
                                                {{--{!! $patientDiagnosticStudy->content !!}--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
