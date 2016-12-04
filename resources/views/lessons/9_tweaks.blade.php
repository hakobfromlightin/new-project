@extends('layouts.app')

@section('styles')
    <style>
        .completed {
            text-decoration: line-through;
        }
    </style>
@stop

@section('content')
    <tasks :list="tasks"></tasks>

    <template id="tasks-template">
        <div v-if="list.length">
            <h1>
                My Tasks <span v-show="remaining">@{{ remaining }}</span>
            </h1>
            <ul>
                <li :class="{ 'completed': task.completed }" v-for="task in list" @click="toggleCompletedFor(task)">
                @{{ task.body }}
                <strong @click="deleteTask(task)">x</strong>
                </li>
            </ul>
        </div>
        <p v-else>You have no tasks</p>

        <button @click="clearCompleted">Clear Completed</button>
    </template>
@stop

@section('scripts')

    <script>
        Vue.component('tasks', {
            props: ['list'],
            template: '#tasks-template',
            methods: {
                toggleCompletedFor: function (task) {
                    task.completed = !task.completed;
                },

                deleteTask: function (task) {
                    this.list.$remove(task);
                },

                clearCompleted: function () {
                    this.list = this.list.filter(this.inProgress);
                },

                isCompleted: function (task) {
                    return task.completed;
                },

                inProgress: function (task) {
                    return !this.isCompleted(task);
                }
            },

            computed: {
                remaining: function () {
                    return this.list.filter(this.inProgress).length;
                }
            }
        });

        new Vue({
            el: '#app',

            data: {
                tasks: [
                    {body: 'Go to the store', completed: false},
                    {body: 'Go to the bank', completed: false},
                    {body: 'Go to the doctor', completed: true}
                ]
            }
        });
    </script>
@stop