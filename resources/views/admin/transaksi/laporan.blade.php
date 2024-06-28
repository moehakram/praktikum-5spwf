@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">Laporan</h3>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Laporan Transaksi</p>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <!-- <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search"> -->
                            <!-- TBL -->
                            <table id="laporan" class="table table-bordered">
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
                                            Tanggal Kembali
                                        </th>
                                        <th>
                                            Jumlah Pinjam
                                        </th>
                                        <th>
                                            Jumlah Kembali
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($peminjaman as $item)
                                    <tr>
                                        <td>
                                            {{$item->inventaris->id}}
                                        </td>
                                        <td>
                                            {{$item->inventaris->nama}}
                                        </td>
                                        <td>
                                            {{$item->nama_peminjam}}
                                        </td>
                                        <td>
                                            {{$item->tgl_pinjam}}
                                        </td>
                                        <td>
                                            {{$item->pengembalian->tgl_kembali ?? 'none'}}
                                        </td>
                                        <td>
                                            {{$item->jum_pinjam}}
                                        </td>
                                        <td>
                                            {{$item->pengembalian->jum_kembali ?? 'none'}}
                                        </td>
                                        <td>
                                            @if ($item->status === 0)
                                                {{'Sudah dikembalikan'}}
                                            @else
                                            {{'Belum dikembalikan'}}
                                            @endif
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
    	
        $('#laporan').DataTable();

    });
</script>
@endsection