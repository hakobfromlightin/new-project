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
        <div>
            <ul>
                <li :class="{ 'completed': task.completed }" v-for="task in list" @click="toggleCompletedFor(task)">
                @{{ task.body }}
                </li>
            </ul>
        </div>
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