@extends('layouts.app')

@section('content')
    <alert type="info">
        <strong>Info!</strong> Indicates a neutral informative change or action.
    </alert>

    <alert type="warning">
        <strong>Warning!</strong> Indicates a warning that might need attention.
    </alert>

    <alert type="danger">
        <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
    </alert>

    <alert type="success">
        <strong>Success!</strong> Indicates a successful or positive action.
    </alert>


    <template id="alert-template">
        <div v-show="!closed" class="alert alert-@{{ type }}">
            <a href="#" class="close" aria-label="close" @click='closeAlert()'>&times;</a>
            <slot></slot>
        </div>
    </template>
@stop

@section('scripts')
    <script>
        Vue.component('alert', {
            template: '#alert-template',

            props: ['type'],

            data: function () {
                return {
                    closed: false
                }
            },

            methods: {
                closeAlert: function () {
                    this.closed = true;
                }
            }
        });

        new Vue({
            el: '#app'
        });
    </script>
@stop