@extends('layouts.app')

@section('content')
 {{-- awal --}}
 <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Peminjaman</h3>
            </div>
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Data Peminjaman</p>
                        <div class="row">
                            <div class="col-12">
                                <a href="{{route('peminjaman.create')}}" class="btn btn-primary float-right mb-3">tambah</a>
                                <div class="table-responsive">
                                    <!-- <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search"> -->
                                    <!-- TBL -->
                                    <table id="dataPeminjaman" class="table table-bordered display">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Kode Aset
                                                </th>
                                                <th>
                                                    Nama Aset
                                                </th>
                                                <th>
                                                    Nama Peminjam
                                                </th>
                                                <th>
                                                    Tanggal Pinjam
                                                </th>
                                                <th>
                                                    Jumlah Pinjam
                                                </th>
                                                <th>
                                                    Keterangan
                                                </th>
                                                @role('admin')
                                                <th>
                                                    Penanggung Jawab
                                                </th>
                                                @endrole
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($peminjamans as $peminjaman)
                                            <tr>
                                                <td>
                                                    {{$peminjaman->inventaris->id}}
                                                </td>
                                                <td>
                                                    {{$peminjaman->inventaris->nama}}
                                                </td>
                                                <td>
                                                    {{$peminjaman->nama}}
                                                </td>
                                                <td>
                                                    {{$peminjaman->tanggal}}
                                                </td>
                                                <td>
                                                    {{$peminjaman->jumlah}}
                                                </td>
                                                <td>
                                                    {{$peminjaman->keterangan}}
                                                </td>
                                                @role('admin')
                                                <td>
                                                    {{$peminjaman->pengurus->nama}}
                                                </td>
                                                @endrole
                                                <td>
                                                    <a href="{{route('peminjaman.edit', $peminjaman->id)}}" class="btn btn-info btn-rounded btn-icon-text"><i class="ti-pencil btn-icon-prepend"></i>Ubah</a>
                                                    <a href="{{route('peminjaman.destroy', $peminjaman->id)}}" class="btn btn-danger btn-rounded btn-icon-text"><i class="ti-trash btn-icon-prepend"></i>Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- END-TBL -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  {{-- awal --}}


@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
    	
        $('#dataPeminjaman').DataTable();

    });
</script>
@endsection