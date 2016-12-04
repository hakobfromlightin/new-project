@extends('layouts.app')

@section('content')
    <div id="app">
        <form action="" @submit.prevent="handleIt">
            <button type="submit">
                Submit Me!
            </button>
        </form>

        <hr>

        <button type="submit" @click="updateCount">
            Increment Counter: @{{ count }}
        </button>
    </div>
@stop

@section('scripts')

    <script>
        new Vue({
            el: '#app',
            data: {
                count: 0
            },
            methods: {
                handleIt: function () {
                    alert('hi there');
                },
                updateCount: function () {
                    this.count += 1;
                }
            }
        });
    </script>
@stop