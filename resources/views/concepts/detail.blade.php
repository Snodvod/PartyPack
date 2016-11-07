@extends('master')

@section('content')
    <div class="row content concept{{$party->id}} concept-detail">
        <div class="col-lg-offset-3 col-lg-9">
            <div class="row">
                <div class="col-lg-4">
                    <h2>{{$party->name}}</h2>
                </div>
            </div>
            <div class="description row">
                <div class="col-lg-5">
                    <p>{{$party->description}}</p>
                </div>
            </div>
            <div class="row artists">
                <div class="col-lg-12 text-center"><h2>Contributing artists</h2></div>
                @foreach($artists as $artist)
                    <div class="col-lg-4">
                        {{$artist->name}}
                    </div>
                @endforeach
            </div>
            <div class="images row">
                <div class="col-lg-4">
                    <div class="head">
                        <h2>Some images</h2>
                    </div>
                </div>
                @foreach($party->images()->get() as $image)
                    <div class="image col-lg-4">
                        <a class="group" rel="group1" href="{{asset('storage/' . $image->image)}}"><img
                                    src="{{asset('storage/' . $image->image)}}" alt="{{$party->name}}"/></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
