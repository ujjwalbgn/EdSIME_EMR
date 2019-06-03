<div class="col-md-12 mt-3">
    <div class="card">
        <div class="card-header " data-widget="collapse">
            <h3 class="card-title">Nurse</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Initial</th>
                    <th>Print Name</th>
                    <th>Signature</th>
                    @can('isAdminAuthor')
                        <th>Action</th>
                    @endcan
                </tr>
                </thead>
                <tbody>
                @foreach($nurses as $nurse)
                <tr>
                    <td>
                        <em>{{$nurse->nurseInitial}}</em>
                    </td>
                    <td>
                        {{$nurse->nurseName}}
                    </td>
                    <td>
                        <div class="signature">
                            {{$nurse->nurseSign}}
                        </div>
                    </td>
                    @can('isAdminAuthor')
                        <td>
                            <form method="post" action="/nurse/{{$nurse->id}}">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                @endcan
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@can('isAdminAuthor')
    <div class="col-md-12 mt-2">
        <a class="btn btn-primary" data-toggle="collapse" href="#addNurse"
           role="button" aria-expanded="false" aria-controls="addNurse">Add Nurse</a>

        <div class="collapse" id="addNurse">
            <div class="card card-body">
                <form method="post" action="/nurse">
                    @method('POST')
                    @csrf
                    <input hidden name="patient_id" value="{{$patient->id}}">
                    <div class="form-group row">
                        <label for="nurseName" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-5">
                            <input type="text"  name="nurseName" class="form-control" id="nurseName" placeholder="Nurse Name" required
                                   {{--value= @if(isset($nurse))"{{$nurse->nurseName}}"@else "{{old('nurseName')}}"@endif--}}
                            >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nurseInitial" class="col-sm-3 col-form-label">Initial</label>
                        <div class="col-sm-5">
                            <input type="text"  name="nurseInitial" class="form-control" id="nurseInitial" placeholder="Nurse Initial" required
                                   {{--value= @if(isset($nurse))"{{$nurse->nurseInitial}}"@else "{{old('nurseInitial')}}"@endif--}}
                            >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dateTime" class="col-sm-3 col-form-label">Verified Date Time</label>
                        <div class="col-sm-5">
                            <input type="text"  name="dateTime" class="form-control" id="nurseName" placeholder="Verified Date Time" required
                                   {{--value= @if(isset($nurse))"{{$nurse->dateTime}}"@else "{{old('dateTime')}}"@endif--}}
                            >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nurseSign" class="col-sm-3 col-form-label">Signature</label>
                        <div class="col-sm-5">
                            <input type="text"  name="nurseSign" class="form-control signature" id="initial" placeholder="Nurse Sign" required
                                   {{--value= @if(isset($nurse))"{{$nurse->nurseSign}}"@else "{{old('nurseSign')}}"@endif--}}
                            >
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-dark float-right" type="reset">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endcan
