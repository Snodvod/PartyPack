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
                <h2><i class="fa fa-address-book" aria-hidden="true"></i>Biography</h2>
                {{$artist->bio}}
                <div style="position: relative; top: 260px;">
                    <b>Active in following parties</b>: 
                @foreach ($artist->parties()->get() as $party)
                    <a href="/concepts/{{$party->id}}">{{$party->name}}</a>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection