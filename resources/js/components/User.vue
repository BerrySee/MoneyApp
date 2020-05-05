<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <router-link to="/">Go to Home</router-link>
                <div class="card">
                    <div class="card-header">User Component</div>
  {{ incomes }}
                    <div class="card-body">
                        <div v-if="loading">
                        <strong>Loading</strong>
                        </div>
                        
                        
                        
                        <div v-else >
                            <div v-for="income in incomes">
                                {{ income.type }}
                            </div>
                        </div>
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
                'incomes': [],
                'loading':false
            }
        },
        mounted() {
            this.getIncomes();
        },
        methods: {
            getIncomes() {
                this.loading = true;

                axios.get('/income')
                .then(response =>{
                    this.loading = false;
                    this.incomes = response.data.data;
                    console.log(incomes);
                })
                .catch(error=> {
                    this.loading = false;
                    console.log(error);
                })
            }
        }
    }
</script>