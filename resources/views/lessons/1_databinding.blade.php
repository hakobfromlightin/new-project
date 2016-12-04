@extends('layouts.app')

@section('content')
    <h1>@{{ message }}</h1>

    <input v-model="message">

    <pre>
        @{{ $data | json }}
    </pre>
@stop

@section('scripts')
    <script>

        new Vue({
            el: '#app',
            data: {
                message: 'Hello World'
            }
        });
    </script>
@stop