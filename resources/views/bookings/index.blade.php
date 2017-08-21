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
                <h1>Welcome to your bookings</h1>
                @if (!$bookings->count())
                    <p>Seems like you haven't got any bookings yet. Add one if you please so.</p>
                @else
                <ul class="list-group">
                    @foreach ($bookings as $booking)
                    <li style="padding-bottom: 0px;" class="list-group-item"><a href="/concepts/{{$booking->party->id}}">{{$booking->party->name}}<form action="{{ url('/bookings/'.$booking->id) }}" method="POST">
                                        {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}
                                        <button style="position: relative;top: -20px;left: 1110px;" type="submit" class="btn btn-primary">Delete</button>
                                    </form></li>
                    @endforeach
                </ul>
                @endif
                <div style="padding-top:24px;">
                    <a href="/bookings/create"><button type="submit" class="btn btn-primary">Add Booking</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection