@extends('layouts.master')

@section('title', 'Patient`s Medication')

@section('content')
    <section class="content mt-3">
        <div class="container mt-10">
            <a href="/mar/patient/{{$patient->id}}/" class=" btn btn-primary">View to Patient`s Medication <List></List></a>
            <div class="row m-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title"> <strong>Medication's to {{$patient->name}} Level: {{$patient->level }}</strong></h6>
                        </div>
                        <div class="mt m-3 align-center">
                            <h5><strong>Add Medication Time For {{$medication->name}}</strong></h5>
                            <form method="post" action="/mar/{{$patient->id}}/{{$medication->id}}/time">
                                @method('post')
                                @csrf

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button  type="reset" class="btn btn-default float-right">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
