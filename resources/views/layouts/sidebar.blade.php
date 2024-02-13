<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link px-0">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text fw-bold">NTE Telkom</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column justify-content-between" data-widget="treeview" role="menu"
                data-accordion="false">
                <div>
                    <li class="nav-header fw-bold">Main Menu</li>

                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    <li class="nav-item">
                        <a href="/data-nte" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                NTE Telkomsel
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/data-all" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                All Type
                            </p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="/data-alert" class="nav-link">
                            <i class="nav-icon fas fa-bell"></i>
                            <p>
                                Alert R5 TSEL
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/data-psb" class="nav-link">
                            <i class="nav-icon fas fa-square-plus"></i>
                            <p>
                                PSB PASANG BARU
                            </p>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="/data-kontrak" class="nav-link">
                            <i class="nav-icon fas fa-address-book"></i>
                            <p>
                                Kontrak Alker Salker
                            </p>
                        </a>
                    </li>
                </div>

                <div>
                    <li class="nav-item">
                        <a href="/kelola-admin" class="nav-link">
                            <i class="nav-icon fas fa-user-tie"></i>
                            <p>
                                Kelola Admin
                            </p>
                        </a>
                    </li>
                    <li class="nav-item logout">
                        <a href="/logout" class="nav-link">
                            <i class="nav-icon fas bi-box-arrow-right"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                </div>

            </ul>
        </nav>
        <!-- End Sidebar Menu -->
    </div>
    <!-- /.sidebar -->
</aside>