<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Patients Table</h3>
                        <div class="card-tools">
                            <button class="btn btn-success" @click="newModal">Add New <i class="fas fa-user-plus fa-fw"></i> </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Level</th>
                                    <th>Note</th>
                                    <th>Barcode</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Modify</th>
                                </tr>
                                <tr v-for="patient in patients.data" :key="patient.id">
                                    <td>{{patient.id}}</td>
                                    <td>{{patient.name | upText}}</td>
                                    <td>{{patient.level}}</td>
                                    <td>{{patient.instructorNote}}</td>
                                    <td>{{patient.barcode}}</td>
                                    <td>{{patient.created_at | filterDate}}</td>
                                    <td>{{patient.update_at | filterDate}}</td>

                                    <td>
                                        <a href="#" @click="editModal(patient)">
                                            <i class="fa fa-edit blue"></i>
                                        </a>
                                        /
                                        <a href="#" @click="deletePatient(patient.id)">
                                            <i class="fa fa-trash red"></i>
                                        </a>
                                        /
                                        <a v-bind:href="'/patient/'+ patient.id" >
                                            <i class="fas fa-address-card indigo"> EHR</i>
                                        </a>
                                        /
                                        <a v-bind:href="'/mar/patient/'+ patient.id" >
                                            <i class="fas fa-calendar-check orange"> MAR</i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <pagination :data="patients" @pagination-change-page="getResults"></pagination>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" v-show="!editmode" id="addNew">Add New Patient</h5>
                            <h5 class="modal-title" v-show="editmode" id="addNew">Update Patient</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form @submit.prevent="editmode ? updatePatient() : createPatient()">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input v-model="form.name" type="text" name="name" placeholder="Name"
                                           class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                    <has-error :form="form" field="name"></has-error>
                                </div>
                                <div class="form-group">
                                    <input v-model="form.level" type="text" name="level" placeholder="Level"
                                           class="form-control" :class="{ 'is-invalid': form.errors.has('level') }">
                                    <has-error :form="form" field="level"></has-error>
                                </div>
                                <div class="form-group">
                            <textarea v-model="form.instructorNote" name="instructorNote" placeholder="Instructors Note (Not Visible to Students)"
                                      class="form-control" :class="{ 'is-invalid': form.errors.has('instructorNote') }">
                            <has-error :form="form" field="instructorNote"></has-error>
                            </textarea>
                                </div>
                                <div class="form-group">
                                    <input v-model="form.barcode" type="text" name="barcode" placeholder="barcode"
                                           class="form-control" :class="{ 'is-invalid': form.errors.has('barcode') }">
                                    <has-error :form="form" field="barcode"></has-error>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button v-show="editmode" type="submit" class="btn btn-success">Update</button>
                                <button v-show="!editmode" type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {


        data() {
            return {
                editmode: false,

                patients : {},

                form : new Form ({
                    id: '',
                    name : '',
                    level : '',
                    instructorNote : '',
                    barcode : '',
                })
            }
        },
        methods: {
            editModal(patient){
                this.editmode = true;
                this.form.clear();
                this.form.reset();
                $('#addNew').modal('show');
                this.form.fill(patient);
            },

            newModal(){
                this.editmode = false;
                this.form.reset();
                $('#addNew').modal('show');
            },

            loadPatients(){
                {
                    axios.get("api/patient").then(({data}) => (this.patients = data));
                }
            },



            createPatient(){
                //Progress bar
                this.$Progress.start();

                //Post Patients API
                this.form.post('api/patient')
                    .then(()=>{
                                                    //Fire Event
                            Fire.$emit('LoadPatients');


                            //hide Modal
                            $('#addNew').modal('hide');

                            // Sweet Alert
                            toast.fire({
                                type: 'success',
                                title: 'Patient Created Successfully'
                            });

                        }
                    )
                    .catch(()=>{


                        toast.fire({
                            type: 'error',
                            title: 'Oops...',
                            html: 'Something went wrong! </br> Unable to create New Patients. '
                        })
                        this.$Progress.fail();

                    });
                this.$Progress.finish();
            },

            updatePatient(){
                this.$Progress.start();
                this.form.put('api/patient/' +this.form.id)
                    .then(()=>{
                        //Sweet Alert
                        toast.fire({
                            type: 'success',
                            title: 'Patients Updated Successfully'
                        });

                        //Fire Event
                        Fire.$emit('LoadPatients');

                        //hide Modal
                        $('#addNew').modal('hide');

                        this.$Progress.finish();

                    })
                    .catch(()=>{
                        this.$Progress.fail();
                        toast.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Unable to Update Patients!'
                        })
                    });
            },

            deletePatient(id){
                this.$Progress.start();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                    //send  request to the server
                    if(result.value){
                        this.form.delete('api/patient/'+id).then(()=>{
                            {
                                //Fire Event
                                Fire.$emit('LoadPatients');

                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                            }
                            this.$Progress.finish();
                        }) .catch(()=>{
                            toast.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong! Unable to Delete Patient'
                            })
                            this.$Progress.fail();
                        })
                    }
                })
            },


            getResults(page = 1) {
                axios.get('api/patient?page=' + page)
                    .then(response => {
                        this.patients = response.data;
                    });
            },

        },

        created() {
            this.loadPatients();
            Fire.$on('LoadPatients', () => {
                this.loadPatients();
            })
        }
    }
</script>
