<template>
<div>
<p>Footer Part Counter below</p>
        <ul>
            <li v-for="item in doneTodos" :key="item.id">
                {{item.id}}
                test {{item.text}}
                ? {{item.done}}
            </li>
            </ul>
    <div>{{ users }}</div>

<span>{{saveUserResponse}}</span>
        <button @click="increment">increment</button>
<div>{{count}}</div>
<div>get info : {{info}}</div>
</div>
</template>
<script>
    import { createNamespacedHelpers } from 'vuex'

    const { mapState, mapActions ,mapMutations,mapGetters } = createNamespacedHelpers('frontMain')

    /*
    import { mapState } from 'vuex'
    import { mapActions } from 'vuex'
    import { mapMutations } from 'vuex'
    import { mapGetters } from 'vuex'
*/

    export default {
    name: 'Footer',
    data: function(){
          return { localCount: 1, info: null , }
    },
    computed: {
    ...mapState({
    // arrow functions can make the code very succinct!
    count: state => state.count,
    // passing the string value 'count' is same as `state => state.count`
    countAlias: 'count',
    users: state => state.users,
    user: state => state.user,
    saveUserResponse: state => state.saveUserResponse,
    countPlusLocalState (state) {
    return state.count + this.localCount
    }
    }),
    ...mapGetters([
    'doneTodos',
    'doneTodosCount',
    'getTodoById',
    'saveUser',
    ]),
    ...mapGetters({
    // map `this.doneCount` to `this.$store.getters.doneTodosCount`
    doneCount: 'doneTodosCount',
    })
    },
    methods: {
        ...mapMutations([
      'increment',
      'incrementBy',
      'getinfo',
      'getUsers',
      ]),
    ...mapMutations({
     add: 'increment',
     }),
    ...mapActions([
        'increment',
        'incrementBy'
     ]),
    ...mapActions({
      add:'increment'
   }),
},
    mounted() {
    //    this.getinfo()
    console.log("dr")
    this.info = "infolar tinfolar"
    this.getUsers()
    this.saveUser
    }
}

</script>
