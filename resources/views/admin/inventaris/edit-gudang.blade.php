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
        <h4 class="card-title">Edit Gudang</h4>
    <form class="forms-sample" method="POST" action="{{route('ruang.update', $gudang->id)}}">
          @csrf
          @method('PUT')
          <div class="form-group row">
            <label for="nama_ruang" class="col-sm-3 col-form-label">NAMA RUANG</label>
            <div class="col-sm-9">
              <input type="text" name="nama_ruang" class="form-control" id="nama_ruang" value="{{$gudang->nama_ruang}}" placeholder="nama ruang">
              @error('nama_ruang')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="keterangan" class="col-sm-3 col-form-label">KETERANGAN</label>
            <div class="col-sm-9">
              <input type="text" name="keterangan" class="form-control" id="keterangan" value="{{$gudang->keterangan}}" placeholder="keterangan">
              @error('keterangan')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="float-right">
              <a href="{{route('ruang.index')}}" class="btn btn-light">clear</a>
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