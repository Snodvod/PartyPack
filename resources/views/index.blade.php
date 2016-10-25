@extends('master')

@section('content')
    <div class="row">
        <div class="welcome col-lg-12">

        </div>
    </div>
    <div class="row">
        <div class="header col-lg-12">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/"></a>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="item active"><a href="/"><span>Home</span></a></li>
                        <li class="diamond"></li>
                        <li class="item"><a href="/artists"><span>Artists</span></a></li>
                        <li class="diamond"></li>
                        <li class="item"><a href="/concepts"><span>Concepts</span></a></li>
                        <li class="diamond"></li>
                        <li class="item"><a href="/login"><span>Login</span></a></li>
                        <li class="diamond"></li>
                        <li class="item"><a href="/register"><span>Register</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
@endsection