
<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU UTAMA</li>
    
    @if (Auth::user()->hasRole('superadmin'))
        
    <li class="{{ (request()->is('superadmin')) ? 'active' : '' }}"><a href="/superadmin"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
    
    <li class="header">DATA UTAMA</li>
    
    
    <li class="{{ (request()->is('superadmin/pegawai*')) ? 'active' : '' }}"><a href="/superadmin/pegawai"><i class="fa fa-folder"></i> <span>Data Pegawai</span></a></li>
    <li class="{{ (request()->is('superadmin/skp*')) ? 'active' : '' }}"><a href="/superadmin/skp"><i class="fa fa-folder"></i> <span>Target SKP Pegawai</span></a></li>
    <li class="{{ (request()->is('superadmin/realisasi*')) ? 'active' : '' }}"><a href="/superadmin/realisasi"><i class="fa fa-folder"></i> <span>Realisasi SKP Pegawai</span></a></li>

    <li class="header">DATA PENILAIAN</li>
    <li class="{{ (request()->is('superadmin/penilaian/penilai*')) ? 'active' : '' }}"><a href="/superadmin/penilaian/penilai"><i class="fa fa-folder"></i> <span>Pejabat Penilai</span></a></li>
    <li class="{{ (request()->is('superadmin/penilaian/skp*')) ? 'active' : '' }}"><a href="/superadmin/penilaian/skp"><i class="fa fa-folder"></i> <span>Penilaian SKP</span></a></li>
    <li class="{{ (request()->is('superadmin/penilaian/perilaku*')) ? 'active' : '' }}"><a href="/superadmin/penilaian/perilaku"><i class="fa fa-folder"></i> <span>Penilaian Perilaku</span></a></li>
    <li class="{{ (request()->is('superadmin/penilaian/kinerja*')) ? 'active' : '' }}"><a href="/superadmin/penilaian/kinerja"><i class="fa fa-folder"></i> <span>Penilaian Kinerja</span></a></li>
    
    <li class="header">DATA LAPORAN</li>
    <li class="{{ (request()->is('superadmin/laporan*')) ? 'active' : '' }}"><a href="/superadmin/laporan"><i class="fa fa-folder"></i> <span>Laporan</span></a></li>
    
    {{-- <li class="{{ (request()->is('superadmin/gp*')) ? 'active' : '' }}"><a href="/superadmin/gp"><i class="fa fa-key"></i> <span>Ganti Pass</span></a></li> --}}
    <li><a href="/logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
    @else
        
    <li class="{{ (request()->is('pemohon')) ? 'active' : '' }}"><a href="/pemohon"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li class="{{ (request()->is('pemohon/profil*')) ? 'active' : '' }}"><a href="/pemohon/profil"><i class="fa fa-user"></i> <span>Profil</span></a></li>
    {{-- <li class="{{ (request()->is('pemohon/daftar-layanan*')) ? 'active' : '' }}"><a href="/pemohon/daftar-layanan"><i class="fa fa-list"></i> <span>Daftar Layanan</span></a></li> --}}
    @endif
    </ul>
    <!-- /.sidebar-menu -->
</section>