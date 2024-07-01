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
                            <table id="dataPengembalian" class="table table-bordered display">
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
                                            Tanggal Kembali
                                        </th>
                                        <th>
                                            Jumlah Kembali
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
                                    @foreach ($pengembalians as $pengembalian)
                                    <tr>
                                        <td>
                                            {{$pengembalian->peminjaman->inventaris_id}}
                                        </td>
                                        <td>
                                            {{$pengembalian->peminjaman->inventaris->nama}}
                                        </td>
                                        <td>
                                            {{$pengembalian->peminjaman->nama}}
                                        </td>
                                        </td>
                                        <td>
                                            {{$pengembalian->tanggal}}
                                        </td>
                                        <td>
                                            {{$pengembalian->jumlah}}
                                        </td>
                                        <td>
                                            {{$pengembalian->keterangan}}
                                        </td>  
                                        @role('admin') 
                                        <td>
                                            {{$pengembalian->pengurus->nama}}
                                        </td>
                                        @endrole
                                        <td>
                                            <a href="{{route('pengembalian.edit', $pengembalian->id)}}" class="btn btn-info btn-rounded btn-icon-text"><i class="ti-pencil btn-icon-prepend"></i>ubah</a>
                                            <a href="{{route('pengembalian.destroy', $pengembalian->id)}}" class="btn btn-danger btn-rounded btn-icon-text"><i class="ti-trash btn-icon-prepend"></i>Hapus</a>
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
    	
        $('#dataPengembalian').DataTable();

    });
</script>
@endsection