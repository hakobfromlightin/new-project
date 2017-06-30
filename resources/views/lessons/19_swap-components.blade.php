<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JS</title>
</head>
<body>
    <component is="{{ $currentView }}" inline-template>
        @yield('content')
    </component>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.js"></script>
<script>
    Vue.component('home-page', {

    });

    Vue.component('about-page', {

    });

    new Vue({
        el: 'body'
    });
</script>
</html>