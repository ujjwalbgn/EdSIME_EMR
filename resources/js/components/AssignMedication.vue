<!--<template>-->
    <!--<div>-->
        <!--<div class="col-md-12" v-if="$gate.isAdminOrAuthor()">-->
            <!--<div class=" card">-->
                <!--<div class="card-header">-->
                    <!--<h3 class="card-title">Medications Table</h3>-->
                    <!--<div class="input-group input-group-sm col-3">-->
                        <!--<input class="form-control form-control-navbar" v-model="search" @keyup="searchStart" type="search" placeholder="Search" aria-label="Search" >-->
                        <!--<div class="input-group-append">-->
                            <!--<button class="btn btn-navbar" @click="searchStart">-->
                                <!--<i class="fa fa-search"></i>-->
                            <!--</button>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->

                <!--<div class="card-body">-->
                    <!--<div class="card-body table-responsive">-->
                        <!--<table class="table table-hover">-->
                            <!--<tbody><tr>-->
                                <!--<th>Name</th>-->
                                <!--<th>Type</th>-->
                                <!--<th>Barcode</th>-->
                                <!--<th>Assign</th>-->
                            <!--</tr>-->
                            <!--<tr v-for="medication in medications.data" :key="medication.id">-->
                                <!--<td>{{medication.name | upText}}</td>-->
                                <!--<td>{{medication.type}}</td>-->
                                <!--<td>{{medication.barcode}}</td>-->

                                <!--<td>-->

                                <!--</td>-->
                            <!--</tr>-->
                            <!--</tbody>-->
                        <!--</table>-->
                    <!--</div>-->
                    <!--<div class="card-footer">-->
                        <!--<pagination :data="medications" @pagination-change-page="getResults"></pagination>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->



            <!--<div v-if="!$gate.isAdminOrAuthor()">-->
                <!--<not-found></not-found>-->
                <!--Please make sure you have access of the requested resource.-->
                <!--<br/>-->
                <!--If you think this a by mistake please contact EdSime.-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</template>-->

<!--<script>-->
    <!--export default {-->


        <!--data() {-->
            <!--return {-->
                <!--search: "",-->


                <!--medications : {},-->

                <!--form : new Form ({-->
                    <!--id: '',-->
                    <!--name : '',-->
                    <!--type : '',-->
                    <!--barcode : '',-->
                <!--})-->
            <!--}-->
        <!--},-->
        <!--methods: {-->
            <!--searchStart: _.debounce(()=>{-->
                <!--Fire.$emit('searching');-->
            <!--},700),-->


            <!--loadMedication(){-->
                <!--if (this.$gate.isAdminOrAuthor())-->
                <!--{-->
                    <!--axios.get("/api/medication").then(({data}) => (this.medications = data));-->
                <!--}-->
            <!--},-->

            <!--getResults(page = 1) {-->
                <!--axios.get('/api/medication?page=' + page)-->
                    <!--.then(response => {-->
                        <!--this.medications = response.data;-->
                    <!--});-->
            <!--}-->

        <!--},-->

        <!--created() {-->
            <!--this.loadMedication();-->
            <!--Fire.$on('loadMedication', () => {-->
                <!--this.loadMedication();-->
            <!--});-->
            <!--Fire.$on('searching',()=>{-->
                <!--let query = this.search;-->
                <!--axios.get('/api/findMedication?q='+ query)-->
                    <!--.then((data)=>{-->
                        <!--this.medications = data.data-->
                    <!--})-->
                    <!--.catch(()=>{-->
                    <!--});-->
            <!--})-->
        <!--}-->
    <!--}-->
<!--</script>-->
