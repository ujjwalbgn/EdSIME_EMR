<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">Pateints Name: <strong>{{$patient->name}}</strong></h6>
        </div>
        <div class="card-body">
            <ul>
                <div class="row">
                    <div class="col-2">
                        <strong>Name: </strong>
                    </div>
                    <div class="col-4">
                        {{$patient->name}}
                    </div>
                    <div class="col-2">
                        <strong>Diagnosis: </strong>
                    </div>
                    <div class="col-4">
                        {{$providerOrder->diagnosis}}
                    </div>
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col-2">
                        <strong>MR#: </strong>
                    </div>
                    <div class="col-4">
                        {{$providerOrder->medical_record_no}}
                    </div>
                    <div class="col-2">
                        <strong>Provider: </strong>
                    </div>
                    <div class="col-4">
                        {{$providerOrder->provider}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-2">
                        <strong>DOB: </strong> {{$providerOrder->dob}}
                    </div>
                    <div class="col-2">
                        <strong>Age: </strong>{{$providerOrder->age}}
                    </div>
                    <div class="col-2">
                        <strong>Gender: </strong>{{$providerOrder->gender}}
                    </div>

                    <div class="col-3">
                        <strong>Height: </strong> {{$providerOrder->height}}
                    </div>
                    <div class="col-3">
                        <strong>Weight: </strong>{{$providerOrder->weight}}
                    </div>
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col-2">
                        <strong>Known Allergies</strong>
                    </div>
                    <div class="col-4 allergies">
                        {{$providerOrder->allergies}}
                    </div>
                    <div class="col-2">
                        <strong>Sensitivity: </strong>
                    </div>
                    <div class="col-4">
                        {{$providerOrder->sensitivity}}
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>


