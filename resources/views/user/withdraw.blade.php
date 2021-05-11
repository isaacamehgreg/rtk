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
          <li class="nav-item ">
            <a class="nav-link" href="deposit">
           <!--   <i class="material-icons">content_paste</i>-->
              <p>Deposit</p>
            </a>
          </li>
          <li class="nav-item active">
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
              deposit using any of our secre and safe funding metod  yyou willget 100% welcome bonus
          </div><BR>
          <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">

                  <p class="card-category"><i class="fa fa-money" aria-hidden="true"></i></p>
                  <h3 class="card-title"> <br>Withdrawal Request </h3>
                </div>
                <div class="card-body">
                <form method="POST" action="with">@csrf
                  
                    <div class="form-body"> 
                      <div class="form-group">
                        <label for="withdrawal_method">Select Withdrawal Method</label>
                        <select name="withdrawal_method" class="form-control" id="withdrawalMethod" required>
                          <option value="">Select Method</option>
                          <option value="Bitcoin">Bitcoin</option>
                          <option value="Bank Transfer">Bank Transfer</option>
                        </select>
                      </div>

                      <div id="beneficiaryField1" class="form-group" style="display: none">
                        <label for="acct_no">Beneficiary Account Number</label>
                        <input class="form-control border-primary" type="text" name="acct_no" placeholder="Enter Account Number" id="acct_no">
                      </div>

                      <div id="beneficiaryField2" class="form-group" style="display: none">
                        <label for="acct_name">Beneficiary Account Name</label>
                        <input class="form-control border-primary" type="text" name="acct_name" placeholder="Enter Account Name" id="acct_name">
                      </div>

   

                      <div id="beneficiaryField4" class="form-group" style="display: none">
                        <label for="receiver_bank">Receiver Bank</label>
                        <input class="form-control border-primary" type="text" name="receiver_bank" placeholder="Enter Bank Name" id="receiver_bank">
                      </div>

                      <div id="beneficiaryField5" class="form-group" style="display: none">
                        <label for="country">Receiver Country</label>
                        <select class="form-control" name="country" id="country">
                          <option value="">Select Country</option>
                          <option value="United Kingdom">United Kingdom</option> 
                          <option value="United States">United States</option> 
                          <option value="Afghanistan">Afghanistan</option> 
                          <option value="Albania">Albania</option> 
                          <option value="Algeria">Algeria</option> 
                          <option value="American Samoa">American Samoa</option> 
                          <option value="Andorra">Andorra</option> 
                          <option value="Angola">Angola</option> 
                          <option value="Anguilla">Anguilla</option> 
                          <option value="Antarctica">Antarctica</option> 
                          <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                          <option value="Argentina">Argentina</option> 
                          <option value="Armenia">Armenia</option> 
                          <option value="Aruba">Aruba</option> 
                          <option value="Australia">Australia</option> 
                          <option value="Austria">Austria</option> 
                          <option value="Azerbaijan">Azerbaijan</option> 
                          <option value="Bahamas">Bahamas</option> 
                          <option value="Bahrain">Bahrain</option> 
                          <option value="Bangladesh">Bangladesh</option> 
                          <option value="Barbados">Barbados</option> 
                          <option value="Belarus">Belarus</option> 
                          <option value="Belgium">Belgium</option> 
                          <option value="Belize">Belize</option> 
                          <option value="Benin">Benin</option> 
                          <option value="Bermuda">Bermuda</option> 
                          <option value="Bhutan">Bhutan</option> 
                          <option value="Bolivia">Bolivia</option> 
                          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                          <option value="Botswana">Botswana</option> 
                          <option value="Bouvet Island">Bouvet Island</option> 
                          <option value="Brazil">Brazil</option> 
                          <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                          <option value="Brunei Darussalam">Brunei Darussalam</option> 
                          <option value="Bulgaria">Bulgaria</option> 
                          <option value="Burkina Faso">Burkina Faso</option> 
                          <option value="Burundi">Burundi</option> 
                          <option value="Cambodia">Cambodia</option> 
                          <option value="Cameroon">Cameroon</option> 
                          <option value="Canada">Canada</option> 
                          <option value="Cape Verde">Cape Verde</option> 
                          <option value="Cayman Islands">Cayman Islands</option> 
                          <option value="Central African Republic">Central African Republic</option> 
                          <option value="Chad">Chad</option> 
                          <option value="Chile">Chile</option> 
                          <option value="China">China</option> 
                          <option value="Christmas Island">Christmas Island</option> 
                          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                          <option value="Colombia">Colombia</option> 
                          <option value="Comoros">Comoros</option> 
                          <option value="Congo">Congo</option> 
                          <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                          <option value="Cook Islands">Cook Islands</option> 
                          <option value="Costa Rica">Costa Rica</option> 
                          <option value="Cote D'ivoire">Cote D'ivoire</option> 
                          <option value="Croatia">Croatia</option> 
                          <option value="Cuba">Cuba</option> 
                          <option value="Cyprus">Cyprus</option> 
                          <option value="Czech Republic">Czech Republic</option> 
                          <option value="Denmark">Denmark</option> 
                          <option value="Djibouti">Djibouti</option> 
                          <option value="Dominica">Dominica</option> 
                          <option value="Dominican Republic">Dominican Republic</option> 
                          <option value="Ecuador">Ecuador</option> 
                          <option value="Egypt">Egypt</option> 
                          <option value="El Salvador">El Salvador</option> 
                          <option value="Equatorial Guinea">Equatorial Guinea</option> 
                          <option value="Eritrea">Eritrea</option> 
                          <option value="Estonia">Estonia</option> 
                          <option value="Ethiopia">Ethiopia</option> 
                          <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                          <option value="Faroe Islands">Faroe Islands</option> 
                          <option value="Fiji">Fiji</option> 
                          <option value="Finland">Finland</option> 
                          <option value="France">France</option> 
                          <option value="French Guiana">French Guiana</option> 
                          <option value="French Polynesia">French Polynesia</option> 
                          <option value="French Southern Territories">French Southern Territories</option> 
                          <option value="Gabon">Gabon</option> 
                          <option value="Gambia">Gambia</option> 
                          <option value="Georgia">Georgia</option> 
                          <option value="Germany">Germany</option> 
                          <option value="Ghana">Ghana</option> 
                          <option value="Gibraltar">Gibraltar</option> 
                          <option value="Greece">Greece</option> 
                          <option value="Greenland">Greenland</option> 
                          <option value="Grenada">Grenada</option> 
                          <option value="Guadeloupe">Guadeloupe</option> 
                          <option value="Guam">Guam</option> 
                          <option value="Guatemala">Guatemala</option> 
                          <option value="Guinea">Guinea</option> 
                          <option value="Guinea-bissau">Guinea-bissau</option> 
                          <option value="Guyana">Guyana</option> 
                          <option value="Haiti">Haiti</option> 
                          <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                          <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                          <option value="Honduras">Honduras</option> 
                          <option value="Hong Kong">Hong Kong</option> 
                          <option value="Hungary">Hungary</option> 
                          <option value="Iceland">Iceland</option> 
                          <option value="India">India</option> 
                          <option value="Indonesia">Indonesia</option> 
                          <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                          <option value="Iraq">Iraq</option> 
                          <option value="Ireland">Ireland</option> 
                          <option value="Israel">Israel</option> 
                          <option value="Italy">Italy</option> 
                          <option value="Jamaica">Jamaica</option> 
                          <option value="Japan">Japan</option> 
                          <option value="Jordan">Jordan</option> 
                          <option value="Kazakhstan">Kazakhstan</option> 
                          <option value="Kenya">Kenya</option> 
                          <option value="Kiribati">Kiribati</option> 
                          <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                          <option value="Korea, Republic of">Korea, Republic of</option> 
                          <option value="Kuwait">Kuwait</option> 
                          <option value="Kyrgyzstan">Kyrgyzstan</option> 
                          <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                          <option value="Latvia">Latvia</option> 
                          <option value="Lebanon">Lebanon</option> 
                          <option value="Lesotho">Lesotho</option> 
                          <option value="Liberia">Liberia</option> 
                          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                          <option value="Liechtenstein">Liechtenstein</option> 
                          <option value="Lithuania">Lithuania</option> 
                          <option value="Luxembourg">Luxembourg</option> 
                          <option value="Macao">Macao</option> 
                          <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                          <option value="Madagascar">Madagascar</option> 
                          <option value="Malawi">Malawi</option> 
                          <option value="Malaysia">Malaysia</option> 
                          <option value="Maldives">Maldives</option> 
                          <option value="Mali">Mali</option> 
                          <option value="Malta">Malta</option> 
                          <option value="Marshall Islands">Marshall Islands</option> 
                          <option value="Martinique">Martinique</option> 
                          <option value="Mauritania">Mauritania</option> 
                          <option value="Mauritius">Mauritius</option> 
                          <option value="Mayotte">Mayotte</option> 
                          <option value="Mexico">Mexico</option> 
                          <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                          <option value="Moldova, Republic of">Moldova, Republic of</option> 
                          <option value="Monaco">Monaco</option> 
                          <option value="Mongolia">Mongolia</option> 
                          <option value="Montserrat">Montserrat</option> 
                          <option value="Morocco">Morocco</option> 
                          <option value="Mozambique">Mozambique</option> 
                          <option value="Myanmar">Myanmar</option> 
                          <option value="Namibia">Namibia</option> 
                          <option value="Nauru">Nauru</option> 
                          <option value="Nepal">Nepal</option> 
                          <option value="Netherlands">Netherlands</option> 
                          <option value="Netherlands Antilles">Netherlands Antilles</option> 
                          <option value="New Caledonia">New Caledonia</option> 
                          <option value="New Zealand">New Zealand</option> 
                          <option value="Nicaragua">Nicaragua</option> 
                          <option value="Niger">Niger</option> 
                          <option value="Nigeria">Nigeria</option> 
                          <option value="Niue">Niue</option> 
                          <option value="Norfolk Island">Norfolk Island</option> 
                          <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                          <option value="Norway">Norway</option> 
                          <option value="Oman">Oman</option> 
                          <option value="Pakistan">Pakistan</option> 
                          <option value="Palau">Palau</option> 
                          <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                          <option value="Panama">Panama</option> 
                          <option value="Papua New Guinea">Papua New Guinea</option> 
                          <option value="Paraguay">Paraguay</option> 
                          <option value="Peru">Peru</option> 
                          <option value="Philippines">Philippines</option> 
                          <option value="Pitcairn">Pitcairn</option> 
                          <option value="Poland">Poland</option> 
                          <option value="Portugal">Portugal</option> 
                          <option value="Puerto Rico">Puerto Rico</option> 
                          <option value="Qatar">Qatar</option> 
                          <option value="Reunion">Reunion</option> 
                          <option value="Romania">Romania</option> 
                          <option value="Russian Federation">Russian Federation</option> 
                          <option value="Rwanda">Rwanda</option> 
                          <option value="Saint Helena">Saint Helena</option> 
                          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                          <option value="Saint Lucia">Saint Lucia</option> 
                          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                          <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                          <option value="Samoa">Samoa</option> 
                          <option value="San Marino">San Marino</option> 
                          <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                          <option value="Saudi Arabia">Saudi Arabia</option> 
                          <option value="Senegal">Senegal</option> 
                          <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                          <option value="Seychelles">Seychelles</option> 
                          <option value="Sierra Leone">Sierra Leone</option> 
                          <option value="Singapore">Singapore</option> 
                          <option value="Slovakia">Slovakia</option> 
                          <option value="Slovenia">Slovenia</option> 
                          <option value="Solomon Islands">Solomon Islands</option> 
                          <option value="Somalia">Somalia</option> 
                          <option value="South Africa">South Africa</option> 
                          <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                          <option value="Spain">Spain</option> 
                          <option value="Sri Lanka">Sri Lanka</option> 
                          <option value="Sudan">Sudan</option> 
                          <option value="Suriname">Suriname</option> 
                          <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                          <option value="Swaziland">Swaziland</option> 
                          <option value="Sweden">Sweden</option> 
                          <option value="Switzerland">Switzerland</option> 
                          <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                          <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                          <option value="Tajikistan">Tajikistan</option> 
                          <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                          <option value="Thailand">Thailand</option> 
                          <option value="Timor-leste">Timor-leste</option> 
                          <option value="Togo">Togo</option> 
                          <option value="Tokelau">Tokelau</option> 
                          <option value="Tonga">Tonga</option> 
                          <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                          <option value="Tunisia">Tunisia</option> 
                          <option value="Turkey">Turkey</option> 
                          <option value="Turkmenistan">Turkmenistan</option> 
                          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                          <option value="Tuvalu">Tuvalu</option> 
                          <option value="Uganda">Uganda</option> 
                          <option value="Ukraine">Ukraine</option> 
                          <option value="United Arab Emirates">United Arab Emirates</option> 
                          <option value="United Kingdom">United Kingdom</option> 
                          <option value="United States">United States</option> 
                          <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                          <option value="Uruguay">Uruguay</option> 
                          <option value="Uzbekistan">Uzbekistan</option> 
                          <option value="Vanuatu">Vanuatu</option> 
                          <option value="Venezuela">Venezuela</option> 
                          <option value="Viet Nam">Viet Nam</option> 
                          <option value="Virgin Islands, British">Virgin Islands, British</option> 
                          <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                          <option value="Wallis and Futuna">Wallis and Futuna</option> 
                          <option value="Western Sahara">Western Sahara</option> 
                          <option value="Yemen">Yemen</option> 
                          <option value="Zambia">Zambia</option> 
                          <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="amount">Enter Withdrawal Amount</label>
                        <input class="form-control border-primary" type="text" name="amount" placeholder="0.00" id="amount" required>
                      </div>

                      <div id="wallet" class="form-group" style="display: none">
                        <label for="acct_no">Bitcoin Wallet ID</label>
                        <input class="form-control border-primary" type="text" name="acct_no" placeholder="Enter BITcoin Wallet" >
                      </div>

                    </div>
                    <div class="form-actions right">
                      <div class="form-group">
                        <button name="withdraw" type="submit" class="btn btn-success">
                         <i class="la la-check-square-o"></i> Proceed
                        </button>
                      </div>
                    </div>
                  
                </form>

               <script>
                 var a = document.getElementById('beneficiaryField1');
                 var b = document.getElementById('beneficiaryField2');
                 var c = document.getElementById('beneficiaryField4');
                 var d = document.getElementById('beneficiaryField5');
                 var wallet = document.getElementById('wallet');

                 var select  = document.getElementById('withdrawalMethod');

                 select.onchange =function(){

                   
                   if(select.value == 'Bank Transfer'){
                        $(a).show();
                        $(b).show();
                        $(c).show();
                        $(d).show();
                   }else{
                        $(a).hide();
                        $(b).hide();
                        $(c).hide();
                        $(d).hide();
                   }

                   if(select.value == 'Bitcoin'){
                        $(wallet).show();
                       
                   }else{
                        $(wallet).hide();
                       
                   }
                 }


               
               
               
               </script>



                </div>
                <div class="card-footer">
                  <div class="stats">
                    completely safe and secure
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <h4>Terms and Tips</h4>
                  </div>
                </div>

                <div class="card-body">
                  <div class="card-text row justify-content-start" style="text-align:left">
                    
                    <h6 style="color: #1E9FF2;" ><strong>Withdrawing Funds – How Does It Work? </strong></h6>

                      At tradecryptomax, we have designed our withdrawal process to be as easy as our funding process. To begin the withdrawal process first select your preferred withdrawal method and then type in the amount you want to withdraw and click "Proceed". <br><br>

                      <h6 style="color: #1E9FF2;"><strong>What Methods Are There For Withdrawal Of Funds? </strong></h6>
                      tradecryptomax provides five(5) withdrawal methods (Bitcoin, Skrill, Western Union, Money Gram and Direct Bank Transfer). <br><br>

                      <h6 style="color: #1E9FF2;"><strong>Must Withdrawal Requests Only Be Made At Certain Times? </strong></h6>
                      Requests for withdrawals can be made at any time via the tradecryptomax site. The requests will be processed immediately, and during the relevant financial institutions’ business hours.<br><br>

                      <h6 style="color: #1E9FF2;"><strong>Is There A Withdrawal Limit? </strong></h6>
                      Withdrawals are capped at the amount of funds that are currently in the account. <br><br>

                      <h6 style="color: #1E9FF2;"><strong>How Long Does It Take To Get My Money? </strong></h6>
                      Withdrawal requests are addressed and handled as quickly as possible.
      
                  </div>
                </div>

                <div class="card-footer">
                  <div class="stats">
                    make more with us
                  </div>
                </div>
              </div>




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
