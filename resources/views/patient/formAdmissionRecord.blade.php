    <!--Patient Details-->

    <div class="form-group row">
        <label for="medical_record_no" class="col-sm-2 col-form-label">Patient's Medical Record No</label>
        <div class="col-sm-10">
            <input type="text"  name="medical_record_no" class="form-control" id="medical_record_no" placeholder="Patient's Medical Record No" required
                   value= @if(isset($admissionRecord))"{{$admissionRecord->medical_record_no}}"@else "{{old('medical_record_no')}}"@endif>
        </div>
    </div>
    <div class="form-group row">
        <label for="healthcare_provider" class="col-sm-2 col-form-label">Healthcare Provider</label>
        <div class="col-sm-10">
            <input type="text" name="healthcare_provider" class="form-control" id="healthcare_provider" placeholder="Healthcare Provider" required
                   value= @if(isset($admissionRecord))"{{$admissionRecord->healthcare_provider}}"@else "{{old('healthcare_provider')}}"@endif>
        </div>
    </div>
    <div class="form-group row">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <input type="text" name="address" class="form-control" id="address" placeholder="Street Address, City, State, Zip Code"
                   value= @if(isset($admissionRecord))"{{$admissionRecord->address}}"@else "{{old('address')}}"@endif>
        </div>
    </div>
    <div class="form-group row">
        <label for="occupation" class="col-sm-2 col-form-label">Occupation</label>
        <div class="col-sm-10">
            <input type="text" name="occupation" class="form-control" id="occupation" placeholder="Occupation"
                   value= @if(isset($admissionRecord))"{{$admissionRecord->occupation}}"@else "{{old('occupation')}}"@endif>
        </div>
    </div>
    <div class="form-group row">
        <label for="religion" class="col-sm-2 col-form-label">Religion</label>
        <div class="col-sm-10">
            <input type="text" name="religion" class="form-control" id="religion" placeholder="Religion"
                   value= @if(isset($admissionRecord))"{{$admissionRecord->religion}}"@else "{{old('religion')}}"@endif>
        </div>
    </div>
    <div class="form-group row">
        <label for="ethnicity" class="col-sm-2 col-form-label">Ethnicity</label>
        <div class="col-sm-10">
            <input type="text" name="ethnicity" class="form-control" id="ethnicity" placeholder="Ethnicity"
                   value= @if(isset($admissionRecord))"{{$admissionRecord->ethnicity}}"@else "{{old('ethnicity')}}"@endif>
        </div>
    </div>
    <div class="form-group row">
        <label for="culture" class="col-sm-2 col-form-label">Culture</label>
        <div class="col-sm-10">
            <input type="text"  name="culture" class="form-control" id="culture" placeholder="Culture"
                   value= @if(isset($admissionRecord))"{{$admissionRecord->culture}}"@else "{{old('culture')}}"@endif>
        </div>
    </div>
    <div class="form-group row">
        <label for="nationality" class="col-sm-2 col-form-label">Nationality</label>
        <div class="col-sm-10">
            <input type="text" name="nationality" class="form-control" id="nationality" placeholder="Nationality"
                   value= @if(isset($admissionRecord))"{{$admissionRecord->nationality}}"@else "{{old('nationality')}}"@endif>
        </div>
    </div>
    <div class="form-group row">
        <label for="sex" class="col-sm-2 col-form-label">Sex</label>
        <div class="col-sm-10">
            <input type="text" name="sex" class="form-control" id="sex" placeholder="Sex"
                   value= @if(isset($admissionRecord))"{{$admissionRecord->sex}}"@else "{{old('sex')}}"@endif>
        </div>
    </div>

    <hr/>
    <!--Relative Data:-->
    <div class="col-md-12">
        <div class="card card-info collapsed-card card-outline">
            <div class="card-header " data-widget="collapse">
                <h6 class="card-title">Relative Contact Information:</h6>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <div class="form-group row">
                    <label for="relative_name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="relative_name" class="form-control" id="relative_name" placeholder="Relative's Name"
                               value= @if(isset($admissionRecord))"{{$admissionRecord->relative_name}}"@else "{{old('relative_name')}}"@endif>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="relative_home_phone" class="col-sm-2 col-form-label">Home Phone</label>
                    <div class="col-sm-4">
                        <input type="text" name="relative_home_phone" class="form-control" id="relative_home_phone" placeholder="Relative's Home Phone"
                               value= @if(isset($admissionRecord))"{{$admissionRecord->relative_home_phone}}"@else "{{old('relative_home_phone')}}"@endif>

                    </div>
                    <label for="relative_business_phone" class="col-form-label">Business Phone</label>
                    <div class="col-sm-4">
                        <input type="text" name="relative_business_phone" class="form-control" id="relative_business_phone" placeholder="Relative's Business Phone"
                               value= @if(isset($admissionRecord))"{{$admissionRecord->relative_business_phone}}"@else "{{old('relative_business_phone')}}"@endif>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="relative_address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="relative_address" class="form-control" id="relative_address" placeholder="Relative's Address"
                               value= @if(isset($admissionRecord))"{{$admissionRecord->relative_address}}"@else "{{old('relative_address')}}"@endif>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-12">
        <div class="card card-info collapsed-card card-outline">
            <div class="card-header " data-widget="collapse">
                <h3 class="card-title">Emergency Contact Information:</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="emergency_contact_name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="emergency_contact_name" class="form-control" id="emergency_contact_name" placeholder="Emergency Contact's Name"
                               value= @if(isset($admissionRecord))"{{$admissionRecord->emergency_contact_name}}"@else "{{old('emergency_contact_name')}}"@endif>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="emergency_contact_home_phone" class="col-sm-2 col-form-label">Home Phone</label>
                    <div class="col-sm-4">
                        <input type="text" name="emergency_contact_home_phone" class="form-control" id="emergency_contact_home_phone" placeholder="Emergency Contact's Home Phone"
                               value= @if(isset($admissionRecord))"{{$admissionRecord->emergency_contact_home_phone}}"@else "{{old('emergency_contact_home_phone')}}"@endif>
                    </div>
                    <label for="emergency_contact_business_phone" class="col-form-label">Business Phone</label>
                    <div class="col-sm-4">
                        <input type="text" name="emergency_contact_business_phone" class="form-control" id="emergency_contact_business_phone" placeholder="Emergency Contact's Business Phone"
                               value= @if(isset($admissionRecord))"{{$admissionRecord->emergency_contact_business_phone}}"@else "{{old('emergency_contact_business_phone')}}"@endif>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="emergency_contact_home_address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="emergency_contact_home_address" class="form-control" id="emergency_contact_home_address" placeholder="Emergency Contact's Address"
                               value= @if(isset($admissionRecord))"{{$admissionRecord->emergency_contact_home_address}}"@else "{{old('emergency_contact_home_address')}}"@endif>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card card-info collapsed-card card-outline">
            <div class="card-header " data-widget="collapse">
                <h3 class="card-title">Insurance Information:</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="insurance_name" class="col-sm-2 col-form-label">Insurance Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="insurance_name" class="form-control" id="insurance_name" placeholder="Insurance Name"
                               value= @if(isset($admissionRecord))"{{$admissionRecord->insurance_name}}"@else "{{old('insurance_name')}}"@endif>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="insurance_group_number" class="col-sm-2 col-form-label">Insurance Group Number</label>
                    <div class="col-sm-4">
                        <input type="text" name="insurance_group_number" class="form-control" id="insurance_group_number" placeholder="Insurance Group Number"
                               value= @if(isset($admissionRecord))"{{$admissionRecord->insurance_group_number}}"@else "{{old('insurance_group_number')}}"@endif>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="form-group row">
        <label for="advance_directive" class="col-sm-2 col-form-label">Advance Directive</label>
        <div class="col-sm-10">
                    <textarea type="text" name="advance_directive" class="form-control" id="advance_directive" placeholder="">
                        @if(isset($admissionRecord)){{$admissionRecord->advance_directive}}@else{{old('advance_directive')}}@endif
                    </textarea>
        </div>
    </div>

