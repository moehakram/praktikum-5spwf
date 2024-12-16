<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item {{ Route::currentRouteNamed('home') ? 'active' : '' }}">
      <a class="nav-link" href="{{route('home')}}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item {{ (Request::is('inventaris', 'inventaris/*') ? 'active' : '') }}">
      <a class="nav-link" href="#">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Inventaris</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Transaksi</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="#">Peminjaman Aset</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Pengembalian Aset</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ Route::currentRouteNamed('laporan') ? 'active' : '' }}">
      <a class="nav-link" href="#">
        <i class="icon-bar-graph menu-icon"></i>
        <span class="menu-title">Laporan</span>
      </a>
    </li>
    @haspermission('pagePegawai')
    <li class="nav-item {{ Route::currentRouteNamed('organisasi.index') ? 'active' : '' }}">
      <a class="nav-link" href="{{route('organisasi.index')}}">
        <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">Organisasi</span>
      </a>
    </li>
    <li class="nav-item {{ Route::currentRouteNamed('pegawai.index') ? 'active' : '' }}">
      <a class="nav-link" href="{{route('pegawai.index')}}">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">Pegawai</span>
      </a>
    </li>
    @endhaspermission
  </ul>
</nav>