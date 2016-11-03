@extends('master')

@section('content')
    <div class="row">
        <div class="welcome col-lg-12">
            <div class="row">
                <div class="text col-lg-4 col-lg-offset-4">
                    <h2>We offer unique party experiences crafted by people who really care</h2>
                </div>
            </div>
            <div class="row">
                <div id="js-click-welcome" class="col-lg-2 col-lg-offset-5 arrow discover"><h4>Discover what we do</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row purpose">
        <div class="col-lg-3 col-lg-offset-2 text">
            <h3>Exclusive party concepts & unforgettable experiences</h3>
            <p>Every artist at PartyPack is selected carefully by our team. This means we don’t accept any normal job
                applications. Just to make sure you get only the best.</p>
            <p>People working here really like what they are doing an do it with <span>passion</span>. That’s why they
                are all
                artists.</p>
        </div>
        <div class="carluccio col-lg-offset-2 col-lg-3"></div>
    </div>
    <div class="row artist">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 text-center head">
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
                    <a href="/artists">See all artists ></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row concepts-wrapper">
        <div class="col-lg-4 col-lg-offset-4 text-center"><h3>Our most popular concepts</h3></div>
        <div class="col-lg-8 col-lg-offset-2 concepts">
            <div class="row">
                <a href="#">
                    <div class="col-lg-4">
                        <div class="c1 concept">
                            <div class="overlay">
                                <div class="text">Brazilian shit</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col-lg-4">
                        <div class="c2 concept">
                            <div class="overlay">
                                <div class="text">Jamaican shit</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col-lg-4">
                        <div class="c3 concept ">
                            <div class="overlay">
                                <div class="text">Magician shit</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-2 col-lg-offset-8 all">
            <a href="/concepts">Check out all our concepts ></a>
        </div>
    </div>
@endsection