<?php 
$id='3$TY9C$5';$nm='3$TY9C$5';
if(!$this->session->userdata("logged_in") && !$this->session->userdata("role")=='Admin') redirect(base_url('login'));
else {$id=$this->session->userdata("id");
    $nm=''.$this->session->userdata("first_name").' '.$this->session->userdata("last_name");} 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mannat Themes">
        <meta name="keyword" content="">

        <title>EVTour Admin</title>

        <!-- Theme icon -->
        <!-- <link rel="shortcut icon" href="<?php echo base_url();?>assets/dashboard/images/favicon.ico"> -->

        <link href="<?php echo base_url();?>assets/dashboard/plugins/morris-chart/morris.css" rel="stylesheet">
        <!-- Theme Css -->
        <link href="<?php echo base_url();?>assets/dashboard/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/dashboard/css/slidebars.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/dashboard/css/icons.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/dashboard/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/dashboard/css/style.css" rel="stylesheet">
    </head>

    <body class="sticky-header">
        <section>
            <!-- sidebar left start-->
            <div class="sidebar-left">
                <div class="sidebar-left-info">

                    <div class="user-box">
                        <div class="d-flex justify-content-center">
                            <img src="<?php  echo base_url();?>assets/img/logo.png" alt="" class="img-fluid rounded-circle"> 
                        </div>
                        <div class="text-center text-white mt-2">
                            <p class="text-muted m-0">Admin</p>
                            <a href="<?php echo base_url('logout');?>">Logout</a>
                        </div>
                    </div>   
                                        
                    <!--sidebar nav start-->
                    <ul class="side-navigation">
                        <li>
                            <h3 class="navigation-title">Navigation</h3>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url('admin');?>"><i class="mdi mdi-gauge"></i> <span>Admin Dashboard</span></a>
                        </li>
                        
                        <li class="">
                            <a href="<?php echo base_url('admin/usermgmt');?>"><i class="mdi mdi-account-multiple-outline"></i> <span>User Managment</span></a>
                        </li>
                        
                        <li class="">
                            <a href="<?php echo base_url('admin/bookmgmt');?>"><i class="mdi mdi-book-open-variant"></i> <span>Bookings</span></a>
                        </li>
                        
                        <li class="">
                            <a href="<?php echo base_url('admin/tourmgmt');?>"><i class="mdi mdi-google-earth"></i> <span>Tours</span></a>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url('admin/panvrmgmt');?>"><i class="mdi mdi-google-earth"></i> <span>VR</span></a>
                        </li>


                         
                    </ul><!--sidebar nav end-->
                </div>
            </div><!-- sidebar left end-->

            <!-- body content start-->
            <div class="body-content">
                <!-- header section start-->
                <div class="header-section">
                    <!--logo and logo icon start-->
                    <div class="logo">
                        <a href="<?php echo base_url('admin');?>">
                            <!-- <span class="logo-img">
                                <img src="<?php echo base_url();?>assets/img/logo.png" alt="" height="26">
                            </span> -->
                            <!--<i class="fa fa-maxcdn"></i>-->
                            <span class="brand-name">EVTour</span>
                        </a>
                    </div>

                    <!--toggle button start-->
                    <a class="toggle-btn"><i class="ti ti-menu"></i></a>
                    <!--toggle button end-->

                    <!--mega menu start-->
                    <div id="navbar-collapse-1" class="navbar-collapse collapse mega-menu">
                        <ul class="nav navbar-nav">                           
                            <!-- Classic dropdown -->
                             
                             <!-- Classic list -->
                             
                        </ul>
                    </div>
                    <!--mega menu end-->

                    <div class="notification-wrap">
                        
                    </div>
                </div>
                <!-- header section end-->

                <div class="container-fluid">
                    <div class="page-head">
                        <h4 class="mt-2 mb-2">Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-3 col-sm-3">
                                   <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-3">
                                                <div class="text-center"><i class="ti ti-eye"></i></div>
                                            </div>
                                            <div class="col-3">
                                                <div class=" ">Tours</div>
                                            </div>
                                            <div class="col-6">
                                                <div class="dynamicbar"></div>  
                                            </div>
                                        </div>
                                   </div> 
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                   <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center text-center">
                                            <div class="col-4">
                                                <div class="text-center"><i class="ti ti-user"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="">User Management</div>
                                            </div> 
                                        </div>
                                   </div> 
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-4">
                                                <div class="text-center"><i class="ti ti-money"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="">Bookings</div>
                                            </div> 
                                        </div>
                                   </div> 
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-4">
                                                <div class="text-center"><i class="ti ti-wallet"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="">Attractions</div>
                                            </div> 
                                        </div>
                                   </div> 
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="row"> 
                        <div class="col-lg-12 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h5 class="header-title pb-3">Recent Contacts</h5>           
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>              
                                </div>
                            </div>
                        </div>

                        
                    </div>                            
                    
                </div><!--end container-->

                <!--footer section start-->
                <footer class="footer">
                    2021 &copy; EVTour.
                </footer>
                <!--footer section end-->


                
            </div>
            <!--end body content-->
        </section>

        <!-- jQuery -->
        <script src="<?php echo base_url();?>assets/dashboard/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/js/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/js/jquery-migrate.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/js/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/js/slidebars.min.js"></script>

        <!--plugins js-->
        <script src="<?php echo base_url();?>assets/dashboard/plugins/counter/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/pages/jquery.sparkline.init.js"></script>

        <script src="<?php echo base_url();?>assets/dashboard/plugins/chart-js/Chart.bundle.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/plugins/morris-chart/raphael-min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/plugins/morris-chart/morris.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/pages/dashboard-init.js"></script>


        <!--app js-->
        <script src="<?php echo base_url();?>assets/dashboard/js/jquery.app.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                delay: 100,
                time: 1200
                });
            });
        </script>
    </body>
</html>
