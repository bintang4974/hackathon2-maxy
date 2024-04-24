 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                </div>
                <div class="sidebar-brand-text mx-3">TBN Indonesia</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('event_users.index') }}">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Data Pendaftaran</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('speakers.index') }}">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Speaker</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('speaker.index') }}">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Speaker</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('events.index') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Event</span>
                </a>
            <li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Addons
                </div>


                <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->
