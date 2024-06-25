<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('path-to-your-logo.png') }}" alt="Meow Medic" />
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('admin.dashboard') }}">MM</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item dropdown {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard Karyawan</a></li>
                <li><a class="nav-link" href="{{ route('pengguna.dashboard') }}">Dashboard Pengguna</a></li>
            </ul>
        </li>
        <li class="menu-header">Diagnosis</li>
        <li class="{{ request()->is('admin/gejala*') ? 'active' : '' }}">
            <a href="{{ route('admin.gejala.index') }}" class="nav-link"><i
                    class="fas fa-plus-square"></i><span>Gejala</span></a>
        </li>
        <li class="{{ request()->is('admin/penyakit*') ? 'active' : '' }}">
            <a href="{{ route('admin.penyakit.index') }}" class="nav-link"><i
                    class="fas fa-medkit"></i><span>Penyakit</span></a>
        </li>
        <li class="{{ request()->is('admin/bp*') ? 'active' : '' }}">
            <a href="{{ route('admin.bp.index') }}" class="nav-link"><i class="fas fa-book"></i><span>Basis
                    Pengetahuan</span></a>
        </li>
        <li class="{{ request()->is('admin/diagnosa*') ? 'active' : '' }}">
            <a href="{{ route('admin.diagnosa.index') }}" class="nav-link"><i
                    class="fas fa-users"></i><span>Diagnosa</span></a>
        </li>
        <li class="menu-header">Support</li>
        <li class="{{ request()->is('admin/akun*') ? 'active' : '' }}">
            <a href="{{ route('admin.akun.index') }}" class="nav-link"><i class="fas fa-user"></i><span>Akun</span></a>
        </li>
        <li class="{{ request()->is('admin/pesan*') ? 'active' : '' }}">
            <a href="{{ route('admin.pesan.index') }}" class="nav-link"><i
                    class="fas fa-envelope"></i><span>Pesan</span></a>
        </li>
        <li>
            <a href="{{ route('logout') }}" class="nav-link"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
        </li>
    </ul>
</aside>
