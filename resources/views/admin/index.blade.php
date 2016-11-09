@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>Welcome to the Admin Dashboard!</p>
                    @if (session('status'))
                        <div class="alert alert-success">
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
                                <td>{{$user->type->name}}</td>
                                <td>
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
                                <td>{{$party->users[0]->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <h2>Party Creation</h2>
                    <form action="{{ url( 'concepts/' ) }}" enctype="multipart/form-data" method="POST" class="form-inline">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>

                            <div>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Party">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="control-label">Description</label>

                            <div>
                                <input type="text" name="description" id="description" class="form-control"
                                       placeholder="Some Text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="artist" class="control-label">Artist</label>
                            <div>
                            <select name="artist" class="form-control">
                                @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
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