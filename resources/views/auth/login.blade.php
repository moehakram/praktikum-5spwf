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
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo text-center">
                  <img class="mb-2" src="{{ asset('images/logo-new.png') }}" alt="logo">
                  <h4>LOGIN APP INVENTARIS</h4>
              </div>
              
              @error('error')
                  <h6 class="font-weight-light text-danger">{{ $message }}</h6>
              @enderror
              <form class="pt-3" method="POST" action="{{ route('login') }}" autocomplete="off">
                  @csrf
                  <div class="form-group">
                      <input type="text" autocomplete="off" name="username" class="form-control form-control-lg" id="username" placeholder="username" required autofocus>
                  </div>
                  <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password" required>
                  </div>
                  <div class="mt-3">
                      <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                      <div class="form-check">
                          <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          <label class="form-check-label text-muted" for="remember">
                              Keep me signed in
                          </label>
                      </div>
                      @if (Route::has('password.request'))
                          <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>
                      @endif
                  </div>
              </form>
          </div>
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
