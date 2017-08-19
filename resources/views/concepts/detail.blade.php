@extends('master')

@section('content')
    <div class="row content concept{{$party->id}} concept-detail">
        <div class="col-lg-offset-3 col-lg-9">
            <div class="row" style="margin-left: -10px;">
                <div class="col-lg-4">
                    <h1>{{$party->name}}</h1>
                </div>
            </div>
            <div class="description row">
                <div class="col-lg-8">
                    <p>{{$party->description}}</p>
                </div>
            </div>
            <div class="row images artists">
                <h2 class="concept-detail-title">Contributing artists</h2>
               @foreach($artists as $artist)
                    <div class="image col-lg-4">
                        <div class="artist-name">{{$artist->name}}</div>
                        <a class="group" rel="group1" href="/img/{{$artist->image_url}}"><img
                                    src="/img/{{$artist->image_url}}" alt="{{$artist->name}}"/></a>
                    </div>
                @endforeach
            </div>
            <div class="images row">
                    <h2 class="concept-detail-title">Some images</h2>
                @foreach($party->images()->get() as $image)
                
                    <div class="image col-lg-4">
                        <a class="group" rel="group1" href="/img/{{$image->image}}"><img
                                    src="/img/{{$image->image}}" alt="{{$party->name}}"/></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
