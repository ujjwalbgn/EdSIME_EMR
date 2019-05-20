    @if(isset($assignedMeds_group))
        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>Name</th>
                    <th>Yesterday</th>
                    <th>Today</th>
                    <th>Tomorrow</th>
                </tr>
                @foreach($assignedMeds_group as $name => $medtimes)
                    <tr>

                        <td>
                            {{$name}}
                        </td>

                        <td>
                            @foreach($medtimes as $medtime)
                                @if(($medtime->pivot->day) == 'yesterday')
                                    @if($medtime->pivot->given)
                                        <i class="fas fa-check green"></i><strike>
                                            {{$medtime->pivot->time}}
                                        </strike>
                                        <em>{{$medtime->pivot->givenby}}</em>
                                    @else
                                        {{$medtime->pivot->time}}
                                    @endif
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($medtimes as $medtime)
                                @if(($medtime->pivot->day) == 'today')
                                    @if($medtime->pivot->given)
                                        <i class="fas fa-check green"></i><strike>
                                            {{$medtime->pivot->time}}
                                        </strike>
                                        <em>{{$medtime->pivot->givenby}}</em>

                                    @else
                                        <form method="post" action="/mar/{{$medtime->id}}">
                                            @csrf
                                            @method('PATCH')
                                            <input hidden name="givenby" id="givenby" value="1">
                                            <button>{{$medtime->pivot->time}}</button>
                                        </form>
                                    @endif
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($medtimes as $medtime)
                                @if(($medtime->pivot->day) == 'tomorrow')
                                    {{$medtime->pivot->time}}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
