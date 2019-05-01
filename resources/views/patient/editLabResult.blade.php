@include('layouts.textEditorProperties')

@extends('layouts.master')

@section('content')

    @include('layouts.textEditorLoader')
    <section class="content mt-3">
        <div class="container mt-10">
            <a href="/patient/{{$patient->id}}" class=" btn btn-primary">Back to Patient Record</a>
            <div class="row m-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="">Lab Results for <strong>{{$patient->name}}</strong></h6>

                        </div>
                        <div class="card-body">
                            <form method="post" action="/patientLabResult/{{$patientLabResult->id}}">
                                @method('PATCH')
                                @csrf
                                <textarea name="content" class="form-control TinyMCE-editor">{!! old('content', $patientLabResult->content) !!}</textarea>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        </div>
    </section>


    @include('layouts.textEditorProperties')
@endsection
