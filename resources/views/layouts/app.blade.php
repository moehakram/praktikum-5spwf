<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="/viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title ?? 'APLIKASI INVENTARIS' }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('./vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('./vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('./vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('./vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('./vendors/ti-icons/css/themify-icons.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/js/select.dataTables.min.css') }}"> --}}
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('./css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('./images/logo-new.png') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    @yield('style')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/app-navbar.blade.php -->
       @include('partials/app-navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/app-sidebar.blade.php -->
            @include('partials/app-sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                  @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/app-footer.blade.php -->
               @include('partials/app-footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
<script src="{{ asset('./vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
{{-- <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script> --}}
{{-- <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script> --}}
{{-- <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script> --}}
{{-- <script src="{{ asset('js/dataTables.select.min.js') }}"></script> --}}

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('./js/off-canvas.js') }}"></script>
<script src="{{ asset('./js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('./js/template.js') }}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<!-- endinject -->
@yield('script')


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session()->has('alert'))
    <script>
        const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
          }
          });
          Toast.fire({
            icon: "{{ session('alert')}}",
            title: "{{ session('message')}}"
          });
    </script>
@endif

</body>

</html>