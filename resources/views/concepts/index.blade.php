@extends('master')

@section('content')
    <div class="party-content content">
        <div class="row head">
            <div class="col-lg-4 col-lg-offset-4 text-center">
                <h1><b>Our party experiences</b></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach($parties as $party)
                        <div class="col-lg-4">
                            <div class="hovereffect">
                                <img class="img-responsive" src="/img/{{$party->image_url}}" alt="{{$party->name}}">
                                <div class="overlay">
                                    <h2>{{$party->name}}</h2>
                                    <a class="info" href="/concepts/{{$party->id}}">Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection