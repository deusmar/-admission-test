<template>
    <div class="col">
        <div class="card">
            <div class="card-header">{{name}}</div>
            <task-view></task-view>
        </div>
    </div>

</template>

<script>
    import TaskView from './Task.vue'

    export default {

        components: {TaskView},

        props: ['attributes'],

        data() {
            return {
                name: this.attributes.name,
                tasks: [],
            }
        }

    }
</script>