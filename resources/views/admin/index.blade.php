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
                </div>
            </div>
        </div>
    </div></div>
@endsection