<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><span class="fa fa-truck"></span> SBS-MYANMAR</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">

            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->

                @guest
                <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                @else
                    <li><a href="{{route('home')}}"><span class="fa fa-dashboard"></span> Dashboard</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="fa fa-user" style="color: #00ff00;"></span> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                 <a href="{{route('profile.index')}}"><i class="fa fa-user-circle-o"></i> View Profile</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <span class="fa fa-sign-out"></span> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>