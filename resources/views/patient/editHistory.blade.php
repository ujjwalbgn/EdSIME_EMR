@include('layouts.beforeTextEditor')

<form method="post" action="/patientHistory/{{$patientHistory->id}}">
    @method('PATCH')
    @csrf
<textarea name="content" class="form-control TinyMCE-editor">{!! old('content', $patientHistory->content) !!}</textarea>
    <div class="mt-2">
        <button type="submit" class="btn btn-info">Submit</button>
    </div>

</form>

@include('layouts.afterTextEditor')
