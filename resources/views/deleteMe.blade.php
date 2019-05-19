{{--todo delete this--}}


@foreach ($assignedMeds as $med)
            {{$med->name}}
        {{$med->pivot->day}}
    <hr>
    @endforeach
