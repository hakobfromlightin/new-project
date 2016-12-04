@extends('layouts.app')

@section('content')
    <h1> Skill: @{{ skill }}</h1>
    <hr>
    <input v-model="points">
@stop

@section('scripts')

    <script>
        new Vue({
            el: '#app',

            data: {
                points: 20
            },

            computed: {
                skill: function () {
                    if (this.points < 100) {
                        return 'Beginner';
                    }

                    if (this.points >= 100 && this.points <= 300) {
                        return 'Intermediate';
                    }

                    if (this.points > 300) {
                        return 'Advanced';
                    }
                }
            }
        });
    </script>
@stop