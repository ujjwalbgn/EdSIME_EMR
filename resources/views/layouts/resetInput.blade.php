@can('isAdminAuthor')
    <form method="post" action="/patient/mar/{{$patient->id}}">
    @method('patch')
    @csrf
    <button>Delete Student Input</button>
</form>
    @endcan
