@extends('layouts.app')

@section('content')
    <counter subject="Likes"></counter>
    <counter subject="Dislikes"></counter>

    <template id="counter-template">
        <div>
            <h1>@{{ subject }}</h1>
            <button @click="updateCount">Increment: @{{ count }}</button>
        </div>
    </template>
@stop

@section('scripts')

    <script>
        Vue.component('counter', {
            template: '#counter-template',

            props: ['subject'],

            data: function () {
                return {
                    count: 0
                };
            },

            methods: {
                updateCount: function () {
                    this.count += 1;
                }
            }
        });

        new Vue({
            el: '#app'
        });
    </script>
@stop