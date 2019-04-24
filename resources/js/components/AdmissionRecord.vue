<template>
    <div>
        <form>
            <!--Patient Details-->
            <div class="form-group row">
                <label for="medical_record_no" class="col-sm-2 col-form-label">Patient's Medical Record No</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="medical_record_no" placeholder="Patient's Medical Record No" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="healthcare_provider" class="col-sm-2 col-form-label">Healthcare Provider</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="healthcare_provider" placeholder="Healthcare Provider">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" placeholder="Street Address, City, State, Zip Code">
                </div>
            </div>
            <div class="form-group row">
                <label for="occupation" class="col-sm-2 col-form-label">Occupation</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="occupation" placeholder="Occupation">
                </div>
            </div>
            <div class="form-group row">
                <label for="religion" class="col-sm-2 col-form-label">Religion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="religion" placeholder="Religion">
                </div>
            </div>
            <div class="form-group row">
                <label for="ethnicity" class="col-sm-2 col-form-label">Ethnicity</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ethnicity" placeholder="Ethnicity">
                </div>
            </div>
            <div class="form-group row">
                <label for="culture" class="col-sm-2 col-form-label">Culture</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="culture" placeholder="Culture">
                </div>
            </div>
            <div class="form-group row">
                <label for="nationality" class="col-sm-2 col-form-label">Nationality</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nationality" placeholder="Nationality">
                </div>
            </div>
            <div class="form-group row">
                <label for="sex" class="col-sm-2 col-form-label">Sex</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="sex" placeholder="Sex">
                </div>
            </div>

            <hr/>
            <!--Relative Data:-->
            <div class="col-md-12">
                <div class="card card-info collapsed-card card-outline">
                    <div class="card-header " data-widget="collapse">
                        <h3 class="card-title">Relative Contact Information:</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="relative_name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="relative_name" placeholder="Relative's Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="relative_home_phone" class="col-sm-2 col-form-label">Home Phone</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="relative_home_phone" placeholder="Relative's Home Phone">
                            </div>
                            <label for="relative_business_phone" class="col-form-label">Business Phone</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="relative_business_phone" placeholder="Relative's Business Phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="relative_address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="relative_address" placeholder="Relative's Address">
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
                                <input type="text" class="form-control" id="emergency_contact_name" placeholder="Emergency Contact's Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emergency_contact_home_phone" class="col-sm-2 col-form-label">Home Phone</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="emergency_contact_home_phone" placeholder="Emergency Contact's Home Phone">
                            </div>
                            <label for="emergency_contact_business_phone" class="col-form-label">Business Phone</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="emergency_contact_business_phone" placeholder="Emergency Contact's Business Phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emergency_contact_home_address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="emergency_contact_home_address" placeholder="Emergency Contact's Address">
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
                                <input type="text" class="form-control" id="insurance_name" placeholder="Insurance Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="insurance_group_number" class="col-sm-2 col-form-label">Insurance Group Number</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="insurance_group_number" placeholder="Insurance Group Number">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="advance_directive" class="col-sm-2 col-form-label">Advance Directive</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="advance_directive" placeholder="">
                    </textarea>
                </div>
            </div>




        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>


