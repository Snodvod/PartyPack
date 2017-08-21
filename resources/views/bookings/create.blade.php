@extends('master')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">My Bookings</div>
            <div class="panel-body">
                <p>Welcome to your bookings</p>
                @if (session('status'))
                    <div class="alert alert-success successMsg">
                        {{ session('status') }}
                    </div>
                @endif
                <h1>Make a booking</h1>
                <form action="{{url('/bookings')}}" method="POST">
                    <h3>Select your party:</h3>

                    @foreach ($parties as $party)
                    <div class="checkbox">
                        <label class="party-label"><input id="check-margin-top" type="checkbox" name="party[]" value="{{$party->name}}">{{$party->name}}</label>
                    </div>
                    <p class="party-p">{{$party->description}}</p>
                    <div class="images row" style="margin-bottom: 10px;">
                        @foreach($party->images()->get() as $image)
                        <div class="image-party col-lg-4">
                            <a class="party-image" rel="group1" href="/img/{{$image->image}}"><img
                                        src="/img/{{$image->image}}" alt="{{$party->name}}"/></a>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Make Booking</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection