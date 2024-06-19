@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Advanced Table</p>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              APLIKASI INVENTARIS
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<!-- Custom js for this page-->
<script src="{{ asset('./js/dashboard.js') }}"></script>
<script src="{{ asset('./js/Chart.roundedBarCharts.js') }}"></script>
<!-- End custom js for this page-->
@endsection