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
      <h4 class="card-title">Tambah Pengembalian Inventaris</h4>
  <form class="forms-sample" method="POST" action="{{route('pengembalian.store')}}">
        @csrf
      
      <div class="form-group row">
          <label for="nama" class="col-sm-3 col-form-label">NAMA PEMINJAM</label>
          <div class="col-sm-9">
              <select class="form-control" id="nama" name="peminjaman_id">
                <option value="" disabled selected>--select nama peminjam--</option>
                  @foreach ($peminjaman as $item)
                  <option value="{{$item->id}}">{{$item->nama}}</option>
                  @endforeach
              </select>
              @error('peminjaman_id')
              <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
          </div>
      </div>
        <div class="form-group row">
          <label for="inventaris_id" class="col-sm-3 col-form-label">NAMA BARANG</label>
          <div class="col-sm-9">
            <input type="text" name="inventaris_id" class="form-control" id="inventaris_id" value="" placeholder="nama barang" readonly>
            @error('inventaris_id')
              <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="form-group row">
          <label for="tanggal" class="col-sm-3 col-form-label">TANGGAL KEMBALI</label>
          <div class="col-sm-9">
            <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{old('tanggal')}}">
            @error('tanggal')
              <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="jumlah" class="col-sm-3 col-form-label">JUMLAH KEMBALI</label>
          <div class="col-sm-9">
            <input type="number" name="jumlah" class="form-control" id="jumlah" value="{{old('jumlah')}}" placeholder="jumlah kembali">
            @error('jumlah')
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
            <a href="{{route('pengembalian.index')}}" class="btn btn-light">cancel</a>
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
<script>
$(document).ready(function() {

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#nama').change(function() {
        let peminjamanId = $(this).val();
        
        if (peminjamanId) {
            $.ajax({
                url: '/getInventaris', // Ganti dengan endpoint yang sesuai
                type: 'POST',
                data: { peminjaman_id: peminjamanId},
                success: function(response) {
                    $('#inventaris_id').val(response.nama_barang);
                },
                error: function(xhr) {
                    console.log(xhr.responseText); // Untuk debug jika terjadi kesalahan
                }
            });
        } else {
            $('#inventaris_id').val(''); // Kosongkan input jika tidak ada peminjaman yang dipilih
        }
    });
});
</script>
@endsection