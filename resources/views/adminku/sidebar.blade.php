<!-- Link Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PT Barokah Komputerindo Islami</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
   

    <!-- Nav Item - Pages Collapse Menu -->
    @if(auth()->user()->role == 1)
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>DATA MASTER</span>
        </a>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/karyawan">karyawan</a>
                <a class="collapse-item" href="{{route('jabatan')}}">Jabatan</a>
                <a class="collapse-item" href="{{ route('slip_gaji.index') }}">slip gaji</a>
                <a class="collapse-item" href="/absensi">absensi</a>
                <a class="collapse-item" href="/absensi">cuti</a>

            </div>
        </div>
    </li>
    @endif

    <!-- Nav Item - New Sidebar Menu -->
    @if(auth()->user()->role == 2)
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>


    <li class="nav-item active">
        <a class="nav-link" href="/karyawan">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>karyawan</span>
        </a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fa-solid fa-calendar"></i>
            <span>cuti</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="/absensi">
            <i class="fa-solid fa-calendar"></i>
            <span>absensi</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/slip_gaji">
            <i class="fa-solid fa-calendar"></i>
            <span>slip gaji</span>
        </a>
    </li>
    @endif

    @if(auth()->user()->role == 3)
    <li class="nav-item">
        <a class="nav-link" href="{{ route('permohonancuti-manager') }}">
            <i class="fa-solid fa-calendar"></i>
            <span>Permohonan Cuti</span>
        </a>
    </li>
   
    @endif

    <!-- Nav Item - Logout -->
    <li class="nav-item active">
        <a class="nav-link" href="/logout">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Logout</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
</ul>
