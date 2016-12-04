@extends('layouts.app')

@section('content')
    <form>
        <span class="error" v-show="!message">
            You must enter a message
        </span>
        <br>

        <textarea v-model="message">

        </textarea>

        <br>
        <button type="submit" v-if="message">
            Send Message
        </button>

        <pre>
                @{{ $data | json }}
            </pre>
    </form>
@stop

@section('scripts')

    <script>
        new Vue({
            el: '#app',
            data: {
                message: ''
            }
        });
    </script>
@stop