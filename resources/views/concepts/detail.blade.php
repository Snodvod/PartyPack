@extends('master')

@section('content')
    <div class="row content concept{{$party->id}} concept-detail">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-5">
                    <h2>{{$party->name}}</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
