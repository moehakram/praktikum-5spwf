<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="/"><img src="{{ asset('images/logo-new.png') }}" class="mr-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="/"><img src="{{ asset('images/logo-mini.svg') }}" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link">
          <img src="{{asset('images/faces/face12.jpg')}}" alt="profile" />
        </a>
      </li>
      <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="dropdown-item" href="/logout">
          <i class="ti-power-off text-primary"></i>
          Logout
        </a>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>