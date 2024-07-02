@extends('layouts.app')

@section('content')
 {{-- awal --}}
 <div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      
<div class="row">
  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
      <h3 class="font-weight-bold">TRANSAKSI</h3>
  </div>
  {{-- create --}}
<div class="col-md-8 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Peminjam Aset</h4>
  <form class="forms-sample" method="POST" action="{{route('peminjaman.update', $peminjaman->id)}}">
        @csrf
        @method('put')
        <div class="form-group row">
          <label for="nama" class="col-sm-3 col-form-label">NAMA PEMINJAM</label>
          <div class="col-sm-9">
            <input type="text" name="nama" class="form-control" id="nama" value="{{$peminjaman->nama}}" placeholder="nama jenis">
            @error('nama')
              <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="nama_barang" class="col-sm-3 col-form-label">NAMA BARANG</label>
          <div class="col-sm-9">
            <select class="form-control" id="nama_barang" name="inventaris_id">
              @foreach ($aset as $row)
              <option value="{{$row->id}}"   >{{$row->nama}}</option>
              @endforeach
            </select>
            @error('inventaris_id')
              <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="tanggal" class="col-sm-3 col-form-label">TANGGAL PINJAM</label>
          <div class="col-sm-9">
            <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{$peminjaman->tanggal}}" placeholder="tanggal">
            @error('tanggal')
              <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="jumlah" class="col-sm-3 col-form-label">JUMLAH PINJAM</label>
          <div class="col-sm-9">
            <input type="number" name="jumlah" class="form-control" id="jumlah" value="{{$peminjaman->jumlah}}" placeholder="jumlah">
            @error('jumlah')
              <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="keterangan" class="col-sm-3 col-form-label">KETERANGAN</label>
          <div class="col-sm-9">
            <input type="text" name="keterangan" class="form-control" id="keterangan" value="{{$peminjaman->keterangan}}" placeholder="keterangan">
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
    </div>
  </div>
</div>
{{-- awal --}}


@endsection

@section('script')

@endsection