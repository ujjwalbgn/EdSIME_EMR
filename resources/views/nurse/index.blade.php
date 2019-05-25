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
                <tr>
                    <td>
                        <em>KM</em>
                    </td>
                    <td>
                        Karen Martin
                    </td>
                    <td>
                        <div class="signature">
                            Karen Martin
                        </div>
                    </td>
                    @can('isAdminAuthor')
                        <td>
                            <form>
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                @endcan
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
                <form>

                </form>
            </div>
        </div>
    </div>
@endcan
