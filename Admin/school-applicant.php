<?php
    require_once('../connection.php');
    session_start();

    // Check if a registered account is logged in ...    
    if(isset($_SESSION['accountID'])){
        $accID = $_SESSION['accountID'];

        $sql = "SELECT accountID FROM account WHERE accountID = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $accID);
        $stmt->execute();
        $stmt->bind_result($accountID);
        $stmt->fetch();
        $stmt->close();

        // If account ID is not located in database ... return to index.php
        if(!$accountID){
            header("Location: ../index.php");
            exit(); // Added exit() to stop further execution
        }
    }
    // Else return to index.php
    else{
        header("Location: ../index.php");
        exit(); // Added exit() to stop further execution
    }

    $accountid = $_SESSION['accountID'];


    // Query For Schools and the no. of student applicants
    $school_query = $con->prepare("SELECT DISTINCT sc.schoolID, sc.schoolName, sc.address, sc.schoolLogo, ap.noStudents
                                FROM school sc
                                JOIN internshipapplication ap ON ap.schoolID = sc.schoolID
                                WHERE sc.schoolID > 0
                                ");
    $school_query->execute();
    $school_query_res = $school_query->get_result();
    // Store list of schools and their details
    $school_list = array();
    while($row = $school_query_res->fetch_assoc()) {
        // Clean
        if(empty($row['noStudents'])) {
            $row['noStudents'] = 0;
        }
        $school_list[] = $row;
    }
    // Trim duplicate schools and their total no of students together
    for($i = 0; $i < count($school_list); $i++) {
        for($j = $i+1; $j < count($school_list)-1; $j++) {
            if($school_list[$i]['schoolName'] == $school_list[$j]['schoolName']) {
                $school_list[$i]['noStudents'] += $school_list[$j]['noStudents'];
                array_splice($school_list, $j, 1);
                $j -= 1;
            }
        }
    }

    $school_query->close();
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Wisdom Admin</span><img class="border rounded-circle img-profile" src="admin-assets/img/avatars/side%20logo.png" width="32" height="32"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div id="heading" style="padding-right: 24px;padding-left: 24px;">
                    <h5 style="color: rgb(0,0,0);font-weight: bold;">School Applicant</h5>
                </div>
            </div>
            <div id="main-content"><div class="bootstrap_cards2">
                <div class="container py-5">
                    <?php
                        // TODO: redo this in javascript
                        $col_per_row = 2;
                        for($i = 0; $i < count($school_list); $i++) {
                            if($i % $col_per_row == 0) {
                                echo " <div class=\"row pb-5 mb-4\"> ";
                            }

                            echo "
                                <div class=\"col-lg-3 col-md-6 mb-4 mb-lg-0\">
                                    <div class=\"card shadow-sm border-0 rounded\">
                                        <div class=\"card-body p-0\">
                                            <a href=\"student-application.php?sch=".$school_list[$i]['schoolID']."\">
                                                <img src=\"../School-Logo/".$school_list[$i]['schoolLogo']."\" alt=\"\" class=\"w-100 card-img-top\">
                                            </a>
                                            <div class=\"p-4\">
                                                <a href=\"student-application.php?sch=".$school_list[$i]['schoolID']."\"><h5 class=\"mb-0\">".$school_list[$i]['schoolName']."</h5> </a>
                                                <p class=\"small text-muted\">".$school_list[$i]['address']."</p>
                                                
                                                <a href=\"student-application.php?sch=".$school_list[$i]['schoolID']."\">
                                                    <div class=\"pending\"><p><span class=\"pending-number\">".$school_list[$i]['noStudents']."</span> students pending</p></div>
                                                </a>
                                                <a href=\"transaction.php?sch=".$school_list[$i]['schoolID']."\">
                                                    <div class=\"transaction\">
                                                        <p>View Transaction History</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                            if($i % $col_per_row == 0) {
                                echo "</div>";
                            }
                        }
                    ?>
                    <!-- Second Row [Team]-->
                    <!--
                    <div class="row pb-5 mb-4">

                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                            <div class="card shadow-sm border-0 rounded">
                                <div class="card-body p-0">
                                    <a href="student-application.php">
                                        <img src="https://www.seekpng.com/png/detail/100-1007713_plm-logo-pamantasan-ng-lungsod-ng-maynila-logo.png" alt="" class="w-100 card-img-top">
                                    </a>
                                    <div class="p-4">
                                        <a href="student-application.php"><h5 class="mb-0">Pamantasan ng Lungsod ng Maynila</h5> </a>
                                        <p class="small text-muted">General Luna, corner Muralla St, Intramuros, Manila</p>
                                        
                                        <a href="student-application.php">
                                            <div class="pending"><p><span class="pending-number">10</span> students pending</p></div>
                                        </a>
                                        <a href="transaction.php">
                                            <div class="transaction">
                                                <p>View Transaction History</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                            <div class="card shadow-sm border-0 rounded">
                                <div class="card-body p-0">
                                    <a href="student-application.php">
                                        <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t1.18169-9/487834_368971733174539_1914724478_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=174925&_nc_ohc=hEeEWL2hxHwAX--_X15&_nc_ht=scontent.fmnl15-1.fna&oh=00_AfAyPcZAsGkRH-XU6Vg6iH9p4AlVRCNmtVt4b67qbLes5w&oe=6430D966" alt="" class="w-100 card-img-top">
                                    </a>   
                                    <div class="p-4">
                                        <a href="student-application.php"><h5 class="mb-0">Technological Institute of the Philippines</h5> </a>
                                        <p class="small text-muted">363 Pascual Casal St, Quiapo, Manila</p>
                                        
                                        <a href="student-application.php">
                                            <div class="pending"><p><span class="pending-number">10</span> students pending</p></div>
                                        </a>
                                        <a href="transaction.php">
                                            <div class="transaction">
                                                <p>View Transaction History</p>
                                            </div>
                                        </a>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                            <div class="card shadow-sm border-0 rounded">
                                <div class="card-body p-0">
                                    <a href="student-application.php">
                                    <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t39.30808-6/304876520_452370496913886_1208855622441055407_n.png?_nc_cat=100&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=aPmDYa4n8jAAX9-UpuR&_nc_ht=scontent.fmnl15-1.fna&oh=00_AfBxEAyKN349XF8MfMwaVmaA7dv-hF4Y1Lx3edCuSCgl5A&oe=64136CCB" alt="" class="w-100 card-img-top">
                                    </a>
                                    <div class="p-4">
                                        <a href="student-application.php"><h5 class="mb-0">Our Lady of the Sacred Heart College of Guimba, Inc.</h5> </a>
                                        <p class="small text-muted">Afan Salvador St. Guimba Nueva Ecija</p>
                                        
                                        <a href="student-application.php">
                                            <div class="pending"><p><span class="pending-number">10</span> students pending</p></div>
                                        </a>
                                        <a href="transaction.php">
                                            <div class="transaction">
                                                <p>View Transaction History</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <script src="admin-assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin-assets/js/2-columns-media-image-video-carousel-map-2-columns-media.js"></script>
    <script src="admin-assets/js/Bold-BS4-Animated-Back-To-Top-backtotop.js"></script>
    <script src="admin-assets/js/theme.js"></script>
</body>

</html>
