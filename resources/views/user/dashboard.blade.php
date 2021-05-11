<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice salechenuall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

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
      <div class="logo"><a href="" class="simple-text logo-normal">
          RTK Trading
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
            <div>
                <div class="alert alert-success">
                    <div class="container">
                      <div class="alert-icon">
                        <i class="material-icons">check</i>
                      </div>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                      </button>
                      @foreach ($users as $user)


                      <b>Welcome {{ $user->name }}:</b> amazing deals happening let help you make more money
                      @endforeach
                    </div>
                </div>
              </div>
              <div>
                <div class="alert alert-danger">
                    <div class="container">
                      <div class="alert-icon">
                        <i class="material-icons">check</i>
                      </div>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                      </button>
                      @foreach ($users as $user)


                      <b>{{ $user->message }}</b> 
                      @endforeach
                    </div>
                </div>
              </div>
          <div class="row">

@foreach ($users as $user)
           <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="">Balance</i>
                  </div>
                  <p class="card-category">Revenue</p>
                  <h3 class="card-title">${{ $user->account_balance }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="">Account</i>
                  </div>
                  <p class="card-category">Account type</p>
                  <h3 class="card-title">{{ $user->account_level }}
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="upgrade">upgrade account</a>
  @endforeach
                  </div>
                </div>
              </div>
            </div><br><hr>
            
           

            
            <br>




                   <br>

               <div class="row ">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
          
                  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
                  {
                  "symbols": [
                    {
                      "title": "EUR/USD",
                      "proName": "FX_IDC:EURUSD"
                    },
                    {
                      "description": "GBP/USD",
                      "proName": "FX:GBPUSD"
                    },
                    {
                      "description": "USD/JPY",
                      "proName": "FX:USDJPY"
                    },
                    {
                      "description": "NZD/USD",
                      "proName": "FX:NZDUSD"
                    },
                    {
                      "description": "AUD/USD",
                      "proName": "FX:AUDUSD"
                    }
                  ],
                  "locale": "en"
                }
                  </script>
              </div>
              <!-- TradingView Widget END -->
               </div>



              <div></div>


            <div class="row" style="width:100%;" >
                <div class="col-lg-12 col-md-12 col-sm-12">
                   <div class="card card-stats">
                     <div class="card-header card-header-info card-header-icon">
                       <div class="card-icon">
                         <i class="">TRADE</i><br>
                         <small>make a trade let our brokers help you earn over your investement</small>
                       </div>
                     </div>
                     <div class="card-body">
                        <form action="buy" method="post">@csrf
                          <div class="row justify-content-end">
                            
                          </div>
                          <div class="row">
                            <div class="col-4">
                              <p>Amount</p>
                            </div>
                            <div class="col-8">
                              <input class="form-control" type="text" name="amount" id="" placeholder="1.0" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-4">
                              <p>Type</p>
                            </div>
                            <div class="col-8">
                           
                              <div class="form-group">
                                
                                <select required class="form-control" name="type" id="">
                                  <option></option>
                                  <option>BTC</option>
                                  <option>EUT</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          
                            <button class="btn btn-info" type="submit">INVEST</button>
                       </form>
                     </div>
                     <div class="card-footer">

                     </div>
                   </div>
                 </div></div>
                 

                 <div class="row" style="width:100%;">
                    <div class="col-lg-12 col-md-12">
                      <div class="card" >
                        <div class="card-header card-header-warning">
                          <h4 class="card-title">Trade history</h4>
                          <p class="card-category">all my trade</p>
                        </div>
                        <div class="card-body table-responsive">
                          <table class="table table-hover">
                            <thead class="text-warning">
                              <th>Date</th>
                              <th>Type</th>
                              <th>Amount</th>
                              <th>Returns</th>
                              <th>Status</th>
                            </thead>
                            <tbody>
                             @foreach ($trades as $trade)
                              <tr>

                                <td>{{ $trade->created_at }}</td>
                                <td>{{ $trade->type }}</td>
                                <td>{{ $trade->amount }}</td>
                                <td>{{ $trade->trade }}</td>
                                <td>{{ $trade->status }}</td>
                              </tr>
                              @endforeach

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div> </div>

                  <div class="row">
                    <!-- Slaes & Purchase Order -->
        <div class="row">
          <div class="col-12 col-xl-8"> 
              <!-- TradingView Widget BEGIN -->
              <div class="tradingview-widget-container">
                <div id="tradingview_16cb2"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                new TradingView.widget(
                {
                "width": 715,
                "height": 445,
                "symbol": "FX:EURUSD",
                "interval": "1",
                "timezone": "Etc/UTC",
                "theme": "Light",
                "style": "1",
                "locale": "en",
                "toolbar_bg": "#f1f3f6",
                "enable_publishing": false,
                "allow_symbol_change": true,
                "container_id": "tradingview_41847"
              }
                );
                </script>
              </div>
              <!-- TradingView Widget END -->
          </div>
          <div class="col-12 col-xl-4">
              <script type="text/javascript">
              baseUrl = "https://widgets.cryptocompare.com/";
              var scripts = document.getElementsByTagName("script");
              var embedder = scripts[ scripts.length - 1 ];
              (function (){
              var appName = encodeURIComponent(window.location.hostname);
              if(appName==""){appName="local";}
              var s = document.createElement("script");
              s.type = "text/javascript";
              s.async = true;
              var theUrl = baseUrl+'serve/v1/coin/tiles?fsym=BTC&tsyms=USD,EUR,CNY,GBP,GOLD,JPY,AUD,CAD,CHF,CZK';
              s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
              embedder.parentNode.appendChild(s);
              })();
              </script>
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
