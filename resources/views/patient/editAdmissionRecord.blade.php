@extends('patient.show')

@section('patientContent')
<form method="post" action="/admissionRecord/{{$admissionRecord->id}}">
    @method('PATCH')
    @csrf
    @include('patient.formAdmissionRecord')
    <div class="card-footer">
        <button type="submit" class="btn btn-info">Submit</button>
        <button  class="btn btn-default float-right">Cancel</button>
    </div>
</form>
    @endsection
