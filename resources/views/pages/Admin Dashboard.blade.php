<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="https://egov-initiativesuat.ict.go.ke/adminbackend/assets/images/favicon-32x32.png" type="image/png">
    <!--plugins-->
    <link href="Admin%20Dashboard_files/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <link href="{{asset('User Login ICTA_files/simplebar.css')}}" rel="stylesheet">
    <link href="{{asset('User Login ICTA_files/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href= "{{asset('User Login ICTA_files/metisMenu.min.css')}} " rel="stylesheet">
    <link href="Admin%20Dashboard_files/dataTables.bootstrap5.min.css" rel="stylesheet">


    <!-- loader-->
    <link href="{{asset('User Login ICTA_files/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('User Login ICTA_files/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('User Login ICTA_files/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('User Login ICTA_files/app.css')}}" rel="stylesheet">
    <link href="{{asset('User Login ICTA_files/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="Admin%20Dashboard_files/dark-theme.css">
    <link rel="stylesheet" href="Admin%20Dashboard_files/semi-dark.css">
    <link rel="stylesheet" href="Admin%20Dashboard_files/header-colors.css">
    
    <link rel="stylesheet" type="text/css" href="Admin%20Dashboard_files/toastr.css">
    <title>Admin Dashboard</title>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<body class="  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
    <div class="sidebar-header">
        <div>
            <img src="Admin%20Dashboard_files/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class="bx bx-arrow-to-left"></i>
        </div>
    </div>

    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="https://egov-initiativesuat.ict.go.ke/backend/dashboard">
                <div class="parent-icon"><i class="bx bx-cookie"></i>
                </div>
                <div class="menu-title">Dashboard</div>

            </a>
        </li>
        <li class="menu-label">User Management</li>
        <li>
            <a href="https://egov-initiativesuat.ict.go.ke/users">
                <div class="parent-icon"><i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Users</div>
            </a>

        </li>
            <li>
                <a href="https://egov-initiativesuat.ict.go.ke/users/secretariat">
                    <div class="parent-icon"><i class="bx bx-user"></i>
                    </div>
                    <div class="menu-title">Secretariat</div>
                </a>

            </li>
            <li>
                <a href="https://egov-initiativesuat.ict.go.ke/view-index">
                    <div class="parent-icon"><i class="bx bx-code"></i>
                    </div>
                    <div class="menu-title">Access Codes</div>
                </a>

            </li>








            <li class="menu-label">Event Attendees</li>
            <li>
                <a href="https://egov-initiativesuat.ict.go.ke/registered-users?export=pdf">
                    <div class="parent-icon"><i class="bx bxs-file-pdf"></i></div>
                    <div class="menu-title">Export as PDF</div>
                </a>
            </li>

            <li>
                <a href="https://egov-initiativesuat.ict.go.ke/registered-users?export=excel">
                    <div class="parent-icon"><i class="bx bxs-file-excel"></i></div>
                    <div class="menu-title">Export as Excel</div>
                </a>
            </li>


            <li class="menu-label">Data Systems Reports</li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-file"></i>
                    </div>
                    <div class="menu-title">Data Systems </div>
                </a>
                <ul>

                    <li> <a href="https://egov-initiativesuat.ict.go.ke/data-systems-reports/reports/members-presence"><i class="bx bx-right-arrow-alt"></i>Attendance Reports</a>
                    </li>
                    <li> <a href="https://egov-initiativesuat.ict.go.ke/data-systems-reports/reports/non-attendance"><i class="bx bx-right-arrow-alt"></i>Non Attendance Reports</a>
                    </li>
                    <li> <a href="https://egov-initiativesuat.ict.go.ke/data-systems-reports/reports/system-submissions"><i class="bx bx-right-arrow-alt"></i>System Submissions Report</a>
                    </li>
                    <li> <a href="https://egov-initiativesuat.ict.go.ke/data-systems-reports/system-submissions"><i class="bx bx-right-arrow-alt"></i>Full Report</a>
                    </li>
                    <li> <a href="https://egov-initiativesuat.ict.go.ke/data-systems-reports/system-summary"><i class="bx bx-right-arrow-alt"></i>Application Summary</a>
                    </li>

                    <li> <a href="https://egov-initiativesuat.ict.go.ke/full-details"><i class="bx bx-right-arrow-alt"></i>Detailed Full</a>
                    </li>

                </ul>
            </li>




    </ul>
    <!--end navigation-->
    <script>

    </script>


</div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 859px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class="bx bx-menu"></i>
            </div>
            <div class="search-bar flex-grow-1">
                <div class="position-relative search-bar-box">
                    <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class="bx bx-search"></i></span>
                    <span class="position-absolute top-50 search-close translate-middle-y"><i class="bx bx-x"></i></span>
                </div>
            </div>
            <div class="top-menu ms-auto">

            </div>
            
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="Admin%20Dashboard_files/no_image.jpg" class="user-img" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">Isabella</p>
                        <p class="designattion mb-0"></p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="https://egov-initiativesuat.ict.go.ke/admin/profile"><i class="bx bx-user"></i><span>Profile</span></a>
                    </li>
                    <li><a class="dropdown-item" href="https://egov-initiativesuat.ict.go.ke/admin/change/password"><i class="bx bx-cog"></i><span>Change Password</span></a>


                    </li><li><a class="dropdown-item" href="https://egov-initiativesuat.ict.go.ke/admin/logout"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
    <!--end header -->
    <!--start page wrapper -->
    <div class="page-wrapper">
            <div class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <!-- Total Registered Users -->
            <div class="col">
                <div class="card radius-10 bg-gradient-deepblue">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">563</h5>
                            <div class="ms-auto">
                                <i class="bx bx-user fs-3 text-white"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-white">Total Users</p>
                    </div>
                </div>
            </div>

            <!-- Total Registered Institutions -->
            <div class="col">
                <div class="card radius-10 bg-gradient-orange">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">525</h5>
                            <div class="ms-auto">
                                <i class="bx bx-buildings fs-3 text-white"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-white">Total Institutions</p>
                    </div>
                </div>
            </div>

            <!-- Total Registered Representatives (Vendors) -->
            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">0</h5>
                            <div class="ms-auto">
                                <i class="bx bx-user-check fs-3 text-white"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-white">Registered Representatives (Vendors)</p>
                    </div>
                </div>
            </div>

            <!-- Total Registered Systems -->
            <div class="col">
                <div class="card radius-10 bg-gradient-ibiza">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">5012</h5>
                            <div class="ms-auto">
                                <i class="bx bx-server fs-3 text-white"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-white">Total Systems Registered</p>
                    </div>
                </div>
            </div>
        </div> <!-- End row -->

        <!-- Hosting Type Breakdown -->
        <div class="row row-cols-1 row-cols-md-2">
            <!-- On-Premise Hosting -->
            <div class="col">
                <div class="card radius-10 bg-gradient-moonlit">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">2533</h5>
                            <div class="ms-auto">
                                <i class="bx bx-home fs-3 text-white"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-white">On-Premise Hosted Systems</p>
                    </div>
                </div>
            </div>

            <!-- Cloud Hosting Total -->
            <div class="col">
                <div class="card radius-10 bg-gradient-deepblue">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">2475</h5>
                            <div class="ms-auto">
                                <i class="bx bx-cloud fs-3 text-white"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-white">Cloud Hosted Systems</p>
                    </div>
                </div>
            </div>
        </div> <!-- End row -->

        <!-- Cloud Hosting Breakdown -->
        <div class="row row-cols-1 row-cols-md-2">
            <!-- Cloud Hosted Within Kenya -->
            <div class="col">
                <div class="card radius-10 bg-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">1240</h5>
                            <div class="ms-auto">
                                <i class="bx bx-world fs-3 text-white"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-white">Cloud Hosted Within Kenya</p>
                    </div>
                </div>
            </div>

            <!-- Cloud Hosted Outside Kenya -->
            <div class="col">
                <div class="card radius-10 bg-gradient-burning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">1234</h5>
                            <div class="ms-auto">
                                <i class="bx bx-globe fs-3 text-white"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-white">Cloud Hosted Outside Kenya</p>
                    </div>
                </div>
            </div>
        </div> <!-- End row -->

        <!-- Upcoming Hosting Contract Renewals -->
        <!-- Total Annual Spend on Systems -->
        <div class="row">
            <div class="col">
                <div class="card radius-10 bg-gradient-lush">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">Ksh 170,594,892.00</h5>
                            <div class="ms-auto">
                                <i class="bx bx-money fs-3 text-white"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-white">Total Annual Spend on Systems</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Top 5 Vendors -->
        <div class="card radius-10">
            <div class="card-body">
                <h5 class="mb-3">Top 5 Vendors (by Systems Supplied)</h5>
                <div class="table-responsive">
                    <table class="table table-striped text-center">
                        <thead>
                        <tr>
                            <th>Vendor</th>
                            <th>Systems Supplied</th>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td></td>
                                <td>9</td>
                            </tr>
                                                    <tr>
                                <td>Vendor WDaff</td>
                                <td>1</td>
                            </tr>
                                                    <tr>
                                <td>Vendor MmOIu</td>
                                <td>1</td>
                            </tr>
                                                    <tr>
                                <td>Vendor 3yezJ</td>
                                <td>1</td>
                            </tr>
                                                    <tr>
                                <td>Vendor qZeli</td>
                                <td>1</td>
                            </tr>
                                                </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- End Top Vendors Card -->
    </div>
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javascript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
    <p class="mb-0">Copyright © 2025. All rights reserved.</p>
</footer>

</div>
<!--end wrapper-->
<!--start switcher-->

<!--end switcher-->
<!-- Bootstrap JS -->
<script src="Admin%20Dashboard_files/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="Admin%20Dashboard_files/jquery.min.js"></script>
<script src="Admin%20Dashboard_files/simplebar.min.js"></script>
<script src="Admin%20Dashboard_files/metisMenu.min.js"></script>
<script src="Admin%20Dashboard_files/perfect-scrollbar.js"></script>
<script src="Admin%20Dashboard_files/Chart.min.js"></script>
<script src="Admin%20Dashboard_files/jquery-jvectormap-2.0.2.min.js"></script>
<script src="Admin%20Dashboard_files/jquery-jvectormap-world-mill-en.js"></script>
<script src="Admin%20Dashboard_files/jquery.easypiechart.min.js"></script>
<script src="Admin%20Dashboard_files/jquery.sparkline.min.js"></script>
<script src="Admin%20Dashboard_files/excanvas.js"></script>
<script src="Admin%20Dashboard_files/jquery.knob.js"></script>

<script src="Admin%20Dashboard_files/jquery.dataTables.min.js"></script>
<script src="Admin%20Dashboard_files/dataTables.bootstrap5.min.js"></script>

<script>
    $(function() {
        $(".knob").knob();
    });
</script>
<script src="Admin%20Dashboard_files/index.js"></script>
<!--app JS-->


<script type="text/javascript" src="Admin%20Dashboard_files/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );

        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>
<script>
    </script>
<script src="Admin%20Dashboard_files/app.js"></script>


</body></html>