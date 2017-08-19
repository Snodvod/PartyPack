@extends('master')

@section('content')
    <div class="row content profile">
        <div class="col-lg-3 col-lg-offset-1">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="/img/{{$artist->image_url}}" class="img-responsive" alt="{{$artist->name}}">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        {{$artist->name}}
                    </div>
                    <div class="profile-usertitle-job">
                        {{$artist->occupations()->first()->type}}
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
            </div>
        </div>
        <div class="col-lg-7">
            <div class="profile-content">
                <h2>Biography</h2>
                {{$artist->bio}}
            </div>
        </div>
    </div>
@endsection