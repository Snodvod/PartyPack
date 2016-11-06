<div class="row">
    <div class="header col-lg-12">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"></a>
                <ul class="nav navbar-nav navbar-right">
                    <li class="item {{isActiveRoute('home')}}"><a href="/"><span>Home</span></a></li>
                    <li class="diamond"></li>
                    <li class="item {{areActiveRoutes(['artists.index', 'artists.show'])}}"><a href="/artists"><span>Artists</span></a>
                    </li>
                    <li class="diamond"></li>
                    <li class="item {{areActiveRoutes(['concepts.index', 'concepts.show'])}}"><a href="/concepts"><span>Concepts</span></a>
                    </li>
                    <li class="diamond"></li>
                    @if(!Auth::user())
                        <li class="item {{isActiveRoute('login')}}"><a href="/login"><span>Login</span></a></li>
                        <li class="diamond"></li>
                        <li class="item {{isActiveRoute('register')}}"><a href="/register"><span>Register</span></a>
                        </li>
                    @else
                        <form method="POST" action="/logout" class="navbar-nav navbar-form navbar-right">
                            <div class="form-group">
                                {!! csrf_field() !!}
                            </div>
                            <input class="logout" type="submit" value="Logout">
                        </form>
                        @if(Auth::user()->type['name'] == 'admin')
                            <li class="item {{isActiveRoute('admin')}}"><a href="/admin"><span>Admin</span></a>
                            <li class="diamond"></li>
                        @endif
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>