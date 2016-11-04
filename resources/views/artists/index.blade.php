@extends('master')

@section('content')
    <div class="artists-wrapper content">
        <div class="row head">
            <div class="col-lg-4 col-lg-offset-4 text-center">
                <h2>All our artists</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="hovereffect">
                            <img class="img-responsive" src="{{asset('/img/eek.jpg')}}" alt="">
                            <div class="overlay">
                                <h2>Eek-a-mouse</h2>
                                <a class="info" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hovereffect">
                            <img class="img-responsive" src="{{asset('/img/dynamo.jpg')}}" alt="">
                            <div class="overlay">
                                <h2>Dynamo</h2>
                                <a class="info" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hovereffect">
                            <img class="img-responsive" src="{{asset('/img/ozomatli.jpg')}}" alt="">
                            <div class="overlay">
                                <h2>Ozomatli</h2>
                                <a class="info" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection