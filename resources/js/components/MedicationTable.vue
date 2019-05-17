<template>
    <div class="row mt-5" v-if="$gate.isAdminOrAuthor()">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Medications Table</h3>
                        <div class="input-group input-group-sm col-3">
                            <input class="form-control form-control-navbar" v-model="search" @keyup="searchStart" type="search" placeholder="Search" aria-label="Search" >
                            <div class="input-group-append">
                                <button class="btn btn-navbar" @click="searchStart">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-tools">
                            <button class="btn btn-success" @click="newModal">Add New <i class="fas fa-user-plus fa-fw"></i> </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Note</th>
                                    <th>Barcode</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Modify</th>
                                </tr>
                                <tr v-for="medication in medications.data" :key="medication.id">
                                    <td>{{medication.id}}</td>
                                    <td>{{medication.name | upText}}</td>
                                    <td>{{medication.type}}</td>
                                    <td>{{medication.description}}</td>
                                    <td>{{medication.barcode}}</td>
                                    <td>{{medication.created_at | filterDate}}</td>
                                    <td>{{medication.update_at | filterDate}}</td>

                                    <td>
                                        <a href="#" @click="editModal(medication)">
                                            <i class="fa fa-edit blue"></i>
                                        </a>
                                        /
                                        <a href="#" @click="deleteMedication(medication.id)">
                                            <i class="fa fa-trash red"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <pagination :data="medications" @pagination-change-page="getResults"></pagination>
                        </div>
                    </div>
                </div>
            </div>

            <div v-if="!$gate.isAdminOrAuthor()">
                <not-found></not-found>
                Please make sure you have access of the requested resource.
                </br>
                If you think this a by mistake please contact EdSime.
            </div>

            <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" v-show="!editmode" id="addNew">Add New medication</h5>
                            <h5 class="modal-title" v-show="editmode" id="addNew">Update medication</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form @submit.prevent="editmode ? updateMedication() : createMedication()">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input v-model="form.name" type="text" name="name" placeholder="Name"
                                           class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                    <has-error :form="form" field="name"></has-error>
                                </div>
                                <div class="form-group">
                                    <select v-model="form.type" type="text" name="type"
                                           class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
                                        <option value="">Select Medication Type</option>
                                        <option value="Scheduled Medication">Scheduled Medication</option>
                                        <option value="PRN Medication">PRN Medication</option>
                                    </select>
                                    <has-error :form="form" field="type"></has-error>

                                </div>
                                <div class="form-group">
                            <textarea v-model="form.description" name="description" placeholder="Description (This will be visible to students)"
                                      class="form-control" :class="{ 'is-invalid': form.errors.has('description') }">
                            <has-error :form="form" field="description"></has-error>
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

                search: "",


                medications : {},

                form : new Form ({
                    id: '',
                    name : '',
                    type : '',
                    description : '',
                    barcode : '',
                })
            }
        },
        methods: {
            searchStart: _.debounce(()=>{
                Fire.$emit('searching');
            },700),

            editModal(medication){
                this.editmode = true;
                this.form.clear();
                this.form.reset();
                $('#addNew').modal('show');
                this.form.fill(medication);
            },

            newModal(){
                this.editmode = false;
                this.form.reset();
                $('#addNew').modal('show');
            },

            loadMedication(){
                if (this.$gate.isAdminOrAuthor())
                {
                    axios.get("api/medication").then(({data}) => (this.medications = data));
                }
            },



            createMedication(){
                //Progress bar
                this.$Progress.start();

                //Post medications API
                this.form.post('api/medication')
                    .then(()=>{
                                                    //Fire Event
                            Fire.$emit('loadMedication');


                            //hide Modal
                            $('#addNew').modal('hide');

                            // Sweet Alert
                            toast.fire({
                                type: 'success',
                                title: 'medication Created Successfully'
                            });

                        }
                    )
                    .catch(()=>{


                        toast.fire({
                            type: 'error',
                            title: 'Oops...',
                            html: 'Something went wrong! </br> Unable to create New medications. '
                        })
                        this.$Progress.fail();

                    });
                this.$Progress.finish();
            },

            updateMedication(){
                this.$Progress.start();
                this.form.put('api/medication/' +this.form.id)
                    .then(()=>{
                        //Sweet Alert
                        toast.fire({
                            type: 'success',
                            title: 'Medications Updated Successfully'
                        });

                        //Fire Event
                        Fire.$emit('loadMedication');

                        //hide Modal
                        $('#addNew').modal('hide');

                        this.$Progress.finish();

                    })
                    .catch(()=>{
                        this.$Progress.fail();
                        toast.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Unable to Update medications!'
                        })
                    });
            },

            deleteMedication(id){
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
                        this.form.delete('api/medication/'+id).then(()=>{
                            {
                                //Fire Event
                                Fire.$emit('loadMedication');

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
                                text: 'Something went wrong! Unable to Delete medication'
                            })
                            this.$Progress.fail();
                        })
                    }
                })
            },


            getResults(page = 1) {
                axios.get('api/medication?page=' + page)
                    .then(response => {
                        this.medications = response.data;
                    });
            },

        },

        created() {
            this.loadMedication();
            Fire.$on('loadMedication', () => {
                this.loadMedication();
            });
            Fire.$on('searching',()=>{
                let query = this.search;
                axios.get('api/findMedication?q='+ query)
                    .then((data)=>{
                        this.medications = data.data
                    })
                    .catch(()=>{

                    });
            })

        }
    }
</script>
