<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    RTK Trading
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  @include('layouts.css-link')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="" class="simple-text logo-normal">
        RTK trading
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
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
          <li class="nav-item active">
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
                    {{ Auth::user()->name }}
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="profile">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="app-content content">
        <div class="content-wrapper">
              <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                  <h4 class="content-header-title mb-0">Account Upgrade</h4> <br>
                  <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                      Upgrade your trading account to a level that best fits your trading experience and have access to several trading benefits. <br>Your current account level is <code>"
                      {{ Auth::user()->account_level }}"</code>
                    </div>
                  </div>
                </div>
              </div>
    

          <div class="content-body">
      <!-- Begin Upgrade Account -->
      <section id="user-profile-cards-with-stats" class="row mt-2">
        <div class="col-xl-3 col-md-6 col-12">
          <div class="card profile-card-with-stats border-teal border-lighten-2">
            <div class="text-center">
              <div class="card-body">
                <img width="100%" height="100%" src="{{ asset('silver.jpg') }}" class="rounded-circle  height-150"
                alt="Card image">
              </div>
              <div class="card-body">
                <h4 class="card-title">500 USD</h4>
              </div>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>24/7 Customer Service</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Professional Chart</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Trading Alerts</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Trading Central (Basic)</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>A Personal Coach</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>1,000 USD Bonus</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="card-body">

                      <div class="form-group">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-md btn-round mr-1" data-toggle="modal"
                        data-target="#default"> Choose this </button>
                        <!-- Modal -->
                        <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                        aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel1">Account Upgrade</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>To upgrade your tradecryptomax trading account to a higher level, please contact our Live Chat agent to receive the appropriate payment details. Alternatively, you can contact your Account Manager to help you with the account upgrade.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
          <div class="card profile-card-with-stats border-teal border-lighten-2">
            <div class="text-center">
              <div class="card-body">
                <img width="100%" height="100%" src="{{ asset('gold.png') }}" class="rounded-circle  height-150"
                alt="Card image">
              </div>
              <div class="card-body">
                <h4 class="card-title">1,000 USD</h4>
              </div>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>24/7 Customer Service</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Professional Chart</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Trading Alerts</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Trading Central (Basic)</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>A Personal Coach</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>2,000 USD Bonus</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>SMS & Email Alerts</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Live Trading With Expert</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="card-body">
                
                      <div class="form-group">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-md btn-round mr-1" data-toggle="modal"
                        data-target="#default"> Choose this </button>
                        <!-- Modal -->
                        <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                        aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel1">Account Upgrade</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>To upgrade your Optiontrtradecryptomaxades24 trading account to a higher level, please contact our Live Chat agent to receive the appropriate payment details. Alternatively, you can contact your Account Manager to help you with the account upgrade.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
          <div class="card profile-card-with-stats border-teal border-lighten-2">
            <div class="text-center">
              <div class="card-body">
                <img width="100%" height="100%"  src="{{ asset('platinum.jpg') }}" class="rounded-circle  height-150"
                alt="Card image">
              </div>
              <div class="card-body">
                <h4 class="card-title">1,500 USD</h4>
              </div>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>24/7 Customer Service</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Professional Chart</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Trading Alerts</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Trading Central (Basic)</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>A Personal Coach</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>3,000 USD Bonus</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>SMS & Email Alerts</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Live Trading With Expert</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Financial Expert Session</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Research Website</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="card-body">
                
                      <div class="form-group">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-md btn-round mr-1" data-toggle="modal"
                        data-target="#default"> Choose this </button>
                        <!-- Modal -->
                        <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                        aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel1">Account Upgrade</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>To upgrade your tradecryptomax trading account to a higher level, please contact our Live Chat agent to receive the appropriate payment details. Alternatively, you can contact your Account Manager to help you with the account upgrade.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
          <div class="card profile-card-with-stats border-teal border-lighten-2">
            <div class="text-center">
              <div class="card-body">
                <img width="100%" height="100%"  src="{{ asset('diamond.png') }}" class="rounded-circle  height-150"
                alt="Card image">
              </div>
              <div class="card-body">
                <h4 class="card-title">2,000 USD</h4>
              </div>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>24/7 Customer Service</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Professional Chart</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Trading Alerts</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Trading Central (Basic)</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>A Personal Coach</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>4,000 USD Bonus</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>SMS & Email Alerts</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Live Trading With Expert</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Financial Expert Session</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Research Website</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Customize Platform</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Higher Trading Limits/Exposure</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="btn-group" role="group" aria-label="Profile example">
                <button type="button" class="btn btn-float box-shadow-0 btn-outline-primary btn-round">
                  <span class="ladda-label">
                    <span>Advanced Software Configurations</span>
                  </span>
                  <span class="ladda-spinner"></span>
                </button>
              </div>
              <br><br>
              <div class="card-body">
                
                      <div class="form-group">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-md btn-round mr-1" data-toggle="modal"
                        data-target="#default"> Choose this </button>
                        <!-- Modal -->
                        <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                        aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel1">Account Upgrade</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>To upgrade your tradecryptomax trading account to a higher level, please contact our Live Chat agent to receive the appropriate payment details. Alternatively, you can contact your Account Manager to help you with the account upgrade.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Upgrade Account -->

          </div>

        </div>
      </div>
      @include('layouts.butt') 
    </div>
  </div>
  @include('layouts.js-link')
 
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 700 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>
