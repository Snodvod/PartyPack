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
                <h1>Exclusive party concepts & unforgettable experiences</h1>
                <p class="homepage-p">Every artist at HelloParty is selected carefully by our team. This means we don’t accept any normal
                    job
                    applications. Just to make sure you get only the best.</p>
                <p class="homepage-p">People working here really like what they are doing an do it with <span>passion</span>. That’s why
                    they
                    are all
                    <span>artists</span>.</p>
            </div>
            <div class="carluccio col-lg-offset-2 col-lg-3"></div>
        </div>
        <div class="row artist">
            <div class="col-lg-12">
                <div class="row">
                    <div style="background-image: url('/img/dynamo.jpg');" class="col-lg-offset-2 col-lg-3 picture concepts-showcase"></div>
                    <div class="col-lg-offset-2 col-lg-3 text">
                        <h1><a href="/artists/4">Dynamo</a></h1>
                        <p class="bio homepage-p">Growing up on the rundown Delph Hill housing estate in Bradford, with a father who spent large periods of time away in prison, Dynamo suffered with a debilitating form of Crohn?s disease as a youngster. Having been introduced to <span>magic</span> by his Grandad, the young Steven Frayne developed his skills as a means to fend off the bullies who teased him about his disease, quickly gaining a reputation as a unique talent within his local community with his incredible <span>sleight of hand</span>.</p>
                        <a class="all" href="/artists"><b>See</b> all artists</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row concepts-wrapper">
            <div class="col-lg-4 col-lg-offset-4 text-center"><h1>Our most popular concepts</h1></div>
            <div class="col-lg-8 col-lg-offset-2 concepts">
                <div class="row">
                    @foreach($populars as $popular)
                    <a href="/concepts/{{$popular->id}}">
                        <div class="col-lg-4">
                            <div style="background-image: url(/img/{{$popular->image_url}});" class="concept">
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
                <a href="/concepts" class="all"><b>Check out</b> all our concepts</a>
            </div>
        </div>
    </div>
@endsection