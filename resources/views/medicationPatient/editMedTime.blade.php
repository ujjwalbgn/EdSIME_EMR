<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{$medication->name}}'s Time Table for {{$patient->name}} Level: {{$patient->level }}</h3>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <tbody>
            <tr>
                <th>Yesterday</th>
                <th>Today</th>
                <th>Tomorrow</th>
            </tr>
            <tr>
                <td>
                    @foreach($yesterdayMeds as $yesterdayMed )
                        @if($yesterdayMed->given)
                            <i class="fas fa-check green"></i><strike>
                                @endif
                                {{$yesterdayMed->time}}
                                @if($yesterdayMed->given) </strike>
                            <em>{{$yesterdayMed->givenby}}</em>@endif
                        @can('isAdminAuthor')
                            <div>
                                <a href="/patient/edit/mar/{{$yesterdayMed->id}}" class="btn btn-primary">Edit</a>
                            </div>
                        @endcan
                        <hr>
                    @endforeach
                </td>
                <td>
                    @foreach($todayMeds as $todayMed )
                        @if($todayMed->given)
                            <i class="fas fa-check green"></i><strike>
                                @endif
                                {{$todayMed->time}}
                                @if($todayMed->given) </strike>
                            <em>{{$todayMed->givenby}}</em>
                        @else
                            <div>
                                <form method="post" action="/patient/mar/{{$todayMed->id}}">
                                    @csrf
                                    @method('PATCH')
                                    <input hidden name="given" value="1">
                                    <input type="text" name="givenby" placeholder="Given By" required>

                                    <button class="btn-primary">Give</button>
                                </form>
                                    @endcan
                                    @can('isAdminAuthor')
                                        <div>
                                            <a href="/patient/edit/mar/{{$todayMed->id}}" class="btn btn-primary">Edit</a>
                                        </div>
                                @endcan
                            </div>
                            <hr>
                            @endforeach
                </td>
                <td>
                    @foreach($tomorrowMeds as $tomorrowMed )
                        {{$tomorrowMed->time}}
                        @can('isAdminAuthor')
                            <div>
                                <a href="/patient/edit/mar/{{$tomorrowMed->id}}" class="btn btn-primary">
                            </div>
                        @endcan
                        <hr>
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

