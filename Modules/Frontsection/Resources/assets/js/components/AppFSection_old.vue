<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component sec</div>
                    <router-link tag="li" to="/middle/3">Middle</router-link>
                    <router-link tag="li" to="/header">Header</router-link>
                    <router-link tag="li" to="/middle/3/profile">Footer</router-link>

                    <router-view></router-view>

                    <Header></Header>
                    <div class="card-body">
                        I'm an example module frontendsection component .
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
    mounted() {
    console.log('Component mounted.')
}
    }
</script>

