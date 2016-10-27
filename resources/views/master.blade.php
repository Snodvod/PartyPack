<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PartyPack</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        @include('partials.header')
        @yield('content')
    </div>
</body>
</html>