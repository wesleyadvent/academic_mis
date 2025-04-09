<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="#" class="logo">
<<<<<<< HEAD
                <img
                    src="{{ asset ('assets/img/kaiadmin/logo_light.svg') }}"
                    alt="navbar brand"
                    class="navbar-brand"
                    height="20"
                />
=======
                <img src="{{ asset('assets/img/kaiadmin/logo_light.svg') }}" 
                     alt="navbar brand" class="navbar-brand" height="20"/>
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
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
<<<<<<< HEAD
=======

>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
<<<<<<< HEAD
                    <a
                        data-bs-toggle="collapse"
                        href="#dashboard"
                        class="collapsed"
                        aria-expanded="false"
                    >
=======
                    <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                </li>
<<<<<<< HEAD
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Master</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            @if(Auth::user()->role_id == 1)
=======

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
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
                                <li>
                                    <a href="{{ route('dosenList') }}">
                                        <span class="sub-item">Dosen</span>
                                    </a>
                                </li>
<<<<<<< HEAD
                            @endif

                                @if(Auth::user()->role_id == 2)
                                    <li>
                                        <a href="{{ route('mahasiswaList') }}">
                                            <span class="sub-item">Mahasiswa</span>
                                        </a>
                                    </li>
                                @endif
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#forms">
                        <i class="fas fa-pen-square"></i>
                        <p>Forms</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="forms/forms.html">
                                    <span class="sub-item">Basic Form</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#tables">
                        <i class="fas fa-table"></i>
                        <p>Tables</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="tables/tables.html">
                                    <span class="sub-item">Basic Table</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">Datatables</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
=======
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
  
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
