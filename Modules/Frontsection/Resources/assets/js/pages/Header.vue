<template>
    <div>
    <p>Header Part</p>
    <router-link to="/middle/12">User</router-link>
        <router-link to="/users">Get All Users</router-link>
        <router-link to="/saveuser" >Save User</router-link>
        <router-view name="a"></router-view>
    </div>
</template>
