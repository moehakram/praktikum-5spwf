@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">PEGAWAI</h3>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Data Pegawai</p>
                <div class="row">
                    <div class="col-12">
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
                                            NAME
                                        </th>
                                        <th>
                                            NIP
                                        </th>
                                        <th>
                                            ALAMAT
                                        </th>
                                        <th>
                                            FOTO
                                        </th>
                                        <th>
                                            AKSI
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Akram
                                        </td>
                                        <td>
                                            00103938
                                        </td>
                                        <td>
                                            Perintis 7
                                        </td>
                                        <td>
                                            foto
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