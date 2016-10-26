@extends('master')

@section('content')
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
    <div class="row">
        <div class="welcome col-lg-12">
            <h1>We offer unique party experiences crafted by people who really care</h1>
            <div class="row">
                <div id="js-click-welcome" class="col-lg-2 col-lg-offset-5 arrow discover"><h4>Discover what we do</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row purpose">
        <div class="col-lg-3 col-lg-offset-2 text">
            <h2>Exclusive party concepts & unforgettable experiences</h2>
            <p>Every artist at PartyPack is selected carefully by our team. This means we don’t accept any normal job
                applications. Just to make sure you get only the best.</p>
            <p>People working here really like what they are doing an do it with <span>passion</span>. That’s why they
                are all
                artists.</p>
        </div>
        <div class="carluccio col-lg-offset-2 col-lg-4"></div>
    </div>
    <div class="row artist">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-5 head">
                    <h2>Meet one of our artists</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-offset-2 col-lg-3 picture"></div>
                <div class="col-lg-offset-2 col-lg-3 text">
                    <h3>Luan Oliveira</h3>
                    <div class="info">
                        <p>25 years old</p>
                        <p>Born in Rio De Janeiro, Brasil</p>
                        <p>Great at singing Brazilian music</p>
                    </div>
                    <p class="bio">Here comes a big ass biography of this artist, yes yes yes yes yesyes yes yes yes
                        yesyes yes yes yes yesyes yes yes yes yesyes yes yes yes yesyes yes yes yes yesyes yes yes yes
                        yesyes yes yes yes yesyes yes yes yes yesyes yes yes yes yesyes yes yes yes yes
                        yes yes yes yes yesyes yes yes yes yesyes yes yes yes yesyes yes yes yes yesyes yes yes yes
                        yes</p>
                </div>
            </div>
        </div>

    </div>
@endsection