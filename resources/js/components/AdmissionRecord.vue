<template>
    <div>

        <form>
            <!--Patient Details-->
            <div class="form-group row">
                <label for="medical_record_no" class="col-sm-2 col-form-label">Patient's Medical Record No</label>
                <div class="col-sm-10">
                    <input type="text" v-model="form.medical_record_no" class="form-control" id="medical_record_no" placeholder="Patient's Medical Record No" :class="{ 'is-invalid': form.errors.has('medical_record_no') }">
                    <has-error :form="form" field="medical_record_no"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label for="healthcare_provider" class="col-sm-2 col-form-label">Healthcare Provider</label>
                <div class="col-sm-10">
                    <input type="text" v-model="form.healthcare_provider" class="form-control" id="healthcare_provider" placeholder="Healthcare Provider" :class="{ 'is-invalid': form.errors.has('healthcare_provider') }">
                    <has-error :form="form" field="healthcare_provider"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" v-model="form.address" class="form-control" id="address" placeholder="Street Address, City, State, Zip Code" :class="{ 'is-invalid': form.errors.has('address') }">
                    <has-error :form="form" field="address"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label for="occupation" class="col-sm-2 col-form-label">Occupation</label>
                <div class="col-sm-10">
                    <input type="text" v-model="form.occupation" class="form-control" id="occupation" placeholder="Occupation" :class="{ 'is-invalid': form.errors.has('occupation') }">
                    <has-error :form="form" field="occupation"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label for="religion" class="col-sm-2 col-form-label">Religion</label>
                <div class="col-sm-10">
                    <input type="text" v-model="form.name"  class="form-control" id="religion" placeholder="Religion" :class="{ 'is-invalid': form.errors.has('name') }">
                    <has-error :form="form" field="name"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label for="ethnicity" class="col-sm-2 col-form-label">Ethnicity</label>
                <div class="col-sm-10">
                    <input type="text" v-model="form.name" class="form-control" id="ethnicity" placeholder="Ethnicity" :class="{ 'is-invalid': form.errors.has('name') }">
                    <has-error :form="form" field="name"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label for="culture" class="col-sm-2 col-form-label">Culture</label>
                <div class="col-sm-10">
                    <input type="text" v-model="form.culture"  class="form-control" id="culture" placeholder="Culture" :class="{ 'is-invalid': form.errors.has('culture') }">
                    <has-error :form="form" field="culture"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label for="nationality" class="col-sm-2 col-form-label">Nationality</label>
                <div class="col-sm-10">
                    <input type="text" v-model="form.nationality" class="form-control" id="nationality" placeholder="Nationality" :class="{ 'is-invalid': form.errors.has('nationality') }">
                    <has-error :form="form" field="nationality"></has-error>
                </div>
            </div>
            <div class="form-group row">
                <label for="sex" class="col-sm-2 col-form-label">Sex</label>
                <div class="col-sm-10">
                    <input type="text" v-model="form.sex" class="form-control" id="sex" placeholder="Sex" :class="{ 'is-invalid': form.errors.has('sex') }">
                    <has-error :form="form" field="sex"></has-error>
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
                                <input type="text" v-model="form.relative_name" class="form-control" id="relative_name" placeholder="Relative's Name" :class="{ 'is-invalid': form.errors.has('relative_name') }">
                                <has-error :form="form" field="relative_name"></has-error>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="relative_home_phone" class="col-sm-2 col-form-label">Home Phone</label>
                            <div class="col-sm-4">
                                <input type="text" v-model="form.relative_home_phone" class="form-control" id="relative_home_phone" placeholder="Relative's Home Phone" :class="{ 'is-invalid': form.errors.has('relative_home_phone') }">
                                <has-error :form="form" field="relative_home_phone"></has-error>
                            </div>
                            <label for="relative_business_phone" class="col-form-label">Business Phone</label>
                            <div class="col-sm-4">
                                <input type="text" v-model="form.relative_business_phone"  class="form-control" id="relative_business_phone" placeholder="Relative's Business Phone" :class="{ 'is-invalid': form.errors.has('relative_business_phone') }">
                                <has-error :form="form" field="relative_business_phone"></has-error>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="relative_address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" v-model="form.relative_address"  class="form-control" id="relative_address" placeholder="Relative's Address" :class="{ 'is-invalid': form.errors.has('relative_address') }">
                                <has-error :form="form" field="relative_address"></has-error>
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
                                <input type="text" v-model="form.emergency_contact_name" class="form-control" id="emergency_contact_name" placeholder="Emergency Contact's Name" :class="{ 'is-invalid': form.errors.has('emergency_contact_name') }">
                                <has-error :form="form" field="emergency_contact_name"></has-error>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emergency_contact_home_phone" class="col-sm-2 col-form-label">Home Phone</label>
                            <div class="col-sm-4">
                                <input type="text" v-model="form.emergency_contact_home_phone"  class="form-control" id="emergency_contact_home_phone" placeholder="Emergency Contact's Home Phone" :class="{ 'is-invalid': form.errors.has('emergency_contact_home_phone') }">
                                <has-error :form="form" field="emergency_contact_home_phone"></has-error>
                            </div>
                            <label for="emergency_contact_business_phone" class="col-form-label">Business Phone</label>
                            <div class="col-sm-4">
                                <input type="text" v-model="form.emergency_contact_business_phone" class="form-control" id="emergency_contact_business_phone" placeholder="Emergency Contact's Business Phone" :class="{ 'is-invalid': form.errors.has('emergency_contact_business_phone') }">
                                <has-error :form="form" field="emergency_contact_business_phone"></has-error>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emergency_contact_home_address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" v-model="form.emergency_contact_home_address" class="form-control" id="emergency_contact_home_address" placeholder="Emergency Contact's Address" :class="{ 'is-invalid': form.errors.has('emergency_contact_home_address') }">
                                <has-error :form="form" field="emergency_contact_home_address"></has-error>
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
                                <input type="text" v-model="form.insurance_name" class="form-control" id="insurance_name" placeholder="Insurance Name" :class="{ 'is-invalid': form.errors.has('insurance_name') }">
                                <has-error :form="form" field="insurance_name"></has-error>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="insurance_group_number" class="col-sm-2 col-form-label">Insurance Group Number</label>
                            <div class="col-sm-4">
                                <input type="text" v-model="form.insurance_group_number"  class="form-control" id="insurance_group_number" placeholder="Insurance Group Number" :class="{ 'is-invalid': form.errors.has('insurance_group_number') }">
                                <has-error :form="form" field="insurance_group_number"></has-error>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="advance_directive" class="col-sm-2 col-form-label">Advance Directive</label>
                <div class="col-sm-10">
                    <textarea type="text" v-model="form.advance_directive" class="form-control" id="advance_directive" placeholder="" :class="{ 'is-invalid': form.errors.has('advance_directive') }">
                    <has-error :form="form" field="advance_directive"></has-error>
                    </textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Save Record</button>
                <button type="reset" class="btn btn-default float-right" >Reset</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        props: ['admissionRecord_id'],

        data() {
            return {
                editmode: false,

                aRecord : {},

                form : new Form ({
                    patient_id : '',
                    medical_record_no : '',
                    healthcare_provider : '',
                    address : '',
                    occupation: '',
                    religion : '',
                    ethnicity : '',
                    culture : '',
                    nationality : '',
                    sex: '',
                    relative_name : '',
                    relative_home_phone : '',
                    relative_business_phone : '',
                    relative_address : '',
                    emergency_contact_name : '',
                    emergency_contact_home_phone : '',
                    emergency_contact_home_address : '',
                    emergency_contact_business_phone : '',
                    insurance_name: '',
                    insurance_group_number : '',
                    advance_directive : '',
                })
            }
        },

        methods: {

            loadAdmissionReocrd(aRecord){
                {
                    this.form.clear();
                    this.form.reset();
                    axios.get("api/admissionRecord/14").then(({data}) => (this.aRecord = data));
                    // this.form.fill(aRecord);
                }
            },
        },

        mounted() {
            this.loadAdmissionReocrd();
        }
    }
</script>
