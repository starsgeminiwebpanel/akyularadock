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
        <button @click="increment">increment</button>
<div>{{count}}</div>
</div>
</template>
<script>
    import { createNamespacedHelpers } from 'vuex'

    const { mapState, mapActions ,mapMutations,mapGetters } = createNamespacedHelpers('frontDetails')

    /*
    import { mapState } from 'vuex'
    import { mapActions } from 'vuex'
    import { mapMutations } from 'vuex'
    import { mapGetters } from 'vuex'
*/

    export default {
    name: 'Footer',
    data: function(){
  return { localCount: 1 }
},
    computed: {
    ...mapState({
    // arrow functions can make the code very succinct!
    count: state => state.count,
    // passing the string value 'count' is same as `state => state.count`
    countAlias: 'count',
    countPlusLocalState (state) {
    return state.count + this.localCount
    }
    }),
    ...mapGetters([
        'doneTodos',
    'doneTodosCount',
    'getTodoById',
    ]),
    ...mapGetters({
    // map `this.doneCount` to `this.$store.getters.doneTodosCount`
    doneCount: 'doneTodosCount'
    })
    },
    methods: {
        ...mapMutations([
      'increment',
      'incrementBy'
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
}
}

</script>
