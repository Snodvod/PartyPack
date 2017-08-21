@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>Welcome to the Admin Dashboard!</p>
                    @if (session('status'))
                        <div class="alert alert-success successMsg">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>User Management</h1>
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Delete</th>
                            <th>Invitation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td style="width: 200px">{{$user->type->name}}<a href="/roleform"><button style="float: right;" type="submit" class="btn btn-primary">Change Role</button></a></td>
                                <td style="width: 80px">
                                    <form action="{{ url('/artists/'.$user->id) }}" method="POST">
                                        {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </form>
                                </td>
                                @if(!$user->isActive)
                                    <td>
                                        <form action="{{ url('/email/'.$user->id) }}" method="POST">
                                            {!! csrf_field() !!}
                                            <button type="submit" class="btn btn-primary">Invite</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <h1>Party Management</h1>
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Artists</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($parties as $party)
                            <tr>
                                <td>{{$party->name}}</td>
                                <td>{{$party->description}}</td>
                                @if ($party->users->count())
                                    <td>{{$party->users->first()->name}}</td>
                                @else
                                    <td>No users active yet on this party.</td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <h2>Party Creation</h2>
                    <form action="{{ url( 'concepts/' ) }}" enctype="multipart/form-data" method="POST" class="form-inline">
                        {!! csrf_field() !!}

                        <div class="form-group form-margin-right">
                            <label for="name" class="control-label">Name</label>

                            <div>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Party">
                            </div>
                        </div>

                        <div class="form-group form-margin-right">
                            <label for="description" class="control-label">Description</label>

                            <div>
                                <input type="text" name="description" id="description" class="form-control"
                                       placeholder="Some Text">
                            </div>
                        </div>
                        <div class="form-group form-margin-right">
                            <label for="artist" class="control-label">Artist</label>
                            <div>
                            <select name="artist" class="form-control">
                                @foreach ($users as $user)
                                    @if ($user->type->name === "artist")
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group form-margin-right">
                            <label for="image">Image</label>

                            <input type="file" id="image" name="image">
                        </div>

                        <div class="form-group">
                            <div style="padding-top:24px;">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div></div>
@endsection