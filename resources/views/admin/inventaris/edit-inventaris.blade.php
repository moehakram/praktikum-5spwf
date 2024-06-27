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
        <h4 class="card-title">Ubah Barang</h4>
        <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('inventaris.update', $inventaris->id)}}">
          @csrf
          @method('put')
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">NAMA BARANG</label>
            <div class="col-sm-9">
              <input type="text" name="name" class="form-control" id="nama" value="{{$inventaris->nama}}" placeholder="nama">
              @error('name')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="kondisi" class="col-sm-3 col-form-label">KONDISI</label>
            <div class="col-sm-9">
              <input type="text" name="kondisi" class="form-control" id="kondisi" value="{{$inventaris->kondisi}}" placeholder="kondisi">
              @error('kondisi')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="keterangan" class="col-sm-3 col-form-label">KETERANGAN</label>
            <div class="col-sm-9">
              <input type="text" name="keterangan" class="form-control" id="keterangan" value="{{$inventaris->keterangan}}" placeholder="keterangan">
              @error('keterangan')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="stok" class="col-sm-3 col-form-label">STOK</label>
            <div class="col-sm-9">
              <input type="number" name="stok" class="form-control" id="stok" value="{{$inventaris->stok}}" placeholder="stok">
              @error('stok')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="jenis" class="col-sm-3 col-form-label">JENIS</label>
            <div class="col-sm-9">
              <select class="form-control" id="jenis" name="jenis">
                @foreach ($jenis as $item)
                <option value="{{$item->nama_jenis}}" @if($item->nama_jenis == $inventaris->nama_jenis) selected @endif>{{$item->nama_jenis}}</option>
               @endforeach
              </select>
              @error('jenis')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="ruang" class="col-sm-3 col-form-label">RUANG</label>
            <div class="col-sm-9">
              <select class="form-control" id="ruang" name="ruang">
                @foreach ($ruang as $item)
                <option value="{{$item->nama_ruang}}" @if($item->nama_ruang == $inventaris->nama_ruang) selected @endif>{{$item->nama_ruang}}</option>
                @endforeach
              </select>
              @error('ruang')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">FOTO</label>
            <div class="col-sm-9">
              <input type="file" name="foto" class="form-control" accept="image/*" id="foto" placeholder="foto">
              @error('foto')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="float-right">
              <a href="{{route('inventaris.index')}}" class="btn btn-light">cancel</a>
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