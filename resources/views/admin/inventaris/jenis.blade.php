@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">JENIS</h3>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Data Jenis</p>
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
                                            Id Jenis
                                        </th>
                                        <th>
                                            Nama Jenis Barang
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
                                    <tr>
                                        <td>
                                            J0001
                                        </td>
                                        <td>
                                            Non-Elektronik
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-rounded btn-fw">Ubah</button>
                                            <button type="button" class="btn btn-danger btn-rounded btn-fw">Hapus</button>
                                        </td>
                                    </tr>
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