{{--todo delete this--}}

{{--@dd($assignedMeds_group)--}}

@if(isset($assignedMeds))
        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>Name</th>
                    <th>Yesterday</th>
                    <th>Today</th>
                    <th>Tomorrow</th>
                </tr>
                @foreach($assignedMeds as $assignedMed)
                <tr>
                    <td>
                        {{$assignedMed->name}}
                    </td>
                    <td>
                        @if(($assignedMed->pivot->day) == 'yesterday')
                            @if($assignedMed->pivot->given)
                                <i class="fas fa-check green"></i><strike>
                                    {{$assignedMed->pivot->time}}
                            </strike>
                                <em>{{$assignedMed->pivot->givenby}}</em>
                                @else
                                {{$assignedMed->pivot->time}}
                                @endif
                            @endif

                    </td>
                    <td>
                        @if(($assignedMed->pivot->day) == 'today')
                            @if($assignedMed->pivot->given)
                                <i class="fas fa-check green"></i><strike>
                                    {{$assignedMed->pivot->time}}
                                </strike>
                                <em>{{$assignedMed->pivot->givenby}}</em>

                            @else
                                <form method="post" action="/mar/{{$assignedMed->id}}">
                                @csrf
                                @method('PATCH')
                                <input hidden name="givenby" id="givenby" value="1">
                                <button>{{$assignedMed->pivot->time}}</button>
                            </form>
                            @endif
                        @endif
                    </td>
                    <td>
                        @if(($assignedMed->pivot->day) == 'tomorrow')
                            {{$assignedMed->pivot->time}}
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endif
