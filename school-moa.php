<?php
require_once('connection.php');
session_start();
            
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

        // Send email using PHPMailer
        require 'vendor/autoload.php';

$schoolLogo =$_SESSION['schoolLogo'];
        //Check Account ID if set
        if(isset($_SESSION['accountID'])){
            $accID = $_SESSION['accountID'];

            $sql ="SELECT accountID FROM accounttbl WHERE accountID = ?";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("i", $accID);
                $stmt->execute();
                $stmt->bind_result($accountID);
                $stmt->fetch();
                $stmt->close();
                
            if(!$accountID){
                header("Location:index.php");
            }
        }
        else{
            header("Location:index.php");
        }
    
        

    //if Upload is pressed
    if(isset($_POST['submit'])){

        
if (isset($_POST['submit'])) {
    // Count total files
    // Get total files count
    $countFiles = count($_FILES['file']['name']);
        
    // Loop through all files
    for ($i = 0; $i < $countFiles; $i++) {
        // Get the file name and type
        $filename = $_FILES['file']['name'][$i];
        $filetype = $_FILES['file']['type'][$i];

        // Upload file if it's a PDF or MP4
        if ($filetype == 'application/pdf' || $filetype == 'video/mp4') {
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], 'uploads/'.$filename)) {
                echo $filename.' uploaded successfully.<br>';

                // Insert file name into database
                $sql = "UPDATE schooltbl SET moa = '$filename' WHERE accountID = $accountID";
                if ($con->query($sql) === TRUE) {
                    echo "File name added to database.<br>";
                } else {
                    echo "Error adding file name to database: " . $con->error."<br>";
                }
            } else {
                echo 'Error uploading '.$filename.'<br>';
            }
        } else {
            echo 'Invalid file type for '.$filename.'<br>';
        }
    }
    } else {
    echo 'No files submitted.<br>';
    }
    $con->close();
        header('Location: internship-application.php');
    }    
          
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Memorandum of Agreement</title>
    <link rel="stylesheet" href="school-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="school-assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="school-assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="school-assets/css/Bootstrap-Cards-v2.css">
    <link rel="stylesheet" href="school-assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="school-assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="school-assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="school-assets/css/Profile-Edit-Form-styles.css">
    <link rel="stylesheet" href="school-assets/css/Profile-Edit-Form.css">
</head>

<body style="color: rgb(0,0,0);font-family: Poppins, sans-serif;">
<nav class="navbar navbar-light navbar-expand bg-white  topbar static-top">
    <div class="container-fluid"><a href="index.php"><img src="school-assets/img/logo_black.png" width="140" height="29" /></a>
        <ul class="navbar-nav flex-nowrap ms-auto">
            <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" ><img class="border rounded-circle img-profile" src="School-Logo/<?php echo $schoolLogo?>" /></a>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="edit-profile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Edit Profile</a><a class="dropdown-item" href="school-dashboard.php"><i class="fas fa-home fa-sm fa-fw me-2 text-gray-400"></i>Dashboard</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="index.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
    <div id="banner" style="height: 150px;background: url(&quot;school-assets/img/banner-bg.png&quot;) center / cover no-repeat, #d3edff;"></div>
    <form method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center">
                    <div class="card" style="width: 750px;margin: 20px 0px;border-radius: 0px;border-width: 0px;border-color: #0017eb;">
                        <h1 style="font-weight: bold;font-family: Poppins, sans-serif;">Memorandum of Agreement</h1>
                        <p style="font-family: Poppins, sans-serif;">Kindly submit the Memorandum of Agreement in <b>.PDF</b> format.</p>
                        <div class="card-body" style="border: 1px dashed #0017eb;background: #f9fff9;padding: 70px;"><i class="la la-cloud-upload d-flex d-xxl-flex justify-content-center justify-content-xxl-center" style="font-size: 100px;color: #0017eb;"></i>
                            <p class="d-flex d-xxl-flex justify-content-center justify-content-xxl-center"><strong>Upload Files :</strong>&nbsp;Supported formats: PDF</p>

                            <input class="form-control d-xxl-flex justify-content-xxl-center" type="file" name="file[]" multiple>
                        </div>

                        <div class="d-flex d-xxl-flex justify-content-end justify-content-xxl-end" id="buttons" style="padding: 20px 0px;">

                        <button class="btn btn-primary" name="discard" id="discard" type="submit" style="background: rgba(0,23,235,0);width: 150px;height: 45px;border-radius: 35px;margin-right: 25px;color: #0017eb;border-width: 2px;"><strong>Discard</strong></button>
                        <button class="btn btn-primary" type="submit" name="submit" style="background: #0017eb;width: 150px;height: 45px;border-radius: 35px;margin-right: 25px;">Submit</button>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


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
