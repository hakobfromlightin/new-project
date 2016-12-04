@extends('layouts.app')

@section('content')
    <h1>@{{ 'hello world' | uppercase }}</h1>
    <h1>@{{ 5 | currency }}</h1>
    <h1>@{{ 5 | currency '&' }}</h1>
    <h1>@{{ $data | myJson }}</h1>

    <hr>

    <ul>
        <li v-for="person in people | orderBy 'name' -1 | limitBy 4 | role 'admin'">@{{ person.name }}</li>
    </ul>
@stop

@section('scripts')
    <script>
        Vue.filter('myJson', function (value) {
            return JSON.stringify(value);
        });

        Vue.filter('role', function (value, role) {
            return value.filter(function (item) {
                return item.role == role;
            })
        });

        new Vue({
            el: '#app',

            data: {
                people: [
                    {name: 'Joe', role: 'admin'},
                    {name: 'Jane', role: 'user'},
                    {name: 'John', role: 'admin'},
                    {name: 'Jack', role: 'admin'},
                    {name: 'Jin', role: 'user'},
                ]
            }
        });
    </script>
@stop