<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <router-link tag="li" to="/hello" >Hello</router-link>
                        <router-link tag="li" to="/main">Main</router-link>
                    <router-link tag="li" to="/header">header</router-link>
                    <router-view></router-view>


                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
    mounted() {
    console.log('Component mounted.');
    //this.$store.dispatch('getAccessToken');
}
    }
</script>
