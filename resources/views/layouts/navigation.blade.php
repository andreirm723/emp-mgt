<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
        <img src="{{ asset('images/cute.jpg') }}" alt="AdminLTE Logo"
                 class="p-6 brand-image img-circle elevation-5"
                 style="opacity: .8  ">
            <span class="brand-text font-weight-light "  style="color:white">Andrei R. Manansala</span>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-link"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>
            

            <li class="nav-item">
                <a href="{{ route('employee.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-link"></i>
                    <p>
                        {{ __('Employee Management') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link">
                    <i class="nav-icon fas fa-link"></i>
                    <p>
                        {{ __('System Management') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('employee.show') }}" class="nav-link">
                    <i class="nav-icon fas fa-link"></i>
                    <p>
                        User Management
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                </li>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->