@extends('layouts.master')

@section('title', 'Scan Patient')

@section('content')
    <section class="content mt-3">
        @include('layouts.print')
        <div class="container mt-10">
            @if(isset($patients))
                @foreach($patients as $patient)
                    <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($patient->barcode, "C128",1,35)}}"/>
                    <br/>
                    {{$patient->name}} Level: {{$patient->level}}
                    <br/>
                    <hr>
                @endforeach
            @endif


            @if(isset($medications))
                @foreach($medications as $med)
                    <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($med->barcode, "C128",1,35)}}"/>
                    <br/>
                    {{$med->name}}
                    <br/>
                    <hr>
                @endforeach
            @endif

            @if(isset($medication))
                @for ($i = 0; $i < 10; $i++)
                    <div class="row mt-4">
                        <div class="col-4">
                            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($medication->barcode, "C128",1,35)}}"/>
                            <br>
                            {{$medication->name}}
                        </div>
                        <div class="col-4">
                            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($medication->barcode, "C128",1,35)}}"/>
                            <br>
                            {{$medication->name}}
                        </div>
                        <div class="col-4">
                            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($medication->barcode, "C128",1,35)}}"/>
                            <br>
                            {{$medication->name}}
                        </div>
                    </div>
                    <hr/>
                @endfor
            @endif
        </div>

    </section>
@endsection
