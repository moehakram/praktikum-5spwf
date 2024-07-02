@extends('layouts.app')

@section('content')
{{-- awal --}}
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">PEGAWAI</h3>
        </div>
        {{-- create --}}
       <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Pegawai</h4>
            <form class="forms-sample" method="POST" action="{{route('pegawai.update', $user->nra)}}">
              @csrf
              @method('put')
              <div class="form-group row">
                <label for="nra" class="col-sm-3 col-form-label">NRA</label>
                <div class="col-sm-9">
                  <input type="text" name="nra" class="form-control" id="nra" value="{{$user->nra}}" readonly placeholder="nomor registrasi anggota">
                  @error('nra')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="organisasi" class="col-sm-3 col-form-label">ORGANISASI</label>
                <div class="col-sm-9">
                  <select class="form-control" id="organisasi" name="organisasi">
                    <option value="">--select nama organisasi--</option>
                    @foreach ($organisasi as $item)
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endforeach
                  </select>
                  @error('organisasi')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">NAMA</label>
                <div class="col-sm-9">
                  <input type="text" name="nama" class="form-control" id="nama" value="{{$user->nama}}" placeholder="nama">
                  @error('name')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">EMAIL</label>
                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}" placeholder="Email">
                  @error('email')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="phone_number" class="col-sm-3 col-form-label">Nomor Telepon</label>
                <div class="col-sm-9">
                  <input type="number" name="phone_number" class="form-control" id="phone_number" value="{{$user->phone_number}}" placeholder="nomor telepon">
                  @error('phone_number')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">ALAMAT</label>
                <div class="col-sm-9">
                  <input type="text" name="alamat" class="form-control" id="alamat" value="{{$user->alamat}}" placeholder="alamat">
                  @error('alamat')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                </div>
              </div>
              <div class="float-right">
                <a href="{{route('pegawai.index')}}" class="btn btn-light">cancel</a>
                  <button type="submit" class="btn btn-primary mr-2">save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- awal --}}


@endsection

@section('script')

@endsection