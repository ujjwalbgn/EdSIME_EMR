<div class="form-group row">
    <label for="medical_record_no" class="col-sm-2 col-form-label">Patient's Medical Record No</label>
    <div class="col-sm-10">
        <input type="text"  name="medical_record_no" class="form-control" id="medical_record_no" placeholder="Patient's Medical Record No"
               value= @if(isset($providerOrder))"{{$providerOrder->medical_record_no}}"@else "{{old('medical_record_no')}}"@endif>
    </div>
</div>
<div class="form-group row">
    <label for="diagnosis" class="col-sm-2 col-form-label">Patient's Diagnosis</label>
    <div class="col-sm-10">
        <input type="text"  name="diagnosis" class="form-control" id="medical_record_no" placeholder="Patient's Diagnosis"
               value= @if(isset($providerOrder))"{{$providerOrder->diagnosis}}"@else "{{old('diagnosis')}}"@endif>
    </div>
</div>
<div class="form-group row">
    <label for="provider" class="col-sm-2 col-form-label">Provider</label>
    <div class="col-sm-10">
        <input type="text" name="provider" class="form-control" id="healthcare_provider" placeholder="Provider"
               value= @if(isset($providerOrder))"{{$providerOrder->provider}}"@else "{{old('provider')}}"@endif>
    </div>
</div>
<div class="form-group row">
    <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
    <div class="col-sm-10">
        <input type="text"  name="dob" class="form-control" id="medical_record_no" placeholder="Date of Birth"
               value= @if(isset($providerOrder))"{{$providerOrder->dob}}"@else "{{old('dob')}}"@endif>
    </div>
</div>
<div class="form-group row">
    <label for="age" class="col-sm-2 col-form-label">Age</label>
    <div class="col-sm-10">
        <input type="text" name="age" class="form-control" id="age" placeholder="Age"
               value= @if(isset($providerOrder))"{{$providerOrder->age}}"@else "{{old('age')}}"@endif>
    </div>
</div>
<div class="form-group row">
    <label for="provider" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-10">
        <input type="text" name="provider" class="form-control" id="healthcare_provider" placeholder="Gender"
               value= @if(isset($providerOrder))"{{$providerOrder->gender}}"@else "{{old('provider')}}"@endif>
    </div>
</div>
<div class="form-group row">
    <label for="height" class="col-sm-2 col-form-label">Height</label>
    <div class="col-sm-10">
        <input type="text" name="height" class="form-control" id="height" placeholder="Height"
               value= @if(isset($providerOrder))"{{$providerOrder->height}}"@else "{{old('height')}}"@endif>
    </div>
</div>
<div class="form-group row">
    <label for="weight" class="col-sm-2 col-form-label">Weight</label>
    <div class="col-sm-10">
        <input type="text" name="weight" class="form-control" id="Weight" placeholder="Weight"
               value= @if(isset($providerOrder))"{{$providerOrder->weight}}"@else "{{old('weight')}}"@endif>
    </div>
</div>
<div class="form-group row">
    <label for="allergies" class="col-sm-2 col-form-label">Allergies</label>
    <div class="col-sm-10">
        <input type="text" name="allergies" class="form-control" id="allergies" placeholder="Allergies"
               value= @if(isset($providerOrder))"{{$providerOrder->allergies}}"@else "{{old('allergies')}}"@endif>
    </div>
</div>
<div class="form-group row">
    <label for="sensitivity" class="col-sm-2 col-form-label">Sensitivity</label>
    <div class="col-sm-10">
        <input type="text" name="sensitivity" class="form-control" id="healthcare_provider" placeholder="Sensitivity"
               value= @if(isset($providerOrder))"{{$providerOrder->sensitivity}}"@else "{{old('sensitivity')}}"@endif>
    </div>
</div>
