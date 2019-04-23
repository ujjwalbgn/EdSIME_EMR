<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                                    <th>Barcode</th>
                                    <th>Created At</th>
                                    <th>Modify</th>
                                </tr>
                                <tr>

                                </tr>
                                </tbody>
                            </table>
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

        editmode: false,

        data() {
            return {
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
            newModal(){
                this.editmode = false;
                this.form.reset();
                $('#addNew').modal('show');
            },

            // loadUsers(){
            //     if (this.$gate.isAdminOrAuthor())
            //     {
            //         axios.get("api/patient").then(({data}) => (this.users = data));
            //     }
            // },

            editModal(user){
                this.editmode = true;
                this.form.clear();
                this.form.reset();
                $('#addNew').modal('show');
                this.form.fill(user);
            },

            createPatient(){
                //Progress bar
                this.$Progress.start();

                //Post User API
                this.form.post('api/patient')
                    .then(()=>{
                            //Fire Event
                            // Fire.$emit('LoadUser');

                            //hide Modal
                            $('#addNew').modal('hide');

                            //Sweet Alert
                            toast.fire({
                                type: 'success',
                                title: 'User Created Successfully'
                            });
                        }
                    )
                    .catch(()=>{


                        toast.fire({
                            type: 'error',
                            title: 'Oops...',
                            html: 'Something went wrong! </br> Unable to create New User. '
                        })
                        this.$Progress.fail();

                    });
                this.$Progress.finish();
            },

        },
    }
</script>
