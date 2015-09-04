<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Dashboard | Remark Admin Template</title>

  <link rel="apple-touch-icon" href="{{ asset('/assets/images/apple-touch-icon.png') }}">
  <link rel="shortcut icon" href="http://getbootstrapadmin.com/remark/assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap-extend.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/site.min.css') }}">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="{{ asset('/assets/css/skintools.css') }}">
  <script src="{{ asset('/assets/js/sections/skintools.min.js') }}"></script>

  <!-- Plugins -->
  <link rel="stylesheet" href="{{ asset('/assets/vendor/animsition/animsition.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/vendor/asscrollable/asScrollable.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/vendor/switchery/switchery.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/vendor/intro-js/introjs.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/vendor/slidepanel/slidePanel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/vendor/flag-icon-css/flag-icon.min.css') }}">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="{{ asset('/assets/vendor/chartist-js/chartist.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/vendor/jvectormap/jquery-jvectormap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.css') }}">

  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('/assets/fonts/weather-icons/weather-icons.min.css') }}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('/assets/fonts/web-icons/web-icons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/fonts/brand-icons/brand-icons.min.css') }}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!-- Inline -->
  <link rel="stylesheet" href="{{ asset('/assets/examples/css/dashboard/v1.css') }}">

  <!--[if lt IE 9]>
    <script src="{{ asset('/assets/vendor/html5shiv/html5shiv.min.js') }}"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="{{ asset('/assets/vendor/media-match/media.match.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/respond/respond.min.js') }}"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{ asset('/assets/vendor/modernizr/modernizr.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/breakpoints/breakpoints.min.js') }}"></script>
  <script>
    Breakpoints();
  </script>

  @yield('page-css-top')
</head>
<body class="dashboard">












<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

  <div class="navbar-header">
    <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
    data-toggle="menubar">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-bar"></span>
    </button>
    <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
    data-toggle="collapse">
      <i class="icon wb-more-horizontal" aria-hidden="true"></i>
    </button>
    <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
      <img class="navbar-brand-logo" src="{{ asset('/assets/images/logo.png') }}" title="Remark">
      <span class="navbar-brand-text"> Remark</span>
    </div>
    <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
    data-toggle="collapse">
      <span class="sr-only">Toggle Search</span>
      <i class="icon wb-search" aria-hidden="true"></i>
    </button>
  </div>

  <div class="navbar-container container-fluid">
    <!-- Navbar Collapse -->
    <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
      <!-- Navbar Toolbar -->
      <ul class="nav navbar-toolbar">
        <li class="hidden-float" id="toggleMenubar">
          <a data-toggle="menubar" href="#" role="button">
            <i class="icon hamburger hamburger-arrow-left">
                <span class="sr-only">Toggle menubar</span>
                <span class="hamburger-bar"></span>
              </i>
          </a>
        </li>
        <li class="hidden-xs" id="toggleFullscreen">
          <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
            <span class="sr-only">Toggle fullscreen</span>
          </a>
        </li>
        <li class="hidden-float">
          <a class="icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
          role="button">
            <span class="sr-only">Toggle Search</span>
          </a>
        </li>
      </ul>
      <!-- End Navbar Toolbar -->

      <!-- Navbar Toolbar Right -->
      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
          aria-expanded="false" role="button">
            <span class="flag-icon flag-icon-us"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li role="presentation">
              <a href="javascript:void(0)" role="menuitem">
                <span class="flag-icon flag-icon-gb"></span> English</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
          data-animation="scale-up" role="button">
            <span class="avatar avatar-online">
              <img src="/assets/portraits/5.jpg" alt="...">
              <i></i>
            </span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li role="presentation">
              <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
          data-animation="scale-up" role="button">
            <i class="icon wb-bell" aria-hidden="true"></i>
            <span class="badge badge-danger up">5</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
            <li class="dropdown-menu-header" role="presentation">
              <h5>NOTIFICATIONS</h5>
              <span class="label label-round label-danger">New 5</span>
            </li>

            <li class="list-group" role="presentation">
              <div data-role="container">
                <div data-role="content">
                  <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                    <div class="media">
                      <div class="media-left padding-right-10">
                        <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">A new order has been placed</h6>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">5 hours ago</time>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </li>
            <li class="dropdown-menu-footer" role="presentation">
              <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                <i class="icon wb-settings" aria-hidden="true"></i>
              </a>
              <a href="javascript:void(0)" role="menuitem">
                  All notifications
                </a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- End Navbar Toolbar Right -->
    </div>
    <!-- End Navbar Collapse -->

    <!-- Site Navbar Seach -->
    <div class="collapse navbar-search-overlap" id="site-navbar-search">
      <form role="search">
        <div class="form-group">
          <div class="input-search">
            <i class="input-search-icon wb-search" aria-hidden="true"></i>
            <input type="text" class="form-control" name="site-search" placeholder="Search...">
            <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
            data-toggle="collapse" aria-label="Close"></button>
          </div>
        </div>
      </form>
    </div>
    <!-- End Site Navbar Seach -->
  </div>
</nav>




<div class="site-menubar">
  <div class="site-menubar-body">
    <div>
      <div>
        <ul class="site-menu">
          <li class="site-menu-category">General</li>
          
          <li class="site-menu-category">Elements</li>

          <li class="site-menu-item has-sub">
            <a data-slug="uikit" href="javascript:void(0)">
              <i aria-hidden="true" class="site-menu-icon wb-bookmark"></i>
              <span class="site-menu-title">Password Store</span>
              <span class="site-menu-arrow"></span>
            </a>
            <ul class="site-menu-sub" style="">
              <li class="site-menu-item is-shown">
                <a data-slug="uikit-buttons" href="{{ URL::to('passwordstore/entry') }}" class="animsition-link">
                  <i aria-hidden="true" class="site-menu-icon "></i>
                  <span class="site-menu-title">Entry</span>
                </a>
              </li>
              <li class="site-menu-item is-shown {{ (Request::is('passwordstore/view') ? 'active' : '') }}">
                <a data-slug="uikit-buttons" href="{{ URL::to('passwordstore/view') }}" class="animsition-link">
                  <i aria-hidden="true" class="site-menu-icon "></i>
                  <span class="site-menu-title">View</span>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="site-menu-item">
            <a class="animsition-link" href="angular/index.html#/angularui/alert" data-slug="angular">
              <i class="site-menu-icon bd-angular" aria-hidden="true"></i>
              <span class="site-menu-title">Angular UI</span>
              <div class="site-menu-label">
                <span class="label label-danger label-round">new</span>
              </div>
            </a>
          </li>
        </ul>

        <div class="site-menubar-section">
          <h5>
            Milestone
            <span class="pull-right">30%</span>
          </h5>
          <div class="progress progress-xs">
            <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="site-menubar-footer">
    <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
    data-original-title="Settings">
      <span class="icon wb-settings" aria-hidden="true"></span>
    </a>
    <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
      <span class="icon wb-eye-close" aria-hidden="true"></span>
    </a>
    <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
      <span class="icon wb-power" aria-hidden="true"></span>
    </a>
  </div>
</div>

<div class="site-gridmenu">
  <div>
    <div>
      <ul>
        <li>
          <a href="apps/mailbox/mailbox.html">
            <i class="icon wb-envelope"></i>
            <span>Mailbox</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>




  <!-- Page -->
  @yield('page-content')  
  <!-- End Page -->














  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></span>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
    </div>
  </footer>

  <!-- Core  -->
  <!--<script src="{{ asset('/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/animsition/jquery.animsition.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/asscroll/jquery-asScroll.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/mousewheel/jquery.mousewheel.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/asscrollable/jquery.asScrollable.all.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/ashoverscroll/jquery-asHoverScroll.min.js') }}"></script>-->

  <!-- Plugins -->
  <!--<script src="{{ asset('/assets/vendor/switchery/switchery.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/intro-js/intro.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/screenfull/screenfull.js') }}"></script>
  <script src="{{ asset('/assets/vendor/slidepanel/jquery-slidePanel.min.js') }}"></script>-->

  <!-- Plugins For This Page -->
  <!--<script src="{{ asset('/assets/vendor/skycons/skycons.js') }}"></script>
  <script src="{{ asset('/assets/vendor/chartist-js/chartist.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/aspieprogress/jquery-asPieProgress.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/jvectormap/jquery-jvectormap.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/jvectormap/maps/jquery-jvectormap-au-mill-en.js') }}"></script>
  <script src="{{ asset('/assets/vendor/matchheight/jquery.matchHeight-min.js') }}"></script>-->

  <!-- Scripts -->
  <!--<script src="{{ asset('/assets/js/core.min.js') }}"></script>
  <script src="{{ asset('/assets/js/site.min.js') }}"></script>

  <script src="{{ asset('/assets/js/sections/menu.min.js') }}"></script>
  <script src="{{ asset('/assets/js/sections/menubar.min.js') }}"></script>
  <script src="{{ asset('/assets/js/sections/gridmenu.min.js') }}"></script>
  <script src="{{ asset('/assets/js/sections/sidebar.min.js') }}"></script>

  <script src="{{ asset('/assets/js/configs/config-colors.min.js') }}"></script>
  <script src="{{ asset('/assets/js/configs/config-tour.min.js') }}"></script>

  <script src="{{ asset('/assets/js/components/asscrollable.min.js') }}"></script>
  <script src="{{ asset('/assets/js/components/animsition.min.js') }}"></script>
  <script src="{{ asset('/assets/js/components/slidepanel.min.js') }}"></script>
  <script src="{{ asset('/assets/js/components/switchery.min.js') }}"></script>-->

  <!-- Scripts For This Page -->
  <!--<script src="{{ asset('/assets/js/components/matchheight.min.js') }}"></script>
  <script src="{{ asset('/assets/js/components/jvectormap.min.js') }}"></script>



  <script src="{{ asset('/assets/examples/js/dashboard/v1.js') }}"></script>-->

    <!-- Core  -->
  <script src="{{ asset('/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/animsition/jquery.animsition.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/asscroll/jquery-asScroll.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/mousewheel/jquery.mousewheel.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/asscrollable/jquery.asScrollable.all.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/ashoverscroll/jquery-asHoverScroll.min.js') }}"></script>


   <!-- Scripts -->
  <script src="{{ asset('/assets/js/core.min.js') }}"></script>
  <script src="{{ asset('/assets/js/site.min.js') }}"></script>

  <script src="{{ asset('/assets/js/sections/menu.min.js') }}"></script>
  <script src="{{ asset('/assets/js/sections/menubar.min.js') }}"></script>
  <script src="{{ asset('/assets/js/sections/gridmenu.min.js') }}"></script>
  <script src="{{ asset('/assets/js/sections/sidebar.min.js') }}"></script>

  <script src="{{ asset('/assets/js/configs/config-colors.min.js') }}"></script>
  <script src="{{ asset('/assets/js/configs/config-tour.min.js') }}"></script>

  <script src="{{ asset('/assets/js/components/asscrollable.min.js') }}"></script>
  <script src="{{ asset('/assets/js/components/animsition.min.js') }}"></script>
  <script src="{{ asset('/assets/js/components/slidepanel.min.js') }}"></script>
  <script src="{{ asset('/assets/js/components/switchery.min.js') }}"></script>



  @yield('page-scripts-bottom')

</body>
</html>