<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ URL::to('adminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                alt="User Image">
        </div>
        <div class="info">
            <a href="{{ URL::to('dashboard') }}" class="d-block">Administrator</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ URL::to('dashboard') }}" class="nav-link {{ $navLink == 'dashboard' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ URL::to('dataijazah') }}"
                    class="nav-link {{ $navLink == 'dataijazah' ? 'active' : '' }}">
                    <i class="nav-icon fas  fa-file"></i>
                    <p>
                        Data Ijazah
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
