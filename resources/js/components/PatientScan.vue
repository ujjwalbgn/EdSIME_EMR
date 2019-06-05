<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa fa-search"></i>&nbsp </span>
                    </div>
                    <input v-model="search" @keyup="searchStart" type="search" class="form-control border border-primary" id="search" name="Scan" placeholder="Scan barcode or enter patient's name here" aria-label="Small" aria-describedby="inputGroup-sizing-sm" autofocus="autofocus" height="20">
                </div>
            </div>
            <div class="card-body">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>Name</th>
                            <th>Level</th>
                            <th>Barcode</th>
                            <!--<th>Open Patient's Record</th>-->
                            <th>Open Patient's MAR</th>

                        </tr>
                        <tr v-for="patient in patients.data" :key="patient.id">
                            <td>{{patient.name | upText}}</td>
                            <td>{{patient.level}}</td>
                            <td>{{patient.barcode}}</td>
                            <!--<td>-->
                                <!--<a v-bind:href="'/patient/'+ patient.id" >-->
                                    <!--<i class="fas fa-clipboard-list indigo"> EHR</i>-->
                                <!--</a>-->
                            <!--</td>-->
                            <td>
                                <a v-bind:href="'/ehr/mar/'+ patient.id" >
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
</template>

<script>
    export default
    {


        data() {
            return {
                search: "",

                patients: {},

                form: new Form({
                    id: '',
                    name: '',
                    level: '',
                    instructorNote: '',
                    barcode: '',
                })
            }
        },
        methods: {
            searchStart: _.debounce(() => {
                Fire.$emit('searching');
            }, 300),

            loadPatients() {
                axios.get("api/patient").then(({data}) => (this.patients = data));
            },

            getResults(page = 1) {
                axios.get('api/patient?page=' + page)
                    .then(response => {
                        this.patients = response.data;
                    });
            },
        },

        created() {
            // this.loadPatients();
            // Fire.$on('LoadPatients', () => {
            //     this.loadPatients();
            // });
            Fire.$on('searching',()=>{
                let query = this.search;
                axios.get('api/findPatient?q='+ query)
                    .then((data)=>{
                        this.patients = data.data
                    })
                    .catch(()=>{

                    });
            })
        }

    }
</script>
