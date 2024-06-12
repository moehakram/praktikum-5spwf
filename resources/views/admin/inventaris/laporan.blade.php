@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">Laporan</h3>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Laporan Inventaris</p>
                <div class="row">
                    <div class="col-12">
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
                                            Nama
                                        </th>
                                        <th>
                                            Kondisi
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            A011
                                        </td>
                                        <td>
                                            Komputer
                                        </td>
                                        <td>
                                            Baru
                                        </td>
                                        <td>
                                            30
                                        </td>
                                        <td>
                                            Elektronik
                                        </td>
                                        <td>
                                            12-06-2024
                                        </td>
                                        <td>
                                            Lab Komputer
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