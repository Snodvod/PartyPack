@extends('master')

@section('content')
    <div class="index-wrapper">
        <div class="row">
            <div class="welcome col-lg-12">
                <div class="row">
                    <div class="text col-lg-4 col-lg-offset-4">
                        <h2>We offer unique party experiences crafted by people who really care</h2>
                    </div>
                </div>
                <div class="row">
                    <div id="js-click-welcome" class="col-lg-2 col-lg-offset-5 arrow discover"><h4>Discover what we
                            do</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row purpose">
            <div class="col-lg-3 col-lg-offset-2 text">
                <h3>Exclusive party concepts & unforgettable experiences</h3>
                <p>Every artist at PartyPack is selected carefully by our team. This means we don’t accept any normal
                    job
                    applications. Just to make sure you get only the best.</p>
                <p>People working here really like what they are doing an do it with <span>passion</span>. That’s why
                    they
                    are all
                    artists.</p>
            </div>
            <div class="carluccio col-lg-offset-2 col-lg-3"></div>
        </div>
        <div class="row artist">
            <div class="col-lg-12">
                <div class="row">
                    <div style="background-image: url({{asset('storage/' . $artist->images()->first()->image)}});" class="col-lg-offset-2 col-lg-3 picture"></div>
                    <div class="col-lg-offset-2 col-lg-3 text">
                        <h2><a href="/artists/{{$artist->id}}">{{$artist->name}}</a></h2>
                        <p class="bio">{{$artist->bio}}</p>
                        <a class="all" href="/artists">See all artists ></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row concepts-wrapper">
            <div class="col-lg-4 col-lg-offset-4 text-center"><h3>Our most popular concepts</h3></div>
            <div class="col-lg-8 col-lg-offset-2 concepts">
                <div class="row">
                    @foreach($populars as $popular)
                    <a href="/concepts/{{$popular->id}}">
                        <div class="col-lg-4">
                            <div style="background-image: url({{'/storage/' . $popular->images()->first()->image}});" class="concept">
                                <div class="overlay">
                                    <div class="text">{{$popular->name}}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-2 col-lg-offset-8 all">
                <a href="/concepts">Check out all our concepts ></a>
            </div>
        </div>
    </div>
@endsection