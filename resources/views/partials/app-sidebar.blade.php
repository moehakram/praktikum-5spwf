<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/pegawai">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">Pegawai</span>
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
          <li class="nav-item"> <a class="nav-link" href="/inventaris/data">Inventaris</a></li>
          <li class="nav-item"> <a class="nav-link" href="/inventaris/jenis">Jenis</a></li>
          <li class="nav-item"> <a class="nav-link" href="/inventaris/ruang">Ruang</a></li>
          <li class="nav-item"> <a class="nav-link" href="/inventaris/laporan">Laporan</a></li>
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
          <li class="nav-item"><a class="nav-link" href="/transaksi/peminjaman">Peminjaman</a></li>
          <li class="nav-item"><a class="nav-link" href="/transaksi/pengembalian">Pengembalian</a></li>
          {{-- <li class="nav-item"><a class="nav-link" href="/transaksi/laporan">Laporan</a></li> --}}
        </ul>
      </div>
    </li>
  </ul>
</nav>