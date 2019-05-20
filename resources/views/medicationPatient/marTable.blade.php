    @if(isset($assignedMeds_group))
        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>Name</th>
                    <th>Yesterday</th>
                    <th>Today</th>
                    <th>Tomorrow</th>
                    <th>Action</th>
                </tr>
                @foreach($assignedMeds_group as $name => $medtimes)
                    <tr>
                        <td>
                            <h4>{{$name}}</h4>
                            {{--@dd($medtimes)--}}
                            <p>{{$medtimes[0]->description}}</p>
                        </td>
                        <td>
                            @foreach($medtimes as $medtime)
                                <p>
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
                                </p>
                            @endforeach
                        </td>
                        <td>
                            @foreach($medtimes as $medtime)
                                <p>
                                @if(($medtime->pivot->day) == 'today')
                                    @if($medtime->pivot->given)
                                        <i class="fas fa-check green"></i><strike>
                                            {{$medtime->pivot->time}}
                                        </strike>
                                        <em>{{$medtime->pivot->givenby}}</em>
                                        @else
                                        {{$medtime->pivot->time}}
                                    @endif
                                @endif
                                </p>
                            @endforeach
                        </td>
                        <td>
                            @foreach($medtimes as $medtime)
                                <p>
                                @if(($medtime->pivot->day) == 'tomorrow')
                                    {{$medtime->pivot->time}}
                                @endif
                                </p>
                            @endforeach
                        </td>
                        <td>
                            <form method="post" action="/patient/mar/{{$patient->id}}/{{$medtime->id}}">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="text-button red"><a class="fa fa-trash red"></a></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif
