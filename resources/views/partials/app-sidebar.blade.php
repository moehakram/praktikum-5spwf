<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Inventaris</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('inventaris.index')}}">Inventaris</a></li>
          {{-- <li class="nav-item"> <a class="nav-link" href="{{route('jenis.index')}}">Jenis</a></li> --}}
          <li class="nav-item"> <a class="nav-link" href="{{route('ruang.index')}}">Ruang</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Transaksi</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{route('peminjaman.index')}}">Peminjaman</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('pengembalian.index')}}">Pengembalian</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('laporan')}}">Laporan</a></li>
        </ul>
      </div>
    </li>
    @haspermission('pagePegawai')
      <li class="nav-item">
        <a class="nav-link" href="{{route('pegawai.index')}}">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Pegawai</span>
        </a>
      </li>
    @endhaspermission
  </ul>
</nav>