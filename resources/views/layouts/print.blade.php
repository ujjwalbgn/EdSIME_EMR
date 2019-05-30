@can('isAdminAuthor')
    <div class="row no-print">
        <div class="col-12">

            <a href="" @click.prevent="printme" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>

        </div>
    </div>
    <hr/>
    {{--Reset--}}
    <form method="post" action="/patient/mar/{{$patient->id}}">
        @method('patch')
        @csrf
        <button>Delete Student Input</button>
    </form>

@endcan
