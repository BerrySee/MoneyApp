<template>
<div>
<Header> </Header>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Home Component</div>
                    <div class="card-body">
                        <h2>Welcome to Homepage</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import Header from './Header.vue';
export default {
    components: {
        Header
    }
};
</script>
<style>

</style>
