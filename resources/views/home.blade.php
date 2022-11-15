<!DOCTYPE html>
<html>
<header>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

</header>
<body>
    <div class="background">
        <img src= "{{ asset('/img/bg.jpg') }}">
        <h1 class="h1text">Welcome to Coffeecode brewhouse</h1>
        <button>Start brewing</button>
    </div>

</body>

</html>