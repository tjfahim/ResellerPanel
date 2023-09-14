
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="{{ asset('admin/assets/img/logo/logo.png')}}" alt="" /></a>
            <strong><img src="img/logo/logosn.png" alt="" /></strong>
        </div>
      
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
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
    </nav>
</div>