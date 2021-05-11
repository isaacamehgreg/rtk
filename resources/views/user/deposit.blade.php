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
          <li class="nav-item   ">
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
          <li class="nav-item active">
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

      <div class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
              deposit using any of our secure and safe funding method  you will get 100% welcome bonus for the first time
              
          </div><BR>
          <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <h3>Use Debit Card</h3>
                    
                  </div>
                  <p class="card-category"><i class="fa " aria-hidden="true"></i></p>
                  <h3 class="card-title"> </h3>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                    <div class="row" style="margin-bottom:40px;">
                        <div class="col-md-8 col-md-offset-2">
                            <p>

                                <div class="row justify-content-center">
                                  <img  height="50%" width="50%" src="{{asset('c.jpg')}}" alt="">
                                </div>
                                <div class="row justify-content-center">
                                    fund your account now and trade
                                </div>
                            </p>
                            <input type="hidden" name="email" value="{{ Auth::user()->email}}">
                            <input type="hidden" name="orderID" value="{{ Auth::user()->id}}">
                            <input type="hidden" name="amount"  id="cash" > {{-- required in kobo --}}
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="currency" value="NGN">
                            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                
                            <p>
                                <button  hidden class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!"  id="submit">
                                    Fund Now!
                                </button>
                               
                            </p>
                        </div>
                    </div>
                </form>
                <button class="btn btn-success" data-toggle="modal" data-target="#debit">
                  Fund with Debit Card 
                </button>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                    completely safe and secure paystack payment
                  </div>
                </div>
              </div>
            </div>


          <!-- Classic Modal -->
          <div class="modal fade" id="debit" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Debit Card Deposit</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                  </button>
                </div>
                <div class="modal-body row justify-content-center">
                  <p>Enter the amount you wish to deposit below:</p> <br>
                                <p> $<input type="number" name="" id="amount" class="form-control" ></p>USD <br>
                                <p> <button class="btn btn-primary" id="pay">pay</button></p>
                </div>


                <script>
                  var money  = document.getElementById('amount');
                  var pay  = document.getElementById('pay');
                  var cash  = document.getElementById('cash');
                  var submit  = document.getElementById('submit');


                 
                 pay.onclick=function(){
                   var dollar = money.value;
                   var  naira =  dollar * 400;
                   var kobo = naira * 100;

                   

                   cash.value = kobo;
                   submit.click();

                   
                 }
                 
                
                </script>


                <div class="modal-footer">
                
                  <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!--  End Modal -->



            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <h3>Use BITcoin</h3>
                  </div>
                </div>

                <div class="card-body">

                  <div class="row justify-content-center">
                    <img height="50%" width="50%" src="{{ asset('bit.png') }}" alt="">
                  </div>
                  <div class="row justify-content-center">
                    <h4>fund your account via bitcoin</h3>
                  </div>
                  <div class="row justify-content-start">
                   <!--                 modals -->
                <div class="row" id="modals">
                  <div class="col-md-6">
                    <div class="title">
                      
                    </div>
                    <div class="row">
                      <div class="col-lg-4 col-md-6">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">
                          Fund with Bitcoin 
                        </button>
                      </div>
                    </div>
                          </div>
                          
                        </div>

                        <div class="card-footer">
                          <div class="stats">
                            deposit fund your via bitcoin
                          </div>
                        </div>
                      </div>


              <!-- Classic Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">BITcoin Deposit</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">clear</i>
                      </button>
                    </div>
                    <div class="modal-body row justify-content-center">
                      <p>All Bitcoin payments should be sent to the bitcoin address below:</p> <br>
                                    <p>3QJeV3PknDPBQW1RFUf5vVntBauJy7Axb5</p> <br>
                                    <p>Please note that there is a minimum deposit of 250 USD.</p>
                    </div>
                    <div class="modal-footer">
                     
                      <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--  End Modal -->



          <div class="row">


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
