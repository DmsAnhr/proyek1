<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="{{ url('/rental') }}" class="logo">
            <span>
                <img src="{{ asset('assets/user/img/new.png') }}" alt="logo-small" class="logo-sm"
                    style="height: 50px!important">
            </span>
            <span>
                <img src="{{ asset('assets/user/img/new.png') }}" alt="logo-large" class="logo-lg logo-light">
            </span>
        </a>
    </div>
    <!--end logo-->
    <!-- Navbar -->
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="dropdown notification-list">
                <a class="nav-link arrow-none waves-light waves-effect" href="{{ url('/user-profile') }}">
                    <i class="ti-user noti-icon"></i>
                </a>
                <a class="nav-link arrow-none waves-light waves-effect" href="{{ url('/user-order') }}">
                    <i class="ti-view-list-alt noti-icon"></i>
                </a>
                <a class="nav-link arrow-none waves-light waves-effect" href="{{ url('/user-track') }}">
                    <i class="ti-truck noti-icon"></i>
                </a>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('assets/admin/images/userAvatar.jpg') }}"
                        style="width: 36px;height: 36px;object-fit: cover;object-position: center" alt="profile-user"
                        class="rounded-circle" />
                    <span class="ml-1 nav-user-name hidden-sm top-bar-name">
                        <div style="width: 40px;height: 15px;background-color: #d6d6d6;border-radius: 3px"></div>
                        <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="{{ url('/logout') }}"><i class="ti-power-off text-muted mr-2"></i>
                        Logout</a>
                </div>
            </li>
        </ul>
        <!--end topbar-nav-->

        {{-- <ul class="list-unstyled topbar-nav mb-0">
            <li class="hide-phone app-search">
                <form role="search" class="">
                    <input type="text" id="AllCompo" placeholder="Search..." class="form-control">
                    <a href=""><i class="fas fa-search"></i></a>
                </form>
            </li>
        </ul> --}}
    </nav>
    <!-- end navbar-->
</div>
