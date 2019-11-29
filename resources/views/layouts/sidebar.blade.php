<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle"
                         src="{{Auth::user()->photo_profile?asset('images/photo_profile').'/'.Auth::user()->photo_profile:asset('images/photo_profile/default.png')}}"
                         alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{Auth::user()->name}}</p>
                    <p class="designation">{{ Auth::guard('web')->check()?'Admin':Auth::user()->actor_status }}</p>
                </div>
            </a>
        </li>
        @if(Auth::guard('investor')->check())
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('investment-packages.index')}}">
                    <i class="menu-icon typcn typcn-bell"></i>
                    <span class="menu-title">Data Paket Investasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="menu-icon typcn typcn-user-outline"></i>
                    <span class="menu-title">Fitur X</span>
                </a>
            </li>
        @elseif(Auth::guard('breeder')->check())
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('d-o-cs.index')}}">
                    <i class="menu-icon typcn typcn-user-outline"></i>
                    <span class="menu-title">Data DOC</span>
                </a>
            </li>
        @elseif(Auth::guard('grazier')->check())
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('operational-graziers.index')}}">
                    <i class="menu-icon typcn typcn-user-outline"></i>
                    <span class="menu-title">Data Biaya Operaional Peternak</span>
                </a>
            </li>
        @elseif(Auth::guard('seller')->check())
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('chicken-price-offers.index')}}">
                    <i class="menu-icon typcn typcn-user-outline"></i>
                    <span class="menu-title">Data Penawaran Harga Beli Ayam</span>
                </a>
            </li>
        @elseif(Auth::guard()->check())
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                   aria-controls="ui-basic">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Data Akun</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('investors.index')}}">Data Investor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('graziers.index')}}">Data Peternak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('sellers.index')}}">Data Pengepul</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('breeders.index')}}">Data Pembibit</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('investment-packages.index')}}">
                    <i class="menu-icon typcn typcn-bell"></i>
                    <span class="menu-title">Data Paket Investasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="menu-icon typcn typcn-user-outline"></i>
                    <span class="menu-title">Fitur X</span>
                </a>
            </li>
        @endif
    </ul>
</nav>