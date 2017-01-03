@extends('layouts.app')

@section('content')
<h1>Welcome back @{{ shared.username }}</h1>
    <notification>
        Some Notification
    </notification>
@stop

@section('scripts')
    <script>
        var storage = {
            username: 'Hakob Baghdasaryan'
        };
        new Vue({
            el: '#app',

            data: {
                misk: 'something',
                shared: storage
            },

            components: {
                notification: {
                    data: function () {
                        return storage;
                    },

                    template: '<h2>@{{ username }}: <slot></slot></h2>'
                }
            }
        });
    </script>
@stop