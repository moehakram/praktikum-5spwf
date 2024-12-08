@extends('layouts.app')

@section('content')
{{-- awal --}}
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Dashboard</h3>
          <h6 class="font-weight-normal mb-5" style="text-transform: uppercase">{{$organisasi}}</h6>
        </div>
      </div>
      {{-- isi  --}}
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card tale-bg">
            <div class="card-people mt-auto">
              <img src="{{asset('images/dashboard/people.svg')}}" alt="people">
              <div class="weather-info">
                <div class="d-flex">
                  {{-- <div>
                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                  </div> --}}
                  <div class="ml-2">
                    <h4 class="location font-weight-normal">APLIKASI INVENTARIS</h4>
                    {{-- <h6 class="font-weight-normal">//</h6> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin transparent">
          <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-tale">
                <div class="card-body">
                  <p class="mb-4">Total Pengurus Aset {{$organisasi ?? ''}}</p>
                  <p class="fs-30 mb-2">{{$tot_pegawai}}</p>
                  {{-- <p>10.00% (30 days)</p> --}}
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-dark-blue">
                <div class="card-body">
                  <p class="mb-4">Jumlah Aset {{$organisasi ?? ''}}</p>
                  <p class="fs-30 mb-2">{{$jumlah_aset}}</p>
                  {{-- <p>22.00% (30 days)</p> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-blue">
                <div class="card-body">
                  <p class="mb-4">Jumlah Organisasi</p>
                  <p class="fs-30 mb-2">{{$jumlah_organisasi}}</p>
                  {{-- <p>2.00% (30 days)</p> --}}
                </div>
              </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
              <div class="card card-light-danger">
                <div class="card-body">
                  <p class="mb-4">Jumlah Peminjam belum mengembalikan aset</p>
                  <p class="fs-30 mb-2">{{$tot_brg_belum_kembali}}</p>
                  {{-- <p>0.22% (30 days)</p> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- isi  --}}
    </div>
  </div>
</div>
{{-- akhir --}}
@endsection

@section('script')
<!-- Custom js for this page-->
<script src="{{ asset('./js/dashboard.js') }}"></script>
<script src="{{ asset('./js/Chart.roundedBarCharts.js') }}"></script>
<!-- End custom js for this page-->
@endsection