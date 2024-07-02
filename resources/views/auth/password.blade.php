<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{$title ?? 'Login'}}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('../../vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/logo-new.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-6 mx-auto">
             {{-- create --}}
{{-- <div class="col-md-8 grid-margin stretch-card"> --}}
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Update Password</h3>
        <form class="forms-sample" method="POST" action="{{route('password.update')}}">
          @csrf
          @method('put')
          <div class="form-group row">
            <label for="nra" class="col-sm-3 col-form-label">NRA</label>
            <div class="col-sm-9">
              <input type="text" name="nra" class="form-control" id="nra" value="{{$nra}}" readonly placeholder="nomor registrasi anggota">
              @error('nra')
                <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Old Password</label>
            <div class="col-sm-9">
              <input type="text" name="oldPassword" class="form-control" id="password" placeholder="Password">
              @error('oldPassword')
              <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">New Password</label>
            <div class="col-sm-9">
              <input type="password" name="password1" class="form-control" id="password" placeholder="Password">
              @error('password1')
              <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Konfirmasi New Password</label>
            <div class="col-sm-9">
              <input type="password" name="password1_confirmation" class="form-control" id="password" placeholder="Password">
              @error('password1_confirmation')
              <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
            </div>
          </div>
          <div class="float-right">
              <a type="button" href="{{route('home')}}" class="btn btn-light">cancel</a>
              <button type="submit" class="btn btn-primary mr-2">save</button>
          </div>
        </form>
      </div>
    </div>
  {{-- </div> --}}
{{-- /create --}}
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
