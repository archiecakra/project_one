<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/blockui.min.js') }}"></script>
    <script src="{{ url('assets/js/ripple.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ url('assets/js/visualization/d3/d3.min.js') }}"></script>
    <script src="{{ url('assets/js/visualization/d3/d3_tooltip.js') }}"></script>
    <script src="{{ url('assets/js/forms/styling/switchery.min.js') }}"></script>
    <script src="{{ url('assets/js/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ url('assets/js/moment.min.js') }}"></script>
    <script src="{{ url('assets/js/daterangepicker.js') }}"></script>

    <script src="{{ url('assets/js/app.js') }}"></script>
    <script src="{{ url('assets/js/dashboard.js') }}"></script>
    <!-- /theme JS files -->

  </head>

  <body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-light navbar-static">

      <!-- Header with logos -->
      <div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center">
        <div class="navbar-brand navbar-brand-md">
          <a href="index.html" class="d-inline-block">
            <img src="../../../../global_assets/images/logo_light.png" alt="">
          </a>
        </div>
        
        <div class="navbar-brand navbar-brand-xs">
          <a href="index.html" class="d-inline-block">
            <img src="../../../../global_assets/images/logo_icon_light.png" alt="">
          </a>
        </div>
      </div>
      <!-- /header with logos -->
    

      <!-- Mobile controls -->
      <div class="d-flex flex-1 d-md-none">
        <div class="navbar-brand mr-auto">
          <a href="index.html" class="d-inline-block">
            <img src="../../../../global_assets/images/logo_dark.png" alt="">
          </a>
        </div>	

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
          <i class="icon-tree5"></i>
        </button>

        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
          <i class="icon-paragraph-justify3"></i>
        </button>
      </div>
      <!-- /mobile controls -->


      <!-- Navbar content -->
      <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
              <i class="icon-paragraph-justify3"></i>
            </a>
          </li>
        </ul>

        <ul class="navbar-nav">

          <li class="nav-item dropdown dropdown-user">
            <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
              <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" alt="">
              <span>Victoria</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
              <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
              <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
              <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-indigo-400 ml-auto">58</span></a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
              <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
      <!-- /navbar content -->
      
    </div>
    <!-- /main navbar -->

            
    <!-- Page content -->
    <div class="page-content">

      <!-- Main sidebar -->
      <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
          <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
          </a>
          Navigation
          <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
          </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">
          
          <!-- User menu -->
          <div class="sidebar-user-material">
            <div class="sidebar-user-material-body">
              <div class="card-body text-center">
                <a href="#">
                  <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                </a>
                <h6 class="mb-0 text-white text-shadow-dark">Victoria Baker</h6>
                <span class="font-size-sm text-white text-shadow-dark">Santa Ana, CA</span>
              </div>
            </div>

          </div>
          <!-- /user menu -->
    
          
          <!-- Main navigation -->
          <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

              <!-- Main -->
              <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
              <li class="nav-item">
                <a href="{{ route('index') }}" class="nav-link active">
                  <i class="icon-home4"></i>
                  <span>
                    Dashboard
                    <span class="d-block font-weight-normal opacity-50">No active orders</span>
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.create') }}" class="nav-link">
                  <i class="icon-width"></i> <span>Tambah Pengguna</span>
                </a>
              </li>
              <!-- /main -->
                
            </ul>
          </div>
          <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->
        
      </div>
      <!-- /main sidebar -->


      <!-- Main content -->
      <div class="content-wrapper">

        <!-- Page header -->
        @yield('header')
        <!-- /page header -->


        <!-- Content area -->
        <div class="content pt-0">

          <!-- Dashboard content -->
          @yield('content')
          <!-- /dashboard content -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
          <div class="text-center d-lg-none w-100">
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
              <i class="icon-unfold mr-2"></i>
              Footer
            </button>
          </div>

          <div class="navbar-collapse collapse" id="navbar-footer">
            <span class="navbar-text">
              &copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
            </span>
          </div>
        </div>
        <!-- /footer -->

      </div>
      <!-- /main content -->

    </div>
    <!-- /page content -->

  </body>

</html>