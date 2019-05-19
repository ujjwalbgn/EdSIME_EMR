@extends('layouts.master')

@section('title', 'Patient`s Medication')

@section('content')
    <section class="content mt-3">
        <div class="container mt-10">
            <a href="/mar/patient/{{$patient->id}}/" class=" btn btn-primary">View to Patient`s Medication List</a>
            <div class="row m-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title"> <strong>Add {{$patient->name}}'s (Level: {{$patient->level }}) time for {{$medication->name}}</strong></h6>
                        </div>
                        <div class="mt m-3 align-center">
                            <form method="post" action="/mar/{{$patient->id}}/{{$medication->id}}/add">
                                @method('post')
                                @csrf
                                <input type="hidden" name="medication" id="medication" value="{{$medication->id}}">
                                <div class="form-group row">
                                    <label for="day" class="col-sm-4 col-form-label">Select the Day</label>
                                    <div class="col-sm-6">
                                        <select type="text"  name="day" class="form-control" id="day" required>
                                            <option value="">Select the day</option>
                                            <option value="yesterday"  @if(isset($medtime)){{old('day',$medtime->day)=="yesterday"? 'selected':''}}@endif>Yesterday</option>
                                            <option value="today"  @if(isset($medtime)){{old('day',$medtime->day)=="today"? 'selected':''}}@endif>Today</option>
                                            <option value="tomorrow"  @if(isset($medtime)){{old('day',$medtime->day)=="tomorrow"? 'selected':''}}@endif>Tomorrow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="time" class="col-sm-4 col-form-label">Medication Time</label>
                                    <div class="col-sm-6">
                                        <input type="number" name="time" class="form-control" id="time" placeholder="Time" required
                                               value= @if(isset($medtime))"{{$medtime->time}}"@else "{{old('time')}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="given" class="col-sm-4 col-form-label">Medication Given</label>
                                    <div class="col-sm-6">
                                        <select  name="given" class="form-control" id="day" required>
                                            <option value="">Select if the Medication was given</option>
                                            <option value="1"  @if(isset($medtime)){{old('given',$medtime->given)=="1"? 'selected':''}}@endif>Yes</option>
                                            <option value="0"  @if(isset($medtime)){{old('given',$medtime->given)=="0"? 'selected':''}}@endif>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="givenby" class="col-sm-4 col-form-label">* Given by</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="givenby" class="form-control" id="givenby" placeholder="Given by"
                                               value= @if(isset($medtime))"{{$medtime->givenby}}"@else "{{old('givenby')}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lock" class="col-sm-4 col-form-label">Is the Medication Locked</label>
                                    <div class="col-sm-6">
                                        <select type="text"  name="lock" class="form-control" id="lock" required>
                                            <option value="">Select if the Medication is Locked</option>
                                            <option value="1"  @if(isset($medtime)){{old('lock',$medtime->given)=="1"? 'selected':''}}@endif>Yes</option>
                                            <option value="0"  @if(isset($medtime)){{old('lock',$medtime->given)=="0"? 'selected':''}}@endif>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button  type="reset" class="btn btn-default float-right">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    @if(isset($assignedMedTimes))

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
                                            @foreach($yesterdayMedTimes as $yesterdayMedTime )
                                                @if($yesterdayMedTime->given)
                                                    <i class="fas fa-check green"></i><strike>
                                                        @endif
                                                        {{$yesterdayMedTime->time}}
                                                        @if($yesterdayMedTime->given) </strike>
                                                    <em>{{$yesterdayMedTime->givenby}}</em>@endif
                                                    <form method="post" action="/mar/{{$yesterdayMedTime->id}}">
                                                        @csrf
                                                        @method('Delete')
                                                        <button class="btn-danger">Remove</button>
                                                </form>
                                                <hr>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($todayMedTimes as $todayMedTime )
                                                @if($todayMedTime->given)
                                                    <i class="fas fa-check green"></i><strike>
                                                        @endif
                                                        {{$todayMedTime->time}}
                                                        @if($todayMedTime->given) </strike>
                                                    <em>{{$todayMedTime->givenby}}</em>@endif
                                                    <form method="post" action="/mar/{{$todayMedTime->id}}">
                                                        @csrf
                                                        @method('Delete')
                                                    <button class="btn-danger">Remove</button>
                                                </form>
                                                <hr>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($tomorrowMedTimes as $tomorrowMedTime )
                                                @if($tomorrowMedTime->given)
                                                    <i class="fas fa-check green"></i><strike>
                                                        @endif
                                                        {{$tomorrowMedTime->time}}
                                                        @if($tomorrowMedTime->given) </strike>
                                                    <em>{{$tomorrowMedTime->givenby}}</em>@endif
                                                <form method="post" action="/mar/{{$tomorrowMedTime->id}}">
                                                    @csrf
                                                    @method('Delete')
                                                    <button class="btn-danger">Remove</button>
                                                </form>
                                                <hr>
                                            @endforeach
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
                @endif
            </div>
        </div>
        </div>
    </section>
@endsection
