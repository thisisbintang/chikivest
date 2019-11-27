<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="#">
            <img src="{{asset('images/logo.svg')}}" alt="logo"/> </a>
        <a class="navbar-brand brand-logo-mini" href="#">
            <img src="{{asset('images/logo-mini.svg')}}" alt="logo"/> </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
                <input type="search" class="form-control" placeholder="Cari disini">
            </div>
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                   aria-expanded="false">
                    <img class="img-xs rounded-circle"
                         src="{{Auth::user()->photo_profile?asset('images/photo_profile').'/'.Auth::user()->photo_profile:asset('images/photo_profile/default.png')}}"
                         alt="Profile image">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle"
                             src="{{Auth::user()->photo_profile?asset('images/photo_profile').'/'.Auth::user()->photo_profile:asset('images/photo_profile/default.png')}}"
                             alt="Profile image">
                        <p class="mb-1 mt-3 font-weight-semibold">{{Auth::user()->name}}</p>
                        <p class="font-weight-light text-muted mb-0">{{Auth::user()->email}}</p>
                    </div>
                    @if(Auth::guard('investor')->check())
                        <a class="dropdown-item">Profil</a>
                    @elseif(Auth::guard('breeder')->check())
                        <a class="dropdown-item">Profil</a>
                    @elseif(Auth::guard('grazier')->check())
                        <a class="dropdown-item">Profil</a>
                    @elseif(Auth::guard('seller')->check())
                        <a class="dropdown-item">Profil</a>
                    @elseif(Auth::guard()->check())
                        <a class="dropdown-item" href="{{route('profile',Auth::user()->id)}}">Profil</a>
                    @endif
                    @if(Auth::guard('investor')->check())
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Keluar
                            <i class="dropdown-item-icon ti-power-off">
                                <form id="logout-form" method="POST" action="{{route('investor.logout')}}"
                                      style="display: none;">
                                    {{csrf_field()}}
                                </form>
                            </i>
                        </a>
                    @elseif(Auth::guard('breeder')->check())
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Keluar
                            <i class="dropdown-item-icon ti-power-off">
                                <form id="logout-form" method="POST" action="{{route('breeder.logout')}}"
                                      style="display: none;">
                                    {{csrf_field()}}
                                </form>
                            </i>
                        </a>
                    @elseif(Auth::guard('grazier')->check())
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Keluar
                            <i class="dropdown-item-icon ti-power-off">
                                <form id="logout-form" method="POST" action="{{route('grazier.logout')}}"
                                      style="display: none;">
                                    {{csrf_field()}}
                                </form>
                            </i>
                        </a>
                    @elseif(Auth::guard('seller')->check())
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Keluar
                            <i class="dropdown-item-icon ti-power-off">
                                <form id="logout-form" method="POST" action="{{route('seller.logout')}}"
                                      style="display: none;">
                                    {{csrf_field()}}
                                </form>
                            </i>
                        </a>
                    @elseif(Auth::guard()->check())
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Keluar
                            <i class="dropdown-item-icon ti-power-off">
                                <form id="logout-form" method="POST" action="{{route('logout')}}"
                                      style="display: none;">
                                    {{csrf_field()}}
                                </form>
                            </i>
                        </a>
                    @endif
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>