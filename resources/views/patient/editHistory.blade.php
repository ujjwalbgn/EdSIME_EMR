@extends('layouts.master')

@section('content')

    @include('layouts.textEditorLoader')
    <section class="content mt-3">
        <div class="container mt-10">
            <a href="/patient/{{$patient->id}}" class=" btn btn-primary">Back to Patient Record</a>
    <div class="mt-3">

            <form method="post" action="/patientHistory/{{$patientHistory->id}}">
                @method('PATCH')
                @csrf
                <textarea name="content" class="form-control TinyMCE-editor">{!! old('content', $patientHistory->content) !!}</textarea>
                <div class="mt-2">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </section>


    @include('layouts.textEditorProperties')
@endsection
