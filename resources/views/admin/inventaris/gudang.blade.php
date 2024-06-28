@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">INVENTARIS</h3>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Gudang Aset</p>
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('ruang.create')}}" class="btn btn-primary float-right mb-3">tambah</a>
                        <div class="table-responsive">
                            <!-- <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search"> -->
                            <!-- TBL -->
                            <table id="dataGudang" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            NO.
                                        </th>
                                        <th>
                                            Nama Ruang
                                        </th>
                                        <th>
                                            Keterangan
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($gudang as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}.</td>
                                        <td>{{$item->nama_ruang}}</td>
                                        <td>{{$item->keterangan}}</td>
                                        <td>
                                            <a href="{{route('ruang.edit', $item->id)}}" class="btn btn-info btn-rounded btn-icon-text"><i class="ti-pencil btn-icon-prepend"></i>ubah</a>
                                            <a href="{{route('ruang.destroy', $item->id)}}" class="btn btn-danger btn-rounded btn-icon-text"><i class="ti-trash btn-icon-prepend"></i>Hapus</a>
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
    	
        $('#dataGudang').DataTable();

    });
</script>
@endsection