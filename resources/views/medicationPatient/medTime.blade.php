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
                                        <input type="text" name="givenby" class="form-control" id="givenby" placeholder="Given by" required
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
                </div>
            </div>
        </div>
    </section>
@endsection