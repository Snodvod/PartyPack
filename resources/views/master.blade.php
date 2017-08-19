<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HelloParty</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}" type="text/css" media="screen" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>