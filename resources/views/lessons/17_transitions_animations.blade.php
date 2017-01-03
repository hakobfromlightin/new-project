@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
@stop

@section('content')
    <div v-show="show" transition="fade" class="alert alert-danger animated">
        Some message here.
    </div>
    <hr>
    <button @click="toggleShow" class="btn btn-default">@{{ message }}</button>
@stop

@section('scripts')
    <script>
        Vue.transition('fade', {
            enterClass: 'bounce',
            leaveClass: 'fadeOut'
        });
        new Vue({
            el: '#app',

            data: {
                show: true,
                message: 'Close'
            },

            methods: {
                toggleShow: function () {
                    this.show = ! this.show;

                    if (this.show == true) {
                        this.message = "Close"
                    } else {
                        this.message = "Show"
                    }
                }
            }
        });


    </script>
@stop