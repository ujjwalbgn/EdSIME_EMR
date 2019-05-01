<ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link {{ Request::segment(1) == 'admissionRecord' ? 'active' : '' }}" href="/admissionRecord/{{$admissionRecord->id}}/edit">Admission Record</a></li>
    <li class="nav-item"><a class="nav-link" href="" data-toggle="tab">Patient's History</a></li>
    <li class="nav-item"><a class="nav-link" href="" data-toggle="tab">Patient's Lab Records</a></li>
    <li class="nav-item"><a class="nav-link" href="" data-toggle="tab">Settings</a></li>
</ul>
