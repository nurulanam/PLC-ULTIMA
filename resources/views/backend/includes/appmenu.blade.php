<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        {{-- @php
            $logo_info = App\Http\Controllers\backend\DashboardController::avater();
        @endphp
        <!-- Dark Logo-->
        <a href="{{ route('frontend.index') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('backend') }}/assets/images/school/avater/{{ $logo_info->school_avater }}"
                    alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend') }}/assets/images/school/avater/{{ $logo_info->school_avater }}"
                    alt="" height="100">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('frontend.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('backend') }}/assets/images/school/avater/{{ $logo_info->school_avater }}"
                    alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('backend') }}/assets/images/school/avater/{{ $logo_info->school_avater }}"
                    alt="" height="100">
            </span>
        </a> --}}
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                {{-- Start Dashboard --}}
                    <li class="nav-item">
                        <a href="{{ route('dashboard.index') }}" class="nav-link" data-key="t-horizontal">
                            <i class="mdi mdi-speedometer"></i> <span data-key="dashboard">Dashboard</span>
                        </a>
                    </li>
                {{-- End Dashboard --}}

                {{-- Start Users --}}
                    @role('admin')
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link" data-key="t-horizontal">
                                <i class="mdi mdi-account"></i> <span data-key="dashboard">Users</span>
                            </a>
                        </li>
                    @endrole
                {{-- End Users --}}

                {{-- Start Information Menu --}}
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarTeacher" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarTeacher">
                            <i class="mdi mdi-account-tie"></i> <span data-key="t-layouts">Manage All Info</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarTeacher">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('information.index') }}" class="nav-link"
                                        data-key="t-horizontal">All Informaitons</a>
                                    <a href="{{ route('information.create') }}" class="nav-link"
                                        data-key="t-horizontal">Add Info</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                {{-- End Information Menu  --}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
