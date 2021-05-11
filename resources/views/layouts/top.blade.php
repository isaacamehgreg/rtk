<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('rtk/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('rtk/assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      RTK Trading
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    @include('layouts.css-link')
  </head>
  
  <body class="">
    <div class="wrapper ">
      <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('') }}">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
  
          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
          </a></div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item active  ">
              <a class="nav-link" href="dashboard">
              <!-- <i class="material-icons">dashboard</i>    -->
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="profile">
               <!-- <i class="material-icons">person</i>-->
                <p>User Profile</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="deposit">
             <!--   <i class="material-icons">content_paste</i>-->
                <p>Deposit</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="withdraw">
             <!--   <i class="material-icons">library_books</i>-->
                <p>Withdraw</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="upgrade">
              <!--  <i class="material-icons">bubble_chart</i>-->
                <p>Upgrade</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="logout">
              <!--  <i class="material-icons">location_ons</i>-->
                <p>Logout</p>
              </a>
            </li>
  
          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <a class="navbar-brand" href="javascript:;">Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
              <form class="navbar-form">
              </form>
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <!-- <i class="material-icons">person</i>  -->
                    <p class="d-lg-none d-md-block">
                      Isaac Ameh
                    </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Log out</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>