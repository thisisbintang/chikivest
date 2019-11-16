<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{asset('images/faces/face28.jpg')}}" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{Auth::user()->name}}</p>
                    <p class="designation">Admin</p>
                </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Beranda</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
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
            <a class="nav-link" href="#">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Data Paket</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Fitur X</span>
            </a>
        </li>
    </ul>
</nav>