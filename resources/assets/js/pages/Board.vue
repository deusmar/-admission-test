<template>
    <div class="row justify-content-center">
        <lane-view v-for="item in lanes" :attributes="item" :key="item.id"></lane-view>
    </div>

</template>
<script>
    import LaneView from '../components/lane.vue';

    export default {
        components: {LaneView},
        data() {
            return {
                lanes : []
            }
        },

        created(){
            this.getLanes();
        },

        methods: {
            getLanes() {
                axios.get('/lanes')
                    .then(response => {
                        this.lanes = response.data.lanes;
                    })
            }
        }
    }
</script>