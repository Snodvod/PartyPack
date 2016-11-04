<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PartyPack</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('styles')
</head>
<body>
<div class="se-pre-con">
    <h2>Loading...</h2>
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<div id="container" class="container">
    @include('partials.header')
    @yield('content')
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>