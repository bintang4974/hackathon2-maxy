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
                <a class="nav-link" href="{{ route('events.index') }}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Event</span>
                </a>
            <li>
        </ul>
        <!-- End of Sidebar -->
