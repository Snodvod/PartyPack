@extends('master')

@section('content')
    <div class="party-content content">
        <div class="row head">
            <div class="col-lg-4 col-lg-offset-4 text-center">
                <h2>Our party experiences</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach($parties as $party)
                        <div class="col-lg-4">
                            <div class="hovereffect">
                                <img class="img-responsive" src="{{asset('/storage/' . $party->images()->first()->image)}}" alt="{{$party->name}}">
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