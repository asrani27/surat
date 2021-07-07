
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
    <a href="/home/superadmin" class="nav-link {{ Request::is('home/superadmin*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>
        Beranda
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="/superadmin/jabatan" class="nav-link {{ Request::is('superadmin/jabatan') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Jabatan
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="/superadmin/pegawai" class="nav-link {{ Request::is('superadmin/pegawai') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>
        Pegawai
        </p>
    </a>
    </li>
    
    <li class="nav-item">
    <a href="/superadmin/kpi" class="nav-link {{ Request::is('superadmin/kpi') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>
        KPI
        </p>
    </a>
    </li>
    
    <li class="nav-item">
    <a href="/superadmin/evaluasi" class="nav-link {{ Request::is('superadmin/evaluasi') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>
        Evaluasi Pegawai
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="/superadmin/suratmasuk" class="nav-link {{ Request::is('superadmin/suratmasuk') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Surat Masuk
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="/superadmin/surattugas" class="nav-link {{ Request::is('superadmin/surattugas') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Surat Tugas
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="/superadmin/suratizin" class="nav-link {{ Request::is('superadmin/suratizin') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Surat perizinan
        </p>
    </a>
    </li>
    
    <li class="nav-item">
    <a href="/superadmin/suratpinjam" class="nav-link {{ Request::is('superadmin/suratpinjam') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Surat peminjaman
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="/logout" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
        Logout
        </p>
    </a>
    </li>
</ul>
</nav>