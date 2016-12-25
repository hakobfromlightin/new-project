@extends('layouts.app')

@section('content')
    <form method="POST" action="/tasks/2" v-ajax complete="Okay Deleted">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button class="btn btn-danger" type="submit">Delete Task</button>
    </form>
@stop

@section('scripts')
    <script>
        Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('input[name="_token"]').value;

        Vue.directive('ajax', {
            params: ['complete'],

            bind: function () {
                this.el.addEventListener('submit', this.onSubmit.bind(this))
            },

            onSubmit: function (e) {
                e.preventDefault();
                this.vm
                        .$http[this.getRequestType()](this.el.action)
                        .then(this.onComplete.bind(this))
                        .catch(this.onError.bind(this));
            },

            onComplete: function () {
                if (this.params.complete) {
                    alert(this.params.complete);
                }
            },

            onError: function (response) {
                alert(response.data.message);
            },

            getRequestType: function () {
                var method = this.el.querySelector('input[name="_method"]');

                return (method ? method.value : this.el.method).toLowerCase();
            }
        });

        new Vue({
            el: '#app'
        });
    </script>
@stop