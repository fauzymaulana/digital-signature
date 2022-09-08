<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ URL::to('/') }}" class="nav-link {{ $navLink == 'beranda' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ URL::to('verifikasi') }}"
                    class="nav-link {{ $navLink == 'verifikasi' ? 'active' : '' }}">
                    <i class="nav-icon fas  fa-check-square"></i>
                    <p>
                        Verifikasi
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ URL::to('tentang') }}" class="nav-link {{ $navLink == 'tentang' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-info-circle"></i>
                    <p>
                        Tentang
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ URl::to('bantuan') }}" class="nav-link {{ $navLink == 'bantuan' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-question-circle"></i>
                    <p>
                        Bantuan
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
