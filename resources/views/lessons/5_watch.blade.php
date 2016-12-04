@extends('layouts.app')

@section('content')
    <h1>@{{ full }}</h1>
    <input v-model="first">
    <input v-model="last">
@stop
@section('scripts')

    <script>
        new Vue({
            el: '#app',

            data: {
                first: 'Hakob',
                last: 'Baghdasaryan',
                full: 'Hakob Baghdasaryan'
            },

            watch: {
                first: function (first) {
                    this.full = first + ' ' + this.last
                },

                last: function (last) {
                    this.full = this.first + ' ' + last
                }
            }
        });
    </script>
@stop