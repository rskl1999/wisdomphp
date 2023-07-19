<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Page Not Found - Brand</title>
    <link rel="stylesheet" href="admin-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="admin-assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="admin-assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="admin-assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="admin-assets/css/2-columns-media-image-video-carousel-map-2-columns-media1.css">
    <link rel="stylesheet" href="admin-assets/css/Bold-BS4-Animated-Back-To-Top.css">
    <link rel="stylesheet" href="admin-assets/css/Bootstrap-Cards-v2.css">
    <link rel="stylesheet" href="admin-assets/css/Documents-App-Browser.css">
    <link rel="stylesheet" href="admin-assets/css/iframe.css">
    <link rel="stylesheet" href="admin-assets/css/untitled.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #69c9ff;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="school-applicant.php">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span><img src="admin-assets/img/New%20Project%20(1).png" width="106" height="27"></span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="school-applicant.php"><i class="fa fa-briefcase"></i><span>School Applicant</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="daily-log.php"><i class="fa fa-pencil-square-o"></i><span>Intern Daily Log</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="calendar.php"><i class="fa fa-calendar-plus-o"></i><span>Intern Calendar</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="documentation.php"><i class="fa fa-folder-open"></i><span>Intern Documentation</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Company Name</span><img class="border rounded-circle img-profile" src="admin-assets/img/avatars/side%20logo.png" width="32" height="32"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="text-center" id="school-info" style="padding-right: 24px;padding-left: 24px;"><img style="width: 100px;" src="https://4.bp.blogspot.com/-YZxFNaiint4/WOL95a6PLkI/AAAAAAAAAMs/WgHDfKoN9ocGbcnooOb-tLmKLoAVt7GaACLcB/s1600/TIP%2BTECHNOLOGY%2BINSTITUTE%2BOF%2BTHE%2BPHILIPPINES.png">
                    <h5 id="school-name" style="color: rgb(0,0,0);font-weight: bold;padding-top: 5px;margin-bottom: 0px;">Technological Institute of the Philippines</h5>
                    <p id="school-location" style="margin-bottom: 0px;">363 Pascual Casal St, Quiapo, Manila</p>
                    <p id="school-email">manila@tip.edu.ph.</p>
                </div>
                <div id="body">
                    <div class="container">
                        <div class="card shadow">
                            <div class="card-header py-3" style="background: #f8f9fc;padding-top: 0px;height: 60px;">
                                <div class="row" style="background: #f8f9fc;">
                                    <div class="col-md-6 text-nowrap">
                                        <p class="text-primary m-0 fw-bold">Transaction History</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-md-end dataTables_filter" id="dataTable_filter">
                                            <p>Total Interns:<span id="intern-number" style="margin-left: 8px;">4</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                    <table class="table my-0" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Program</th>
                                                <th>Year</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Information Technology</td>
                                                <td>2023</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Computer Science</td>
                                                <td>2023</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Information Technology</td>
                                                <td>2022</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Computer Science</td>
                                                <td>2022</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr></tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="back-to-top"><a class="cd-top js-cd-top cd-top--fade-out cd-top--show" style="background-image: url(&quot;admin-assets/img/cd-top-arrow.svg&quot;);border-radius: 50px;" href="#0">Top</a></div>
        </div>
    </div>
    <script src="admin-assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin-assets/js/2-columns-media-image-video-carousel-map-2-columns-media.js"></script>
    <script src="admin-assets/js/Bold-BS4-Animated-Back-To-Top-backtotop.js"></script>
    <script src="admin-assets/js/theme.js"></script>
</body>

</html>