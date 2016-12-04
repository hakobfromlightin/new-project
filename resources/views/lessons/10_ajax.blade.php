@extends('layouts.app')

@section('content')
    <task :list="{{ $tasks }}"></task>


    <template id="tasks-template">
        <div>
            <h1>My Task</h1>
            <ul class="list-group">
                <li class="list-group-item" v-for="task in list">
                    @{{ task.body }}
                    <button class="btn btn-danger" @click="deleteTask(task)">Delete</button>
                </li>
            </ul>
        </div>
    </template>
@stop

@section('scripts')
    <script>
        Vue.component('task', {
            template: '#tasks-template',

            data: function () {
                return {
                    list: []
                }
            },

            created: function () {
                this.fetchTaskList();
            },

            methods: {
                fetchTaskList: function () {
                    var resource = this.$resource('api/tasks/:id');

                    resource.get({}, function (tasks) {
                        this.list = tasks;
                    }.bind(this));
                },

                deleteTask: function (task) {
                    this.list.$remove(task);
                }
            }
        });

        new Vue({
            el: '#app'
        });
    </script>
@stop