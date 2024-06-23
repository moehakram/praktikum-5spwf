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
                        <a type="button" href="{{route('pegawai.create')}}" class="btn btn-primary float-right mb-3">tambah</a>
                        <div class="table-responsive">
                            {{-- <input type="text" class="form-control mb-3" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search"> --}}
                            <!-- TBL -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr><th>
                                        NIP
                                    </th>
                                        <th>
                                            NAME
                                        </th>
                                        
                                        <th>
                                            EMAIL
                                        </th>
                                        <th>
                                            Telepon
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
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->nip }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone_number }}</td>
                                        <td>{{ $user->alamat }}</td>
                                        <td>
                                            <a type="button" href="{{route('pegawai.edit', $user->nip )}}" class="btn btn-info btn-rounded btn-fw">Ubah</a>
                                            <a type="button" href="{{route('pegawai.destroy', $user->id )}}" class="btn btn-danger btn-rounded btn-fw">Hapus</a>
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