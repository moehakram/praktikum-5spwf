@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">ORGANISASI</h3>
    </div>
    {{-- create --}}
<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Organisasi</h4>
    <form class="forms-sample" method="POST" action="{{route('organisasi.store')}}">
          @csrf
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">NAMA ORGANISASI</label>
            <div class="col-sm-9">
              <input type="text" name="nama" class="form-control" id="nama" value="{{old('nama')}}" placeholder="nama organisasi">
              @error('nama')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi" class="col-sm-3 col-form-label">DESKRIPSI</label>
            <div class="col-sm-9">
              <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{old('deskripsi')}}" placeholder="deskripsi">
              @error('deskripsi')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="float-right">
              <a href="{{route('organisasi.index')}}" class="btn btn-light">clear</a>
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