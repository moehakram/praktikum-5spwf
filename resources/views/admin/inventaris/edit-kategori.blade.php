@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">JENIS INVENTARIS</h3>
    </div>
    {{-- create --}}
<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Kategori</h4>
    <form class="forms-sample" method="POST" action="{{route('jenis.update', $jenis->id)}}">
          @csrf
          @method('PUT')
          <div class="form-group row">
            <label for="nama_jenis" class="col-sm-3 col-form-label">NAMA JENIS</label>
            <div class="col-sm-9">
              <input type="text" name="nama_jenis" class="form-control" id="nama_jenis" value="{{$jenis->nama_jenis}}" placeholder="nama jenis">
              @error('nama_jenis')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="keterangan" class="col-sm-3 col-form-label">KETERANGAN</label>
            <div class="col-sm-9">
              <input type="text" name="keterangan" class="form-control" id="keterangan" value="{{$jenis->keterangan}}" placeholder="keterangan">
              @error('keterangan')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="float-right">
              <a href="{{route('jenis.index')}}" class="btn btn-light">clear</a>
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