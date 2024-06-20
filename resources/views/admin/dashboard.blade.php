@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <h3 class="font-weight-bold">Dashboard</h3>
    {{-- <h6 class="font-weight-normal mb-0"><span class="text-primary">3 unread alerts!</span></h6> --}}
  </div>
</div>
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
              <h4 class="location font-weight-normal">SMA NEGERI 7 MAKASSAR</h4>
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
            <p class="mb-4">Total Pegawai</p>
            <p class="fs-30 mb-2">45</p>
            {{-- <p>10.00% (30 days)</p> --}}
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-dark-blue">
          <div class="card-body">
            <p class="mb-4">Total barang dipinjamkan</p>
            <p class="fs-30 mb-2">25</p>
            {{-- <p>22.00% (30 days)</p> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
        <div class="card card-light-blue">
          <div class="card-body">
            <p class="mb-4">Total jenis barang</p>
            <p class="fs-30 mb-2">10</p>
            {{-- <p>2.00% (30 days)</p> --}}
          </div>
        </div>
      </div>
      <div class="col-md-6 stretch-card transparent">
        <div class="card card-light-danger">
          <div class="card-body">
            <p class="mb-4">Total barang belum kembali</p>
            <p class="fs-30 mb-2">10</p>
            {{-- <p>0.22% (30 days)</p> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- <div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Dashboard</p>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              APLIKASI INVENTARIS
            </div>
            //
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
@endsection

@section('script')
<!-- Custom js for this page-->
<script src="{{ asset('./js/dashboard.js') }}"></script>
<script src="{{ asset('./js/Chart.roundedBarCharts.js') }}"></script>
<!-- End custom js for this page-->
@endsection