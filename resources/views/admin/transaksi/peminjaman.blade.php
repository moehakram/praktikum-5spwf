@extends('layouts.app')

@section('content')
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
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            Id Inventaris
                                        </th>
                                        <th>
                                            Nama Barang
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
                                        <th>
                                            Pegawai
                                        </th>
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
                                            {{$peminjaman->nama_peminjam}}
                                        </td>
                                        <td>
                                            {{$peminjaman->tgl_pinjam}}
                                        </td>
                                        <td>
                                            {{$peminjaman->jum_pinjam}}
                                        </td>
                                        <td>
                                            {{$peminjaman->keterangan}}
                                        </td>
                                        <td>
                                            {{$peminjaman->pegawai->name}}
                                        </td>
                                        <td>
                                            <a href="{{route('peminjaman.edit', $peminjaman->id)}}" class="btn btn-info btn-rounded btn-fw">Ubah</a>
                                            <a href="{{route('peminjaman.destroy', $peminjaman->id)}}" class="btn btn-danger btn-rounded btn-fw">Hapus</a>
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
@endsection

@section('script')

@endsection