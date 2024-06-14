<!-- Sidebar Start-->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-spa"></i>
        </div>
        <div class="sidebar-brand-text mx-3">RILEKSIA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Fitur
    </div>

    <!-- Nav Item - Booking Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="/bookings">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Pesanan</span></a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="/bookings" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Pesanan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/bookings">Semua Pesanan</a>
                <a class="collapse-item" href="#">Diproses</a>
                <a class="collapse-item" href="#">Diterima</a>
                <a class="collapse-item" href="#">Ditolak</a>
            </div>
        </div>
    </li> -->

    <!-- Nav Item - Utilities Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="/services">
            <i class="fas fa-fw fa-heartbeat"></i>
            <span>Layanan</span></a>
    </li> -->

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="/customers">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Pelanggan</span></a>
    </li>

    @auth
    @if (Auth::user()->role === 'Super Admin')
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="/users">
            <i class="fas fa-fw fa-user"></i>
            <span>Pengguna</span></a>
    </li>
    @endif
    @endauth


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- Sidebar End -->