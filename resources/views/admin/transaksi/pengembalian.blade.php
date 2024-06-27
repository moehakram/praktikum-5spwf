@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">Pengembalian</h3>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Data Pengembalian</p>
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('pengembalian.create')}}" class="btn btn-primary float-right mb-3">tambah</a>
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
                                            Tanggal Kembali
                                        </th>
                                        <th>
                                            Jumlah Kembali
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
                                    @foreach ($pengembalians as $pengembalian)
                                    <tr>
                                        <td>
                                            {{$pengembalian->peminjaman->inventaris_id}}
                                        </td>
                                        <td>
                                            {{$pengembalian->peminjaman->inventaris->nama}}
                                        </td>
                                        <td>
                                            {{$pengembalian->peminjaman->nama_peminjam}}
                                        </td>
                                        </td>
                                        <td>
                                            {{$pengembalian->tgl_kembali}}
                                        </td>
                                        <td>
                                            {{$pengembalian->jum_kembali}}
                                        </td>
                                        <td>
                                            {{$pengembalian->keterangan}}
                                        </td>
                                        <td>
                                            {{$pengembalian->pegawai->name}}
                                        </td>
                                        <td>
                                            <a href="{{route('pengembalian.edit', $pengembalian->id)}}" class="btn btn-info btn-rounded btn-fw">Ubah</a>
                                            <a href="{{route('pengembalian.destroy', $pengembalian->id)}}" class="btn btn-danger btn-rounded btn-fw">Hapus</a>
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