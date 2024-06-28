@extends('layouts.app')

@section('content')
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
            <label for="nama_peminjam" class="col-sm-3 col-form-label">NAMA PEMINJAM</label>
            <div class="col-sm-9">
                <select class="form-control" id="nama_peminjam" name="peminjaman_id">
                  <option value="">--select nama peminjam--</option>
                    @foreach ($peminjaman as $item)
                    <option value="{{$item->id}}">{{$item->nama_peminjam}}</option>
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
            <label for="tgl_kembali" class="col-sm-3 col-form-label">TANGGAL KEMBALI</label>
            <div class="col-sm-9">
              <input type="date" name="tgl_kembali" class="form-control" id="tgl_kembali" value="{{old('tgl_kembali')}}" placeholder="tgl_kembali">
              @error('tgl_kembali')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="jum_kembali" class="col-sm-3 col-form-label">JUMLAH KEMBALI</label>
            <div class="col-sm-9">
              <input type="number" name="jum_kembali" class="form-control" id="jum_kembali" value="{{old('jum_kembali')}}" placeholder="jumlah kembali">
              @error('jum_kembali')
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
@endsection

@section('script')
<script>
$(document).ready(function() {

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#nama_peminjam').change(function() {
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