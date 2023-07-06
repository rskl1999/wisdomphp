<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>transaction-history</title>
    <link rel="stylesheet" href="hr-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&amp;display=swap">
    <link rel="stylesheet" href="hr-assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="hr-assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="hr-assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="hr-assets/css/animate.min.css">
    <link rel="stylesheet" href="hr-assets/css/2-columns-media-image-video-carousel-map-2-columns-media1.css">
    <link rel="stylesheet" href="hr-assets/css/Bold-BS4-Animated-Back-To-Top.css">
    <link rel="stylesheet" href="hr-assets/css/Bootstrap-Cards-v2.css">
    <link rel="stylesheet" href="hr-assets/css/Documents-App-Browser.css">
    <link rel="stylesheet" href="hr-assets/css/iframe.css">
    <link rel="stylesheet" href="hr-assets/css/Navbar-Centered-Links-icons.css">
    <link rel="stylesheet" href="hr-assets/css/untitled.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-white topbar static-top">
        <div class="container-fluid"><img src="hr-assets/img/logo.png" width="150" height="31" style="width: 129px;height: 27px;">
            <ul class="navbar-nav flex-nowrap ms-auto">
                <li class="nav-item dropdown no-arrow">
                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><img class="border rounded-circle img-profile" src="hr-assets/img/avatars/side%20logo.png"></a>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div id="banner" style="height: 250px;background: url(&quot;hr-assets/img/New%20Project.jpg&quot;), #d3edff;">
        <div class="container d-flex align-items-center" style="height: 250px;">
            <div class="row">
                <div class="col-md-12">
                    <p style="font-family: Poppins, sans-serif;font-size: 39px;color: rgb(0,0,0);font-weight: bold;">Find the internship<br>of your&nbsp;<span style="color: #041aeb;font-weight: bold;">Dreams</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="nav-1">
        <div class="row d-flex d-xl-flex align-items-center align-items-xl-center" style="height: 73px;">
            <div class="col" style="margin: 0px 20px;"><a data-bss-hover-animate="pulse" href="applicant.php" style="padding: 0px 10px;color: rgb(0,23,235);font-family: Poppins, sans-serif;"><i class="fa fa-user" style="color: rgb(0,23,235);"></i>&nbsp;Applicant</a><a href="school-transaction.php" style="padding: 0px 10px;color: rgb(197,197,197);font-family: Poppins, sans-serif;"><i class="fa fa-folder-open" style="color: rgb(197,197,197);"></i><strong>&nbsp;</strong>Transaction</a></div>
        </div>
        <hr style="margin: 0px;color: rgb(197,197,197);">
    </div>
    <div id="main-content" style="padding-top: 24px;padding-bottom: 24px;">
        <div id="content">
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
                        <nav class="d-flex justify-content-center">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="nav2"></div>
    </div>
    <script src="hr-assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="hr-assets/js/bs-init.js"></script>
    <script src="hr-assets/js/2-columns-media-image-video-carousel-map-2-columns-media.js"></script>
    <script src="hr-assets/js/Bold-BS4-Animated-Back-To-Top-backtotop.js"></script>
    <script src="hr-assets/js/theme.js"></script>
</body>

</html>