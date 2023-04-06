<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/admin" class="brand-link">
        <img src="{{ asset('/assets/img/logo upr.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Perpustakaan UPR</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">MENU</li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ $page == 'dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle nav-icon"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelola-menu" class="nav-link {{ $page == 'kelola-menu' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle nav-icon"></i>
                        <p>
                            Kelola Menu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelola-pengumuman" class="nav-link {{ $page == 'kelola-pengumuman' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle nav-icon"></i>
                        <p>
                            Kelola Pengumuman
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelola-berita" class="nav-link {{ $page == 'kelola-berita' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle nav-icon"></i>
                        <p>
                            Kelola Berita
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelola-agenda" class="nav-link {{ $page == 'kelola-agenda' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle nav-icon"></i>
                        <p>
                            Kelola Agenda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelola-galeri" class="nav-link {{ $page == 'kelola-galeri' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle nav-icon"></i>
                        <p>
                            Kelola Galeri
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelola-sejarah" class="nav-link {{ $page == 'kelola-sejarah' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle nav-icon"></i>
                        <p>
                            Kelola Sejarah
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelola-tim-manajemen" class="nav-link {{ $page == 'kelola-tim-manajemen' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle nav-icon"></i>
                        <p>
                            Kelola Tim Manajemen
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelola-staf" class="nav-link {{ $page == 'kelola-staf' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle nav-icon"></i>
                        <p>
                            Kelola Staf Perpustakaan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelola-jejaring" class="nav-link {{ $page == 'kelola-jejaring' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle nav-icon"></i>
                        <p>
                            Kelola Jejaring
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/kelola-faq" class="nav-link {{ $page == 'kelola-faq' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle nav-icon"></i>
                        <p>
                            Kelola FAQ
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
