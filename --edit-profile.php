<?php
   require_once('connection.php');
   session_start();
   // Retrieve user data from the database
   
   $userid =$_SESSION['accountID'];
   $sql = "SELECT *
            FROM schooltbl sc
            JOIN accounttbl a ON a.accountID = sc.accountID
            WHERE schoolid = $userid";
            
   $result = $con->query($sql);
      if ($result->num_rows > 0) {
         $row = $result->fetch_assoc();

         $name = $row['schoolName'];
         $email = $row['email'];
         $address = $row['address'];
         $contact_info = $row['contact_info'];
         $password = $row['pass'];
         $schoolLogo = $row['schoolLogo'];
      }

      // If form is submitted, update the user's profile in the database
      if (isset($_POST['save'])) {
         $schoolName = $_POST['name'];
         $email = $_POST['email'];
         $address = $_POST['address'];
         $contact_info = $_POST['email'];
         $schoolLogo = $row['avatar-file'];

            $image_name = $_FILES["avatar-file"]["name"];
            $image_tmp_name = $_FILES["avatar-file"]["tmp_name"];
            $image_type = $_FILES["avatar-file"]["type"];
            $image_size = $_FILES["avatar-file"]["size"];
          
            // Check if the user uploaded a new logo
            if($image_name != ''){
              $unique_id = uniqid(); // Generate unique identifier
              $image_extension = pathinfo($image_name, PATHINFO_EXTENSION); // Get the file extension
              $new_logo_name = $unique_id . '.' . $image_extension; // Create new file name with extension
              move_uploaded_file($image_tmp_name, "School-Logo/" . $new_logo_name);
            } else {
              // Use the existing logo
              $oLogo = $_SESSION['schoolLogo'];
            }
          
            // Update the School Role
            $stmt = $con->prepare("UPDATE accounttbl SET email=? WHERE email=?");
            $stmt->bind_param("ss", $passwordhash, $email);
            $stmt->execute();
          
            // Update the School information
            $stmt = $con->prepare("UPDATE schooltbl SET schoolName=?, address=?, contact_info=?, schoolLogo=? WHERE accountID=?");
            $stmt->bind_param("ssssi", $schoolName, $address, $contactno, $new_logo_name, $userID);
            $stmt->execute();
          
            $stmt->close();
            $con->close();
          
            // Update the session variables
            $_SESSION['success'] = "Account Updated Successfully";
            $_SESSION['logo'] = $oLogo;

            header("Location:school-dashboard.php");
          }
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
    <link rel="stylesheet" href="editProfile-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="editProfile-assets/css/styles.min.css">
</head>


<body><nav class="navbar navbar-light navbar-expand bg-white  topbar static-top">
    <div class="container-fluid"><a href="SchoolDashboard.html"><img src="school-assets/img/logo_black.png" width="140" height="29" /></a>
        <ul class="navbar-nav flex-nowrap ms-auto">
        </ul>
    </div>
</nav>
    <div id="banner" style="height: 150px;background: url(&quot;school-assets/img/banner-bg.png&quot;) center / cover no-repeat, #d3edff;"></div>
    <div class="container">
    <form style="padding: 10px 0px;" method="POST">
            <div class="row profile-row">
                <div class="col-md-4 relative">
                   <div class="avatar">
                      <div class="col d-flex d-xxl-flex justify-content-center justify-content-xxl-center"><img src="School-Logo/<?php echo $schoolLogo?>" style=""></div>
                   </div><input type="file" class="form-control" name="avatar-file" value="School-Logo/<?php echo $schoolLogo?>"
                      style="border-radius: 0px;border-width: 0px;border-color: rgba(85,85,85,0);" accept="image/*">
                </div>

                <div class="col-md-8" style="font-family: Poppins, sans-serif;">
                   <h3>Profile</h3>
                   <div class="row" id="schoolName">
                      <div class="col-md-12">
                         <div class="form-group"><label class="control-label"
                               style="font-family: Poppins, sans-serif;">School Name</label><input class="form-control"
                               name="schoolName" type="text" value="<?php echo $name?>" placeholder="School Name" style="height: 45px;border-radius: 35px;"
                               required=""></div>
                      </div>
                   </div>
                   <div class="row" id="schoolEmail">
                      <div class="col-md-12">
                         <div class="form-group"><label class="control-label"
                               style="font-family: Poppins, sans-serif;">Email</label><input class="form-control"
                               name="email" type="text" value="<?php echo $email ?>" placeholder="school.business@gmail.com"
                               style="height: 45px;border-radius: 35px;" required="" inputmode="email"></div>
                      </div>
                   </div>
                   <div class="row" id="schoolAddress">
                      <div class="col-md-12">
                         <div class="form-group"><label class="control-label"
                               style="font-family: Poppins, sans-serif;">Address</label><input class="form-control"
                               name="address" type="text" value="<?php echo $address ?>" placeholder="School Address" style="height: 45px;border-radius: 35px;"
                               required=""></div>
                      </div>
                   </div>
                   
                   <div class="row" id="schoolContact">
                      <div class="col-md-12">
                         <div class="form-group"><label class="control-label"
                               style="font-family: Poppins, sans-serif;">Contact Number</label><input class="form-control" 
                               name="" type="text" value="<?php echo $contact_info ?>" placeholder="Contact Number"
                               style="height: 45px;border-radius: 35px;" required="" inputmode="numeric" maxlength="11">
                         </div>
                      </div>
                   </div>
                   
                   <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-default" name="cancel" type="button" style="font-family: Poppins, sans-serif;width: 120px;background: rgba(0,23,235,0);color: #0017eb;height: 45px;border-radius: 35px;margin: 0px;margin-right: 20px;font-weight: bold;border-width: 2px;border-color: #0017eb;" onclick="location.href='school-dashboard.php';">Cancel</button>
                            <input class="btn btn-default" name="save" value="save" type="submit" style="font-family: Poppins, sans-serif;width: 120px;background: #0017eb;color: rgb(255,255,255);height: 45px;border-radius: 35px;margin: 0px;margin-right: 20px;border-width: 0px;" >
                      </div>
                   </div>
                </div>
             </div>
        </form>
      
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
    <script src="editProfile-assets/js/jquery.min.js"></script>
    <script src="editProfile-assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="editProfile-assets/js/script.min.js"></script>
</body>
</html>