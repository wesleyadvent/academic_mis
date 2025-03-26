<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="#" class="logo">
                <img src="{{ asset('assets/img/kaiadmin/logo_light.svg') }}" 
                     alt="navbar brand" class="navbar-brand" height="20"/>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                </li>

                <!-- Menu berdasarkan role -->
                @if(Auth::user()->role_id == 1)
                    <!-- Jika role = 1 (Admin), tampilkan Dosen & Mahasiswa -->
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Base</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('dosenList') }}">
                                        <span class="sub-item">Dosen</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('mahasiswaList') }}">
                                        <span class="sub-item">Mahasiswa</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @elseif(Auth::user()->role_id == 2)
                    <!-- Jika role = 2 (Dosen), hanya tampilkan Mahasiswa -->
                    <li class="nav-item">
                        <a href="{{ route('mahasiswaList') }}">
                            <i class="fas fa-user-graduate"></i>
                            <p>Mahasiswa</p>
                        </a>
                    </li>
                @endif
  
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
