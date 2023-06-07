    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menu-light ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div ">
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-radius" src="{{ asset('/resources/images/pengguna/default.png') }}"
                            alt="User-Profile-Image">
                        <div class="user-details">
                            <div id="more-details">{{ auth()->guard('guru')->user()->nama_guru }}</div>
                        </div>
                    </div>
                </div>

                <ul class="nav pcoded-inner-navbar ">

                    <li class="nav-item pcoded-menu-caption">
                        <label><strong>SIAISK - SMK ISTEK TEGAL</strong></label>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('guru.dashboard') }}" class="nav-link ">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link ">
                            <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                            <span class="pcoded-mtext">Biodata</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{ route('guru.biodata.index', '1') }}">Informasi Pribadi</a></li>
                            <li><a href="{{ route('master.datapengguna.index') }}">Foto Pribadi</a></li>
                            <!-- <li><a href="master/datasarpras">Data Sarpras</a></li> -->
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <span class="pcoded-micon"><i class="feather icon-power"></i></span>
                            <span class="pcoded-mtext">Keluar</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo gambar di atas   ============ -->
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">Baru</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius"
                                            src="{{ asset('/resources/images/pengguna/default.png') }}"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Exampremium</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>SmartSchool V.2</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="{{ asset('/resources/images/pengguna/default.png') }}" class="img-radius"
                                    alt="User-Profile-Image">
                                <span>User</span>
                                <a href="admin/dashboard/logout" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="#" class="dropdown-item"><i class="feather icon-user"></i>
                                        Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->
