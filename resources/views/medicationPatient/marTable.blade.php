@if(isset($scheduledMeds))
    <div class="col-md-12 mt-3">
        <div class="card">
            <div class="card-header " data-widget="collapse">
                <h3 class="card-title">Scheduled Medication</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Verified</th>
                        <th>Name</th>
                        <th>Yesterday</th>
                        <th>Today</th>
                        <th>Tomorrow</th>

                        @can('isAdminAuthor')
                            <th>Action</th>
                        @endcan
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($scheduledMeds as $name => $medtimes)
                        <tr>
                            <td>
                                @if(isset($nurses[0]))
                                    {{$nurses[0]->dateTime}}<br/>
                                    <em>{{$nurses[0]->nurseInitial}}</em>
                                @endif
                            </td>
                            <td>
                                <h5>{{$name}}</h5>
                                <p>{{$medtimes[0]->description}}</p>
                            </td>
                            <td>
                                @foreach($medtimes as $medtime)

                                        @if(($medtime->pivot->day) == 'yesterday')
                                            @if($medtime->pivot->given)
                                                <i class="fas fa-check green"></i><strike>
                                                    {{$medtime->pivot->time}}
                                                </strike>
                                                <em>{{$medtime->pivot->givenby}}</em> <br/>
                                            @else
                                                {{$medtime->pivot->time}} <br/>
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
                                                <em>{{$medtime->pivot->givenby}}</em> <br/>
                                            @else
                                                {{$medtime->pivot->time}} <br/>
                                            @endif
                                        @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($medtimes as $medtime)

                                        @if(($medtime->pivot->day) == 'tomorrow')
                                            {{$medtime->pivot->time}} <br/>
                                        @endif
                                @endforeach
                            </td>
                            @can('isAdminAuthor')
                                <td>
                                    <a href="/patient/mar/{{$patient->id}}/{{$medtime->id}}"><i class="fa fa-edit blue"></i></a>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endif

@if(isset($prnMeds))
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header " data-widget="collapse">
                <h6 class="card-title">PRN Medication</h6>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Verified</th>
                        <th>Name</th>
                        <th>Yesterday</th>
                        <th>Today</th>
                        <th>Tomorrow</th>
                        @can('isAdminAuthor')
                            <th>Action</th>
                        @endcan
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($prnMeds as $name => $medtimes)
                        <tr>
                            <td>
                                @if(isset($nurses[0]))
                                    {{$nurses[0]->dateTime}}<br/>
                                    <em>{{$nurses[0]->nurseInitial}}</em>
                                @endif
                            </td>
                            <td>
                                <h5>{{$name}}</h5>
                                <p>{{$medtimes[0]->description}}</p>
                            </td>
                            <td>
                                @foreach($medtimes as $medtime)
                                        @if(($medtime->pivot->day) == 'yesterday')
                                            @if($medtime->pivot->given)
                                                <i class="fas fa-check green"></i><strike>
                                                    {{$medtime->pivot->time}}
                                                </strike>
                                                <em>{{$medtime->pivot->givenby}}</em><br/>
                                            @else
                                                {{$medtime->pivot->time}}<br/>
                                            @endif
                                        @endif

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
                                                <em>{{$medtime->pivot->givenby}}</em><br/>
                                            @else
                                                {{$medtime->pivot->time}}

                                                @can('isAdminAuthor')
                                                    X 
                                                    @endcan
                                                    <br/>
                                            @endif
                                        @endif
                                    </p>
                                @endforeach
                            </td>
                            <td>
                                @foreach($medtimes as $medtime)

                                        @if(($medtime->pivot->day) == 'tomorrow')
                                            {{$medtime->pivot->time}} <br/>
                                        @endif
                                @endforeach
                            </td>
                            @can('isAdminAuthor')
                                <td>
                                    <a href="/patient/mar/{{$patient->id}}/{{$medtime->id}}"><i class="fa fa-edit blue"></i></a>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endif
