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
    $schoolid = $_SESSION['schoolID'];

    // prepare statements
    $Numpending = $con->prepare("SELECT COUNT(st.studentID) AS pendingNum 
                             FROM student st 
                             JOIN school sc ON st.schoolID = sc.schoolID 
                             JOIN studentstatus sts ON sts.schoolID = sc.schoolID AND sts.studentID = st.studentID
                             WHERE sc.accountID = ? AND sts.status='pending'");

    $Numenrolled = $con->prepare("SELECT COUNT(st.studentID) AS enrolled 
                                FROM student st 
                                JOIN school sc ON st.schoolID = sc.schoolID 
                                JOIN studentstatus sts ON sts.schoolID = sc.schoolID AND sts.studentID = st.studentID
                                WHERE sc.accountID = ? AND sts.status='accepted'");

    $total = $con->prepare("SELECT COUNT(st.studentID) AS studTotal 
                            FROM student st 
                            JOIN school sc ON st.schoolID = sc.schoolID 
                            JOIN studentstatus sts ON sts.schoolID = sc.schoolID AND sts.studentID = st.studentID
                            WHERE sc.accountID = ? AND sts.status='finished' OR sts.status='accepted'");

    $schoolLogo = $con->prepare("SELECT schoolLogo, schoolID 
                                FROM school 
                                WHERE accountID = ?");
        
    
    $Numpending->bind_param("i", $accountid);
    $Numenrolled->bind_param("i", $accountid);
    $total->bind_param("i", $accountid);
    $schoolLogo->bind_param("i", $accountid);        


    // execute queries
    $Numpending->execute();
    $result = $Numpending->get_result();
    $row = $result->fetch_assoc();
    $Numpending->close();
    $pendingNum = $row['pendingNum'];

    $Numenrolled->execute();
    $result = $Numenrolled->get_result();
    $row = $result->fetch_assoc();
    $Numenrolled->close();
    $enrolled = $row['enrolled'];

    $total->execute();
    $result = $total->get_result();
    $row = $result->fetch_assoc();
    $total->close();
    $studentTotal = $row['studTotal'];

    $schoolLogo->execute();
    $result = $schoolLogo->get_result();
    $row = $result->fetch_assoc();
    $schoolLogo->close();
    $_SESSION['schoolLogo'] = $row['schoolLogo'];
    $_SESSION['schoolID'] = $row['schoolID'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SchoolPage</title>
    <link rel="stylesheet" href="school-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="school-assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="school-assets/css/Bootstrap-Cards-v2.css">
    <link rel="stylesheet" href="school-assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="school-assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="school-assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="school-assets/css/Profile-Edit-Form-styles.css">
    <link rel="stylesheet" href="school-assets/css/Profile-Edit-Form.css">
</head>

<body style="color: rgb(0,0,0);"><nav class="navbar navbar-light navbar-expand bg-white  topbar static-top">
    <div class="container-fluid"><a href="SchoolDashboard.php"><img src="school-assets/img/logo_black.png" width="140" height="29" /></a>
        <ul class="navbar-nav flex-nowrap ms-auto">
            <li class="nav-item d-flex justify-content-center align-items-center dropdown no-arrow mx-1"><a href="SchoolAddStudent.php"><button class="btn btn-primary" type="button" style="background: #0017eb;border-radius: 35px;width: 130px;">Add Student</button></a></li>
            <li class="nav-item dropdown no-arrow mx-1"></li>
            <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><img class="border rounded-circle img-profile" src="../School-Logo/<?php echo $_SESSION['schoolLogo'];?>" /></a>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="SchoolEditProfile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Edit Profile</a><a class="dropdown-item" href="SchoolDashboard.php"><i class="fas fa-home fa-sm fa-fw me-2 text-gray-400"></i>Dashboard</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
    <div id="banner" style="height: 250px;background: url(&quot;school-assets/img/banner-bg.png&quot;) center / cover no-repeat, #d3edff;">
        <div class="container" style="height: 250px;">
            <div class="row d-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" style="height: 100%;">
                <div class="col-md-12 text-center" style="width: 754px;">
                    <p class="d-flex d-xxl-flex justify-content-center justify-content-xxl-center" style="font-family: Poppins, sans-serif;font-size: 45px;margin-bottom: 0px;color: rgb(0,0,0);font-weight: bold;">Empower students for&nbsp;</p><span class="d-flex d-xxl-flex justify-content-center justify-content-xxl-center" style="font-size: 45px;font-family: Poppins, sans-serif;color: rgb(0,23,235);font-weight: bold;">success</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" id="numbers" style="padding: 60px 12px;">
        <div class="row">
            <div class="col-md-4 d-flex d-sm-flex justify-content-center justify-content-sm-center" id="totalStudent" style="margin-bottom: 12px;">
                <div style="height: 150px;width: 330px;background: #1b3996;color: rgb(255,255,255);font-family: Poppins, sans-serif;border-radius: 35px;">
                    <div class="row d-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" style="width: 100%;height: 100%;margin: 0px;font-size: 22px;padding: 0px 50px;">
                        <div class="col-md-6 d-flex d-sm-flex justify-content-center justify-content-sm-center">
                            <p style="margin: 0px;font-weight: bold;">Total Student</p>
                        </div>

                        <!-- Number of All Students -->
                        <div class="col-md-6 d-flex justify-content-center"><span style="font-size: 66px;font-weight: bold;"><?php echo $studentTotal ?></span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center" id="enrolledStudent" style="margin-bottom: 12px;">
                <div style="height: 150px;width: 330px;background: #5cb8ff;color: rgb(255,255,255);font-family: Poppins, sans-serif;border-radius: 35px;">
                    <div class="row d-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" style="width: 100%;height: 100%;margin: 0px;font-size: 22px;padding: 0px 50px;">
                        <div class="col-md-6 d-flex justify-content-center">
                            <p style="margin: 0px;font-weight: bold;">Enrolled Student</p>
                        </div>

                        <!-- Number of Enrolled Students -->
                        <div class="col-md-6 d-flex justify-content-center"><span style="font-size: 66px;font-weight: bold;"><?php echo $enrolled ?></span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex d-sm-flex justify-content-center justify-content-sm-center" id="pendingStudent" style="margin-bottom: 12px;">
                <div style="height: 150px;width: 330px;background: #95acb8;color: rgb(255,255,255);font-family: Poppins, sans-serif;border-radius: 35px;">
                    <div class="row d-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" style="width: 100%;height: 100%;margin: 0px;font-size: 22px;padding: 0px 50px;">
                        <div class="col-md-6 d-flex justify-content-center">
                            <p style="margin: 0px;font-weight: bold;">Pending Student</p>
                        </div>

                        <!-- Number of Pending Students -->
                        <div class="col-md-6 d-flex justify-content-center"><span style="font-size: 66px;font-weight: bold;"><?php echo $pendingNum ?></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="StudentTable" style="padding: 0px 50px;padding-bottom: 30px;">
        <h1 style="font-size: 30px;color: rgb(0,0,0);padding: 10px 5px;"><strong>Student</strong></h1>
        <div class="table-responsive" style="border: 1px solid rgb(227,230,240);font-family: Poppins, sans-serif;color: rgb(0,0,0);border-radius: 25px;padding: 0px;">
            <table class="table">
                <thead style="color: rgb(0,0,0);font-size: 13px;background: #f2f2f2;">
                    <tr style="margin: 5px;">
                        <th><input type="checkbox"></th>
                        <th>Student Name</th>
                        <th>Batch</th>
                        <th>Status</th>
                        <th>Course/Strand</th>
                        <th>Duration</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody style="color: rgb(0,0,0);font-size: 12px;">
                <?php
                    ///

                    echo "<br/>";
                    echo "SchoolId: ".$schoolid;
                    echo "<br/>";

                    ///

                    $page = isset($_GET['page']) ? abs(intval($_GET['page'])) : 1;

                    $items_per_page = 10;

                    // Counts students from current school 
                    $total_stud_query = "SELECT COUNT(studentID) FROM student WHERE schoolID = ?"; 
                    // Selects student details of those who applied in the internship
                    // $students = $con->prepare("SELECT DISTINCT
                    //                         st.studentName, st.course, a.dateSubmitted, st.studentID, b.batchID, 
                    //                         st.hoursRendered, sts.status, a.duration, ac.email 
                    //                     FROM 
                    //                         student st 
                    //                         JOIN internshipapplication a ON st.schoolID = a.schoolID
                    //                         JOIN account ac ON st.accountID = ac.accountID  
                    //                         JOIN school sc ON sc.schoolID = st.schoolID AND ac.accountID = sc.accountID
                    //                         JOIN batch b on b.batchID = a.batchID
                    //                         JOIN studentstatus sts ON sts.schoolID = sc.schoolID AND sts.studentID = st.studentID
                    //                     WHERE 
                    //                         st.schoolID = ?
                    //                     LIMIT ?, ?"); 
                    $students = $con->prepare("SELECT st.studentName, b.batchID, b.batchNo, sts.status, st.course, st.hoursRendered, a.duration, ac.email
                                            FROM student st
                                                JOIN internshipapplication a ON st.schoolID = a.schoolID
                                                JOIN school sc ON st.schoolID = sc.schoolID 
                                                JOIN batch b ON b.batchID = a.batchID
                                                JOIN studentstatus sts ON sts.schoolID = sc.schoolID AND sts.studentID = st.studentID
                                                JOIN account ac ON st.accountID = ac.accountID
                                            WHERE st.schoolID = ?
                                            LIMIT ?, ?");
                    // Execution of getting srudent count
                    $total_stud_stmt = $con->prepare($total_stud_query);
                    $total_stud_stmt->bind_param("i", $schoolid);
                    $total_stud_stmt->execute();
                    $total_stud_result = $total_stud_stmt->get_result();
                    $total_items = $total_stud_result->fetch_row()[0];

                    // Execution of getting students' details
                    $offset = ($page - 1) * $items_per_page;
                    $students->bind_param("iii", $schoolid, $offset, $items_per_page);
                    $students->execute();
                    $result = $students->get_result();

                    while($row = $result->fetch_assoc()) {
                        // Loop thru the details of each row ... 
                        foreach($row as $key=>$value) {
                            if($key == 'hoursRendered' & !$value){
                                    $value = 0;
                            }
                        }

                        echo "<br/>";
                        print_r($row);

                        // Print to website each student and their details
                        echo "
                            <tr>
                                <td><input type=\"checkbox\"></td>
                                <td>
                                    <p style=\"margin: 0px;\"><strong>".$row['studentName']."</strong></p><small>".$row['email']."</small>
                                </td>
                                <td>".$row['batchNo']."</td>
                                <td><span style=\"padding: 2px 14px;background: #d8ffdf;border-radius: 35px;color: #89c593;\">".$row['status']."</span></td>
                                <td>".$row['course']."</td>
                                <td>".$row['hoursRendered']."&nbsp;</td>
                                <td>".$row['duration']."</td>
                            </tr>
                        ";
                    }

                    $total_stud_stmt->close();
                    $students->close();  
                ?>
                </tbody>
            </table>

            <nav class="d-flex d-lg-flex justify-content-center justify-content-lg-center" style="padding: 20px 0px;">
                <ul class="pagination">
                    <?php
                        $total_pages = ceil($total_items / $items_per_page);

                        if ($total_pages > 1) {
                            // Validate the current page number
                            $page = max($page, 1);
                            $page = min($page, $total_pages);
                        
                            // Generate the "Previous" button link
                            $prev_page = $page - 1;
                            if ($prev_page >= 1) {
                                echo '<li class="page-item"><a class="page-link" aria-label="Previous" href="SchoolDashboard.php?page=' . $prev_page . '">«</a></li>';
                            }
                        
                            // Create the pagination links
                            for ($i = 1; $i <= $total_pages; $i++) {
                                if ($i == $page) {
                                    echo '<li class="page-item active"><a class="page-link" href="#StudentTable">' . $i. '</a></li>';
                                } else {
                                    echo '<li class="page-item"><a class="page-link" href="SchoolDashboard.php?page=' .$i. '">'.$i. '</a></li>';
                                }
                            }
                        
                            // Generate the "Next" button link
                            $next_page = $page + 1;
                            if ($next_page <= $total_pages) {
                                echo '<li class="page-item"><a class="page-link" aria-label="Next" href="SchoolDashboard.php?page=' . $next_page . '">»</a></li>';
                            }
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
    <script src="school-assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="school-assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---1-Index-Table-with-Search--Sort-Filters.js"></script>
    <script src="school-assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---Material-UI-Actions.js"></script>
    <script src="school-assets/js/Profile-Edit-Form-profile.js"></script>
    <script src="school-assets/js/theme.js"></script>
    <script src="school-assets/js/untitled.js"></script>
</body>

</html>