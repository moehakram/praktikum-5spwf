@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">INVENTARIS</h3>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body ">
                <p class="card-title">Data Inventaris</p>
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-primary float-right mb-3">tambah</button>
                        <div class="table-responsive">
                            <!-- <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search"> -->
                            <!-- TBL -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            NO.
                                        </th>
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Kondisi
                                        </th>
                                        <th>
                                            Keterangan
                                        </th>
                                        <th>
                                            Stok
                                        </th>
                                        <th>
                                            Jenis
                                        </th>
                                        <th>
                                            Tanggal Register
                                        </th>
                                        <th>
                                            Ruang
                                        </th>
                                        <th>
                                            Foto
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($inventaris as $invent)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$invent->nama}}</td>
                                        <td>{{$invent->kondisi}}</td>
                                        <td>{{$invent->Keterangan}}</td>
                                        <td>{{$invent->stok}}</td>
                                        <td>{{$invent->jenis}}</td>
                                        <td>{{$invent->tgl_register}}</td>
                                        <td>{{$invent->ruang}}</td>
                                        <td>{{$invent->foto}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-rounded btn-fw">Ubah</button>
                                            <button type="button" class="btn btn-danger btn-rounded btn-fw">Hapus</button>
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