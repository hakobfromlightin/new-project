@extends('layouts.app')

@section('styles')
    <style>
        .completed {
            text-decoration: line-through;
        }
    </style>
@stop

@section('content')
    <ul>
        <li :class="{ 'completed': task.completed }" v-for="task in tasks" @click="toggleCompletedFor(task)">
        @{{ task.body }}
        </li>
    </ul>
@stop

@section('scripts')

    <script>
        new Vue({
            el: '#app',

            data: {
                tasks: [
                    {body: 'Go to the store', completed: false},
                    {body: 'Go to the bank', completed: false},
                    {body: 'Go to the doctor', completed: true}
                ]
            },

            methods: {
                toggleCompletedFor: function (task) {
                    task.completed = !task.completed;
                }
            }
        });
    </script>
@stop