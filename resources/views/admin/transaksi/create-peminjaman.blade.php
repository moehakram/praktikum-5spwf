@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">INVENTARIS</h3>
    </div>
    {{-- create --}}
<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Peminjaman Inventaris</h4>
    <form class="forms-sample" method="POST" action="{{route('peminjaman.store')}}">
          @csrf
          <div class="form-group row">
            <label for="nama_peminjam" class="col-sm-3 col-form-label">NAMA PEMINJAM</label>
            <div class="col-sm-9">
              <input type="text" name="nama_peminjam" class="form-control" id="nama_peminjam" value="{{old('nama_peminjam')}}" placeholder="nama jenis">
              @error('nama_peminjam')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="nama_barang" class="col-sm-3 col-form-label">NAMA BARANG</label>
            <div class="col-sm-9">
              <select class="form-control" id="nama_barang" name="inventaris_id">
                <option value="">--select nama barang--</option>
                @foreach ($inventaris as $item)
                <option value="{{$item->id}}">{{$item->nama}}</option>
                @endforeach
              </select>
              @error('inventaris_id')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_pinjam" class="col-sm-3 col-form-label">TANGGAL PINJAM</label>
            <div class="col-sm-9">
              <input type="date" name="tgl_pinjam" class="form-control" id="tgl_pinjam" value="{{old('tgl_pinjam')}}" placeholder="tgl_pinjam">
              @error('tgl_pinjam')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="jum_pinjam" class="col-sm-3 col-form-label">JUMLAH PINJAM</label>
            <div class="col-sm-9">
              <input type="number" name="jum_pinjam" class="form-control" id="jum_pinjam" value="{{old('jum_pinjam')}}" placeholder="jumlah pinjam">
              @error('jum_pinjam')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="keterangan" class="col-sm-3 col-form-label">KETERANGAN</label>
            <div class="col-sm-9">
              <input type="text" name="keterangan" class="form-control" id="keterangan" value="{{old('keterangan')}}" placeholder="kondisi barang">
              @error('keterangan')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="float-right">
              <a href="{{route('peminjaman.index')}}" class="btn btn-light">cancel</a>
              <button type="submit" class="btn btn-primary mr-2">save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
{{-- /create --}}
</div>
@endsection

@section('script')

@endsection