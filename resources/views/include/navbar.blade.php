<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <ul class="navbar-nav">
      
    </ul>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
          
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                    data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                    data-bs-toggle="dropdown">
                    <img src="{{asset('foto')}}/{{Auth::user()->santri->foto}}" class="avatar img-fluid rounded-circle me-1"
                        alt="{{Auth::user()->name}}" /> <span class="text-dark">{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{route('santri-dashboard')}}"><i class="align-middle me-1"
                            data-feather="user"></i> Profil Saya</a>
                    <div class="dropdown-divider"></div>    
                     <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>