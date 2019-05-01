@extends('layouts.master')

@section('title', 'VUE')

@section('content')
    <div id="app">
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

                        {{--Main Content--}}
                        <div class="card">
                            <div class="card-header p-2">
                                @include('patient.nav')
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    @yield('patientContent')
                                    </div>
                                    {{--Patient History--}}

                                    {{--<div class="tab-pane" id="settings">--}}
                                        {{--<form class="form-horizontal">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="inputName" class="col-sm-2 control-label">Name</label>--}}

                                                {{--<div class="col-sm-10">--}}
                                                    {{--<input type="email" class="form-control" id="inputName" placeholder="Name">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="inputEmail" class="col-sm-2 control-label">Email</label>--}}

                                                {{--<div class="col-sm-10">--}}
                                                    {{--<input type="email" class="form-control" id="inputEmail" placeholder="Email">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="inputName2" class="col-sm-2 control-label">Name</label>--}}

                                                {{--<div class="col-sm-10">--}}
                                                    {{--<input type="text" class="form-control" id="inputName2" placeholder="Name">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="inputExperience" class="col-sm-2 control-label">Experience</label>--}}

                                                {{--<div class="col-sm-10">--}}
                                                    {{--<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="inputSkills" class="col-sm-2 control-label">Skills</label>--}}

                                                {{--<div class="col-sm-10">--}}
                                                    {{--<input type="text" class="form-control" id="inputSkills" placeholder="Skills">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<div class="col-sm-offset-2 col-sm-10">--}}
                                                    {{--<div class="checkbox">--}}
                                                        {{--<label>--}}
                                                            {{--<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>--}}
                                                        {{--</label>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<div class="col-sm-offset-2 col-sm-10">--}}
                                                    {{--<button type="submit" class="btn btn-danger">Submit</button>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</form>--}}
                                    {{--</div>--}}
                                    <!-- /.tab-pane -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
