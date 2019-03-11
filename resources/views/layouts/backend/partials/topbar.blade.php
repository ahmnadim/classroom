<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            
            <a class="brand" href="{{route('welcome')}}"><span>Class Room</span></a>
                            
            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                
                <ul class="navbar-nav ml-auto nav pull-right">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i>{{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Account Settings</span>
                            </li>
                            @if(Auth::user()->type == 'teacher')
                            <li><a href="{{route('teacher.profile.index')}}"><i class="halflings-icon user"></i> Profile</a></li>
                            @endif

                           @if(Auth::user()->type == 'student')
                            <li><a href="{{route('student.profile.index')}}"><i class="halflings-icon user"></i> Profile</a></li>
                            @endif

                           
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="halflings-icon off"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                       
                    @endguest
                </ul>
            </div>
            <!-- end: Header Menu -->
            
        </div>
    </div>
</div>