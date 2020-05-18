
<!doctype html>
<html lang="en">

<!-- Mirrored from dashkit.goodthemes.co/profile-files.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2019 13:14:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Yusuf Kaka">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="assets/libs/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="assets/libs/highlight.js/styles/vs2015.css">

    <!-- Map -->
    <link href='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->

    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">

    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.css/latest/css/toastr.min.css"> -->



    <style>body { display: none; }</style>


    <title>Kaka_admin</title>
  </head>
  <body>

    <!-- MODALS
    ================================================== -->
    <!-- Modal: Demo -->
    <div class="modal fade fixed-right" id="modalDemo" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <form class="modal-content" id="demoForm">
          <div class="modal-body">

            <!-- Close -->
            <a class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>

            <div class="text-center">
              <img src="assets/img/illustrations/designer-life.svg" alt="..." class="img-fluid mb-3">
            </div>

            <h2 class="text-center mb-2">
              Make Dashkit Your Own
            </h2>

            <p class="text-center mb-4">
              Set preferences that will be cookied for your live preview demonstration.
            </p>

            <hr class="mb-4">

            <h4 class="mb-1">
              Color Scheme
            </h4>

            <p class="small text-muted mb-3">
              Overall light or dark presentation.
            </p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="colorScheme" id="colorSchemeLight" value="light" checked> <i class="fe fe-sun mr-2"></i> Light Mode
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="colorScheme" id="colorSchemeDark" value="dark"> <i class="fe fe-moon mr-2"></i> Dark Mode
              </label>
            </div>

            <h4 class="mb-1">
              Navigation Position
            </h4>

            <p class="small text-muted mb-3">
              Select the primary navigation paradigm for your app.
            </p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="navPosition" id="navPositionSidenav" value="sidenav" checked> Sidenav
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navPosition" id="navPositionTopnav" value="topnav"> Topnav
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navPosition" id="navPositionCombo" value="combo"> Combo
              </label>
            </div>

            <div class="collapse show" id="sidebarSizeContainer">

              <h4 class="mb-1">
                Sidenav Sizing <span class="badge badge-soft-primary">New</span>
              </h4>

              <p class="small text-muted mb-3">
                Standard navigation sizing or minified icons with dropdowns.
              </p>

              <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
                <label class="btn btn-white active col">
                  <input type="radio" name="sidebarSize" id="sidebarSizeBase" value="base" checked> Fullsize
                </label>
                <label class="btn btn-white col ml-2">
                  <input type="radio" name="sidebarSize" id="sidebarSizeSmall" value="small"> Icons
                </label>
              </div>

            </div>

            <h4 class="mb-1">
              Navigation Color <span class="badge badge-soft-primary">New</span>
            </h4>

            <p class="small text-muted mb-3">
              Usually dictated by the color scheme, but can be overriden.
            </p>

            <div class="btn-group-toggle d-flex" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="navColor" id="navColorDefault" value="default" checked> Default
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navColor" id="navColorInverted" value="inverted"> Inverted
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navColor" id="navColorVibrant" value="vibrant"> Vibrant
              </label>
            </div>

          </div>
          <div class="modal-footer border-0">

            <button type="submit" class="btn btn-block btn-primary mt-auto">
              Preview
            </button>

          </div>
        </form>
      </div>
    </div>

    <!-- Modal: Members -->
    <div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-options='{"valueNames": ["name"]}'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                    Add a new Blog Post
                  </h4>

                </div>
                <div class="col-auto">

                  <!-- Close -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>

                </div>
              </div> <!-- / .row -->
            </div>

            <div class="card-body">
<form action="/createblog" method="POST" enctype="multipart/form-data">
       @csrf
<div class="input-group input-group-merge mb-3">
  <input type="text" name="title" id="title" class="form-control form-control-prepended" placeholder="Title">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span class="fe fe-pen">🖊</span>
    </div>
  </div>
</div>
<textarea class="form-control" name="body" id="title" data-toggle="autosize" rows="5" placeholder=" type post body here..."></textarea>
<br>
<input type="hidden" name="slug" id="slug" value="1" >
<input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
<select class="form-control" name="post_type" id="post_type" data-toggle="select" data-options='{"minimum-results-for-search": -1}'>
  <option value="Wealth">
  Wealth
  </option>
  <option value="Lifestyle">
Lifestyle
  </option>
  <option value="Travel">
    Travel
  </option>
  <option value="Food">
Food
  </option>
  <option value="Photography">
Photography
  </option>
</select>
<br>

<input type="file" name="blog_image" id="blog_image" class="form-control">
<br>
<div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>
<br>
<button align="center" class="uploadcourse btn btn-success">UPLOAD NOW!!</button>
<input type="hidden" id="blog__id" name="blog_id" value="0">
</form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Search -->

    <!-- Modal: Update Blog -->
    <div class="modal fade" id="UpdatemodalMembers" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-options='{"valueNames": ["name"]}'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                   Update Blog Post
                  </h4>

                </div>
                <div class="col-auto">

                  <!-- Close -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>

                </div>
              </div> <!-- / .row -->
            </div>

            <div class="card-body">
<form action="/updateblog" method="POST" enctype="multipart/form-data">
       @csrf
<div class="input-group input-group-merge mb-3">
  <input type="text" name="utitle" id="utitle" class="form-control form-control-prepended" placeholder="Title">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <span class="fe fe-pen">🖊</span>
    </div>
  </div>
</div>
<textarea class="form-control" name="ubody" id="ubody" data-toggle="autosize" rows="5" placeholder=" type post body here..."></textarea>
<br>
<input type="hidden" name="uslug" id="uslug" >
<input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
<select class="form-control" name="upost_type" id="upost_type" data-toggle="select" data-options='{"minimum-results-for-search": -1}'>
  <option value="Wealth">
  Wealth
  </option>
  <option value="Lifestyle">
Lifestyle
  </option>
  <option value="Travel">
    Travel
  </option>
  <option value="Food">
Food
  </option>
  <option value="Photography">
Photography
  </option>
</select>
<br>

<input type="file" name="ublog_image" id="ublog_image" class="form-control">
<br>
<div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>
<br>
<button class="btn btn-success update-blog" type="submit" id="btn-save">Update Blog</button>
    <input type="hidden" id="blog_id" name="blog_id" value="0">
</form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Kanban task -->


    <!-- NAVIGATION
    ================================================== -->


        <nav class="navbar navbar-vertical fixed-left navbar-expand-md " id="sidebar">
          <div class="container-fluid">

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="index-2.html">
              <img src="images/logos/yk white.png" class="navbar-brand-img
              mx-auto" alt="...">
            </a>

            <!-- User (xs) -->
            <div class="navbar-user d-md-none">

              <!-- Dropdown -->
              <div class="dropdown">

                <!-- Toggle -->
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">
                    <img src="images/Rectangle 73.png" class="avatar-img rounded-circle" alt="...">
                  </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">

                <a href="/settings/{{auth()->user()->username}}" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                   Logout</a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>

              </div>

            </div>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">

              <!-- Form -->
              <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                  <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span class="fe fe-search"></span>
                    </div>
                  </div>
                </div>
              </form>

              <!-- Navigation -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/adminhome" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                    <i class="fe fe-home"></i> Dashboards
                  </a>

                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarPages">
                    <i class="fe fe-file"></i> Pages
                  </a>
                  <div class="collapse show" id="sidebarPages">
                    <ul class="nav nav-sm flex-column">

                    <li>
                      <a class="dropdown-item " href="/blogpost">
                        Blogs
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="/aboutkaka">
                        About Kaka
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="/landingpage">
                        Landing page
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="/courses">
                        Courses
                      </a>
                    </li>
                </ul>
              </li>

              </ul>

              <!-- Divider -->
              <hr class="navbar-divider my-3">

              <!-- Heading -->

              <!-- Navigation -->


              <!-- Push content down -->
              <div class="mt-auto"></div>


              <!-- Customize -->
              <a href="#modalDemo" class="btn btn-block btn-primary mb-4" data-toggle="modal">
                <i class="fe fe-sliders mr-2"></i> Customize
              </a>



              <!-- User (md) -->
              <div class="navbar-user d-none d-md-flex" id="sidebarUser">

                <!-- Icon -->

                <!-- Dropup -->
                <div class="dropup">

                  <!-- Toggle -->
                  <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                      <img src="images/Rectangle 73.png" class="avatar-img rounded-circle" alt="...">
                    </div>
                  </a>

                  <!-- Menu -->
                  <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                  <a href="/settings/{{auth()->user()->username}}" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                   Logout</a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  </div>

                </div>

                <!-- Icon -->


              </div>


            </div> <!-- / .navbar-collapse -->

          </div>
        </nav>


        <nav class="navbar navbar-vertical navbar-vertical-sm fixed-left navbar-expand-md " id="sidebarSmall">
          <div class="container-fluid">

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarSmallCollapse" aria-controls="sidebarSmallCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="index-2.html">
              <img src="images/logos/yk white.png" class="navbar-brand-img
              mx-auto" alt="...">
            </a>

            <!-- User (xs) -->
            <div class="navbar-user d-md-none">

              <!-- Dropdown -->
              <div class="dropdown">

                <!-- Toggle -->
                <a href="#" id="sidebarSmallIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">
                    <img src="images/Rectangle 73.png" class="avatar-img rounded-circle" alt="...">
                  </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarSmallIcon">
                <a href="/settings/{{auth()->user()->username}}" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                   Logout</a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>

              </div>

            </div>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarSmallCollapse">

              <!-- Form -->
              <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                  <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span class="fe fe-search"></span>
                    </div>
                  </div>
                </div>
              </form>

              <!-- Divider -->
              <hr class="navbar-divider d-none d-md-block mt-0 mb-3">

              <!-- Navigation -->
              <ul class="navbar-nav">
                <li class="nav-item dropright">
                  <a class="nav-link dropdown-toggle " id="/adminhome" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Dashboards">
                    <i class="fe fe-home"></i> <span class="d-md-none">Dashboards</span>
                  </a>


                </li>
                <li class="nav-item dropright">
                  <a class="nav-link dropdown-toggle active" id="sidebarSmallPages" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fe fe-file"></i> <span class="d-md-none">Pages</span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="sidebarSmallPages">
                    <li class="dropdown-header d-none d-md-block">
                      <h6 class="text-uppercase mb-0">Pages</h6>
                    </li>

                    <li>
                      <a class="dropdown-item " href="/blogpost">
                        Blogs
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="/aboutkaka">
                        About Kaka
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="/landingpage">
                        Landing page
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="/courses">
                        Courses
                      </a>
                    </li>
                </ul>
              </li>

                  </ul>
                </li>

                <li class="nav-item d-md-none">
                  <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                   <span class="fe fe-bell"></span> Notifications
                  </a>
                </li>
              </ul>

              <!-- Divider -->
              <hr class="navbar-divider my-3">

              <!-- Navigation -->
              <ul class="navbar-nav mb-md-4">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Getting started">
                  <a class="nav-link " href="getting-started.html">
                    <i class="fe fe-clipboard"></i> <span class="d-md-none">Getting started</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="components.html" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Components">
                    <i class="fe fe-book-open"></i> <span class="d-md-none">Components</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="changelog.html" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Changelog">
                    <i class="fe fe-git-branch"></i> <span class="d-md-none">Changelog</span> <span class="badge badge-primary ml-auto d-md-none">v1.4.2</span>
                  </a>
                </li>
              </ul>

              <!-- Push content down -->
              <div class="mt-auto"></div>


              <!-- Customize -->
              <div class="mb-4" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Customize">
                <a href="#modalDemo" class="btn btn-block btn-primary" data-toggle="modal">
                  <i class="fe fe-sliders"></i> <span class="d-md-none ml-2">Customize</span>
                </a>
              </div>



              <!-- User (md) -->
              <div class="navbar-user d-none d-md-flex flex-column" id="sidebarSmallUser">

                <!-- Icon -->
                <a href="#sidebarModalSearch" class="navbar-user-link mb-3" data-toggle="modal">
                  <span class="icon">
                    <i class="fe fe-search"></i>
                  </span>
                </a>

                <!-- Icon -->
                <a href="#sidebarModalActivity" class="navbar-user-link mb-3" data-toggle="modal">
                  <span class="icon">
                    <i class="fe fe-bell"></i>
                  </span>
                </a>

                <!-- Dropup -->
                <div class="dropright">

                  <!-- Toggle -->
                  <a href="#" id="sidebarSmallIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                      <img src="images/Rectangle 73.png" class="avatar-img rounded-circle" alt="...">
                    </div>
                  </a>

                  <!-- Menu -->
                  <div class="dropdown-menu" aria-labelledby="sidebarSmallIconCopy">
                  <a href="/settings/{{auth()->user()->username}}" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                   Logout</a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  </div>

                </div>

              </div>


            </div> <!-- / .navbar-collapse -->

          </div>
        </nav>



      <nav class="navbar navbar-expand-lg " id="topnav">
        <div class="container">

          <!-- Toggler -->
          <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand mr-auto" href="index-2.html">
            <img src="images/logos/yk white.png" alt="..." class="navbar-brand-img">
          </a>

          <!-- Form -->


          <!-- User -->
          <div class="navbar-user">

            <!-- Dropdown -->
            <div class="dropdown mr-4 d-none d-lg-flex">

              <!-- Toggle -->


              <!-- Menu -->

            </div>

            <!-- Dropdown -->
            <div class="dropdown">

              <!-- Toggle -->
              <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="images/Rectangle 73.png" alt="..." class="avatar-img rounded-circle">
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right">

              <a href="/settings/{{auth()->user()->username}}" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                   Logout</a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
              </div>

            </div>

          </div>

          <!-- Collapse -->
          <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="/adminhome" id="topnavDashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dashboards
                </a>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="topnavPages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavPages">


                <li>
                      <a class="dropdown-item " href="/blogpost">
                        Blogs
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="/aboutkaka">
                        About Kaka
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="/landingpage">
                        Landing page
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item " href="/courses">
                        Courses
                      </a>
                    </li>
                </ul>
              </li>

                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#modalDemo" data-toggle="modal">
                  Customize
                </a>
              </li>
            </ul>

          </div>

        </div> <!-- / .container -->
      </nav>


    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">


        <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
          <div class="container-fluid">

            <!-- Form -->
            <form class="form-inline mr-4 d-none d-md-flex">
              <div class="input-group input-group-flush input-group-merge" data-toggle="lists" data-options='{"valueNames": ["name"]}'>

                <!-- Input -->
                <input type="search" class="form-control form-control-prepended dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fe fe-search"></i>
                  </div>
                </div>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-card">
                  <div class="card-body">

                    <!-- List group -->
                    <div class="list-group list-group-flush list my-n3">
                      <a href="team-overview.html" class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Airbnb
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->
                      </a>
                      <a href="team-overview.html" class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Medium Corporation
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->
                      </a>
                      <a href="project-overview.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                              <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Homepage Redesign
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="project-overview.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                              <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Travels & Time
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="project-overview.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-4by3">
                              <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Safari Exploration
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="profile-posts.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="images/Rectangle 73.png" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                {{auth()->user()->username}}
                            </h4>

                            <!-- Status -->
                            <p class="text-body small mb-0">
                              <span class="text-success">●</span> Online
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="profile-posts.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Ab Hadley
                            </h4>

                            <!-- Status -->
                            <p class="text-body small mb-0">
                              <span class="text-danger">●</span> Offline
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                    </div>

                  </div>
                </div> <!-- / .dropdown-menu -->

              </div>
            </form>

            <!-- User -->
            <div class="navbar-user">

              <!-- Dropdown -->
              <div class="dropdown mr-4 d-none d-md-flex">

                <!-- Toggle -->


                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col">

                        <!-- Title -->
                        <h5 class="card-header-title">
                          Notifications
                        </h5>

                      </div>
                      <div class="col-auto">

                        <!-- Link -->
                        <a href="#!" class="small">
                          View all
                        </a>

                      </div>
                    </div> <!-- / .row -->
                  </div> <!-- / .card-header -->
                  <div class="card-body">

                    <!-- List group -->
                    <div class="list-group list-group-flush my-n3">
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="images/Rectangle 73.png" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Adolfo Hess</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Miyah Myles</strong> shared your post with <strong class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen Rouse</strong>, and <strong class="text-body">3 others</strong>.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Glen Rouse</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml-n2">

                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Grace Gross</strong> subscribed to you.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                    </div>

                  </div>
                </div> <!-- / .dropdown-menu -->

              </div>

              <!-- Dropdown -->
              <div class="dropdown">

                <!-- Toggle -->
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="images/Rectangle 73.png" alt="..." class="avatar-img rounded-circle">
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right">
                <a href="/settings/{{auth()->user()->username}}" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                   Logout</a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>

              </div>

            </div>

          </div>
        </nav>


      <!-- HEADER -->
      <div class="header">

        <!-- Image -->
        <img src="assets/img/covers/cover_kaka.png" class="header-img-top" alt="...">

        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body mt-n5 mt-md-n6">
            <div class="row align-items-end">
              <div class="col-auto">

                <!-- Avatar -->
                <div class="avatar avatar-xxl header-avatar-top">
                  <img src="images/Rectangle 73.png" alt="..." class="avatar-img rounded-circle border border-4 border-body">
                </div>

              </div>
              <div class="col mb-3 ml-n3 ml-md-n2">

                <!-- Pretitle -->
                <h6 class="header-pretitle">
                  Admin
                </h6>

                <!-- Title -->
                <h1 class="header-title">
                {{auth()->user()->username}}
                </h1>

              </div>
              <div class="col-12 col-md-auto mt-2 mt-md-0 mb-md-3">

                <!-- Button -->

              </div>
            </div> <!-- / .row -->
            <div class="row align-items-center">
              <div class="col">

                <!-- Nav -->
                <ul class="nav nav-tabs nav-overflow header-tabs">
                    <li class="nav-item">
                      <a href="/blogpost" class="nav-link ">
                        Blog
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/aboutkaka" class="nav-link active">
                        About Kaka
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/comingsoon" class="nav-link">
                        Courses
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/post_events" class="nav-link ">
                        Events
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/comingsoon" class="nav-link">
                        UnlockIT
                      </a>
                    </li>
                  </ul>

              </div>
            </div>
          </div> <!-- / .header-body -->

        </div>
      </div>

      <!-- CONTENT -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Files -->
            <div class="card" data-toggle="lists" data-options='{"valueNames": ["name"]}'>
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h4 class="card-header-title">
                      Blog Post
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Dropdown -->
                    <div class="dropdown">

                      <!-- Toggle -->
                      <a href="#" class="small text-muted dropdown-toggle" data-toggle="dropdown">
                        Sort order
                      </a>

                      <!-- Menu -->
                      <div class="dropdown-menu">
                        <a class="dropdown-item sort" data-sort="name" href="#!">
                          Asc
                        </a>
                        <a class="dropdown-item sort" data-sort="name" href="#!">
                          Desc
                        </a>
                      </div>

                    </div>

                  </div>
                  <div class="col-auto">

                    <!-- Button -->
                    <a href="#modalMembers" class="btn btn-lg btn-rounded-circle btn-white lift" data-toggle="modal">
                  +
                </a>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="card-header">
                <div class="row">
                  <div class="col-12">

                    <!-- Form -->

                  </div>
                </div> <!-- / .row -->
              </div>

              @foreach($blog as $blade_blog)
              <div class="card-body">

                <!-- List -->
                <ul class="list-group list-group-lg list-group-flush list my-n4">
                  <li class="list-group-item px-0">

                    <div class="row align-items-center">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <a href="#!" class="avatar avatar-lg">
                          <img src="images/{{$blade_blog->blog_image}}" alt="..." class="avatar-img rounded">
                        </a>

                      </div>
                      <div class="col ml-n2">

                        <!-- Title -->
                        <h4 class="card-title mb-1 name">
                          <a href="#!">{{$blade_blog->title}}</a>
                        </h4>

                        <!-- Text -->


                        <!-- Time -->
                        <p class="card-text small text-muted">
                          Uploaded by {{$blade_blog->user->username}} on <time datetime="2018-01-03">{{date('M j, Y',strtotime($blade_blog->created_at))}}</time>
                        </p>

                      </div>
                      <div class="col-auto">

                        <!-- Button -->

                      </div>
                      <div class="col-auto">

                        <!-- Dropdown -->
                        <div class="dropdown">
                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                          <a href="#UpdatemodalMembers" class="dropdown-item" data-toggle="modal">
                          <button class="btn btn-success open-modal"  value="{{$blade_blog->id}}"> <i class="fe fe-eye"></i>
                            </button>
                </a>
                <a href="#!" class="dropdown-item">
                            <form action="/deleteblog" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="delete_id" value="{{$blade_blog->id}}" >
                            <button class="btn btn-danger delete-blog" type="submit"  > <i class="fe fe-trash"></i>
                            </button>
                            </form>

                            </a>

                          </div>
                        </div>

                      </div>
                    </div> <!-- / .row -->

                  </li>

                </ul>

              </div>
          @endforeach

            </div>

          </div>
        </div> <!-- / .row -->
      </div>

    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/%40shopify/draggable/lib/es5/draggable.bundle.legacy.js"></script>
    <script src="assets/libs/autosize/dist/autosize.min.js"></script>
    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="assets/libs/list.js/dist/list.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/chart.js/Chart.extension.min.js"></script>
    <script src="{{asset('js/holders.js')}}"></script>
    <!-- Map -->
    <script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>


   <script type="text/javascript">

jQuery('body').on('click', '.open-modal', function () {
        var blog_id = $(this).val();
        $.get('blog/' + blog_id, function (data) {
            jQuery('#blog_id').val(data.id);
            jQuery('#utitle').val(data.title);
            jQuery('#upost_type').val(data.post_type);
            jQuery('#ubody').val(data.body);
            jQuery('#btn-save').val("update");
            jQuery('#linkEditorModal').modal('show');
        })
    });
   </script>


    <script type="text/javascript">
  $("body").on("click",".uploadcourse",function(e){
    $(this).parents("form").ajaxForm(options);
  });

  var options = {
    complete: function(response)
    {
    	if($.isEmptyObject(response.responseJSON.error)){
      //  toastr.success("BlogPost Uploaded Successfully.");
        jQuery('#title').val("");
        jQuery('#body').val("");
        jQuery('#blog_image').val("");
        jQuery('#post_type').val("");
        $('.uploadcourse').html('Post sent✌🏼✌🏼');
        jQuery('#modalMembers').modal('hide')
    		alert('BlogPost Uploaded Successfully.');
    	}else{
    		printErrorMsg(response.responseJSON.error);
    	}
    }
  };


  function printErrorMsg (msg) {
	$(".print-error-msg").find("ul").html('');
	$(".print-error-msg").css('display','block');
	$.each( msg, function( key, value ) {
		$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
	});
  }
</script>


<!-- Update Blog Script -->
<script type="text/javascript">

$("body").on("click",".update-blog",function(e){
    $(this).parents("form").ajaxForm(updaters);
  });


  var updaters = {
    complete: function(response)
    {
    	if($.isEmptyObject(response.responseJSON.error)){

    		alert('Blog Updated Successfully.');
    	}else{
    		printErrorMsg(response.responseJSON.error);
    	}
    }
  };
  function printErrorMsg (msg) {
	$(".print-error-msg").find("ul").html('');
	$(".print-error-msg").css('display','block');
	$.each( msg, function( key, value ) {
		$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
	});
  }

</script>

<!-- Delete Blogo Post -->

<script type="text/javascript">
  $("body").on("click",".delete-blog",function(e){
    $(this).parents("form").ajaxForm(options);
  });

  var options = {
    complete: function(response)
    {
    	if($.isEmptyObject(response.responseJSON.error)){

    		alert('Success 🎉.');
    	}else{
    		printErrorMsg(response.responseJSON.error);
    	}
    }
  };


  function printErrorMsg (msg) {
	$(".print-error-msg").find("ul").html('');
	$(".print-error-msg").css('display','block');
	$.each( msg, function( key, value ) {
		$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
	});
  }
</script>

  </body>

<!-- Mirrored from dashkit.goodthemes.co/profile-files.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2019 13:14:17 GMT -->
</html>
