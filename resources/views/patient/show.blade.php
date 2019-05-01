@extends('layouts.master')

@section('title', 'VUE')

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
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active show" href="#admissionRecord" data-toggle="tab">Admission Record</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#history" data-toggle="tab">H&P</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#labResults" data-toggle="tab">Lab Results</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#providerOrder" data-toggle="tab">Provider Order</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#patientForm" data-toggle="tab">Form</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                                    </ul>
                                </div>

                        {{--Main Content--}}
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="admissionRecord">
                                    <form method="post" action="/admissionRecord/{{$admissionRecord->id}}">
                                        @method('PATCH')
                                        @csrf
                                        @include('patient.formAdmissionRecord')
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            {{--<button  class="btn btn-default float-right">Cancel</button>--}}
                                        </div>
                                    </form>
                                </div>
                                {{--Patient History--}}
                                <div class="tab-pane" id="history">
                                    <a class="btn btn-primary" href="/patientHistory/{{$patientHistory->id}}/edit">ADD/Edit Patient History</a>
                                    <div class="mt-3">
                                    {!! $patientHistory->content !!}
                                    </div>
                                </div>
                                {{--Patient Lab Result--}}
                                <div class="tab-pane" id="labResults">
                                    <a class="btn btn-primary" href="/patientLabResult/{{$patientLabResult->id}}/edit">ADD/Edit Patient History</a>
                                    <div class="mt-3">

                                        {!! $patientLabResult->content !!}
                                    </div>
                                </div>
                                {{--Provider Order--}}
                                <div class="tab-pane" id="providerOrder">
                                    <a class="btn btn-primary" href="/providerOrder/{{$providerOrder->id}}/edit">ADD/Edit Patient History</a>
                                    <div class="mt-3">
                                            @include('patient.formProviderOrder')
                                        {!! $providerOrder->content !!}
                                    </div>
                                </div>
                                {{--Patient Form--}}
                                <div class="tab-pane" id="patientForm">
                                    <a class="btn btn-primary" href="/patientForm/{{$patientForm->id}}/edit">ADD/Edit Patient Froms</a>
                                    <div class="mt-3">
                                        {!! $patientForm->content !!}
                                    </div>
                                </div>

                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-2 control-label">Name</label>

                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName2" class="col-sm-2 control-label">Name</label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                    </div>
                        </div>
                </div>
            </div>
        </section>
    </div>
@endsection
