<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">

    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/font-awesome.min.css') }}">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/nalika-icon.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/responsive.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('admin/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <style>
        /* Add your styles for night mode here */
        body.night-mode {
            background-color: white; /* Change this to your desired night mode background color */
            color: black; /* Change text color for night mode if needed */
            min-height: 110vh;
        }
       .nightmoodtextcolor {
        color: #007BFF;
        font-weight: 800; /* Change text color for elements with the nightmoodtextcolor class in night mode */
    }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Start Welcome area -->
    @include('layouts.includes.sidebar')

    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                               
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-gear"></i></a>

                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab" href="#Settings">Settings</a>
                                                            </li>
                                                          
                                                        </ul>

                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Settings" class="tab-pane fade in active">
                                                                <div class="setting-panel-area">
                                                                    <div class="note-heading-indicate">
                                                                        <h2> Settings Panel</h2>
                                                                    </div>
                                                                    <ul class="setting-panel-list">
                                                                    
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Day Mode</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                            <label class="onoffswitch-label" for="example4">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                      
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                          
                                                          
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <hr style="margin: 1px 0;">

                    <li class="nav-item">
                            <a class="" href="index.html">
                                <img src="img/notification/4.jpg" alt="" style="width: 50px; height: 40px; border-radius: 40%;">
                                <span class="admin-name">Advanda</span>
                             </a>
                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                            <li><a href="#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                            </li>
                            <li><a href="#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                            </li>
                        </ul>
                    </li>
                    <hr style="margin: 1px 0;">
                    <li>
                        <a class="" href="{{ route('dashboard.home') }}" aria-expanded="false"><i class="icon nalika-home icon-wrap"></i> <span class="mini-click-non">Dashboard</span></a>
                        
                    </li>   
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Licenses</span></a>
                        <ul class="submenu-angle" aria-expanded="false">    
                            <li><a title="License List" href="{{ route('licenses_list') }}"><span class="mini-sub-pro">License List</span></a></li>
                            <li><a title="Order New License" href="{{ route('license_add') }}"><span class="mini-sub-pro">Order New License</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-folder icon-wrap"></i> <span class="mini-click-non">Wallet</span></a>
                       
                    </li>
                    <li>
                        <a class="" href="#" aria-expanded="false"><i class="icon nalika-ppt icon-wrap"></i> <span class="mini-click-non">Invoices</span></a>
                      
                    </li>
                    <li>
                        <a class=""  href="{{ route('free_trial') }}" aria-expanded="false"><i class="icon nalika-eye icon-wrap"></i> <span class="mini-click-non">Free Trial</span></a>
                      
                    </li>
                    <li>
                        <a class="" href="{{ route('files_guide') }}" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Files & Guide</span></a>
                        
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><i  class="icon nalika-user icon-wrap"></i> <span class="mini-click-non">Account</span></a>
                        
                    </li>
                    <li>
                        <a class="" href="#" aria-expanded="false"><i class="icon nalika-smartphone-call icon-wrap"></i> <span class="mini-click-non">Logout</span></a>
                        
                    </li>
                    
                              
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<script>
    // JavaScript to toggle night mode and store the state in localStorage
    const checkbox = document.getElementById('example4');
    const dayMode = localStorage.getItem('dayMode');
    const textElement = document.querySelector('.nightmoodtextcolor');


    if (dayMode === 'enabled') {
        document.body.classList.add('night-mode');
        checkbox.checked = true;
    }
 
    checkbox.addEventListener('change', function() {
        if (checkbox.checked) {
            document.body.classList.add('night-mode');
            localStorage.setItem('dayMode', 'enabled');
        } else {
            document.body.classList.remove('night-mode');
            localStorage.setItem('dayMode', 'disabled');
        }
    });
</script>
        