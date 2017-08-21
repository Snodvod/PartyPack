@extends('master')

@section('content')
    <div class="artists-wrapper content">
        <div class="row head">
            <div class="col-lg-4 col-lg-offset-4 text-center">
                <h1><b>All our artists</b></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach($artists as $artist)
                        <div class="col-lg-4">
                            <div class="hovereffect">
                               <img class="img-responsive" src="/img/{{$artist->image_url}}" alt="{{$artist->name}}">
                                <div class="overlay">
                                    <h2>{{$artist->name}}</h2>
                                    <a class="info" href="/artists/{{$artist->id}}">Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection