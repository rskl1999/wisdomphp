<?php
   session_start();
   require_once('../connection.php');
   // Retrieve user data from the database

   if (isset($_SESSION['accountID'])) {
      $accountid = $_SESSION['accountID'];
      $userid = $_SESSION['schoolID'];
      
      $sql = "SELECT *
               FROM schooltbl sc
               JOIN accounttbl a ON a.accountID = sc.accountID
               WHERE schoolid = ?";
      
      $stmt = $con->prepare($sql);
      $stmt->bind_param("i", $userid);
      $stmt->execute();
      $result = $stmt->get_result();

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
      if (isset($_POST['submit'])) {
         $n_schoolName = $_POST['schoolName'];
         $n_email = $_POST['email'];
         $n_address = $_POST['address'];
         $n_contact_info = $_POST['email'];
         // If user uploaded a logo, load logo; if not, use saved image
         $n_schoolLogo = $_POST['avatar-file'] ? $_POST['avatar-file'] : $schoolLogo;

         $image_name = $_FILES["avatar-file"]["name"];
         $image_tmp_name = $_FILES["avatar-file"]["tmp_name"];
         $image_type = $_FILES["avatar-file"]["type"];
         $image_size = $_FILES["avatar-file"]["size"];

         // Check if the user uploaded a new logo
         if($_FILES['avatar-file']['error'] !== 4 || ($_FILES['avatar-file']['size'] !== 0 && $_FILES['avatar-file']['error'] !== 0)){
            $unique_id = uniqid(); // Generate unique identifier
            $image_extension = pathinfo($image_name, PATHINFO_EXTENSION); // Get the file extension
            $new_logo_name = $unique_id . '.png'; // Create new file name with extension
            move_uploaded_file($image_tmp_name, "../School-Logo/" . $new_logo_name);
            $n_schoolLogo = $new_logo_name;
            $_SESSION['schoolLogo'] = $new_logo_name; // Set new logo as Session Logo 
         } else {
            $displayedLogo = $_SESSION['schoolLogo'];
         }
         
         // Update the School Role
         $stmt = $con->prepare("UPDATE accounttbl SET email=? WHERE email=?");
         $stmt->bind_param("ss", $n_email, $email);
         $stmt->execute();
         
         // Update the School information
         $stmt = $con->prepare("UPDATE schooltbl SET schoolName=?, address=?, contact_info=?, schoolLogo=? WHERE accountID=?");
         $stmt->bind_param("ssssi", $n_schoolName, $n_address, $n_contact_info, $n_schoolLogo, $accountid);
         $stmt->execute();
         
         $stmt->close();
         $con->close();
         
         // Update the session variables
         $_SESSION['success'] = "Account Updated Successfully";


         header("Location:SchoolDashboard.php");
      }
      $displayedLogo = $_SESSION['schoolLogo'];
         
   } else {
      // Handle the case when the "accountID" key is not set in the session
      header("Location: ../index.php");
      exit(); // Terminate the script to prevent further execution
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
    <div class="container-fluid"><a href="SchoolDashboard.php"><img src="school-assets/img/logo_black.png" width="140" height="29" /></a>
        <ul class="navbar-nav flex-nowrap ms-auto">
            <li class="nav-item d-flex justify-content-center align-items-center dropdown no-arrow mx-1"><a href="SchoolAddStudent.php"><button class="btn btn-primary" type="button" style="background: #0017eb;border-radius: 35px;width: 130px;">Add Student</button></a></li>
            <li class="nav-item dropdown no-arrow mx-1"></li>
            <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><img class="border rounded-circle img-profile" src="../School-Logo/<?php echo $schoolLogo; ?>" /></a>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="SchoolEditProfile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Edit Profile</a><a class="dropdown-item" href="SchoolDashboard.php"><i class="fas fa-home fa-sm fa-fw me-2 text-gray-400"></i>Dashboard</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>

    <div id="banner" style="height: 150px;background: url(&quot;school-assets/img/banner-bg.png&quot;) center / cover no-repeat, #d3edff;"></div>
    <div class="container">
        <form style="padding: 10px 0px;" method="POST" enctype="multipart/form-data">
            <div class="row profile-row">

                <div class="col-md-4 relative">
                   <div class="avatar">
                        <img id="logoImage" src="../School-Logo/<?php echo $displayedLogo?>" style="">;
                  </div><input type="file" class="form-control" name="avatar-file"
                      style="border-radius: 0px;border-width: 0px;border-color: rgba(85,85,85,0);" accept="image/*">
                </div>

                <div class="col-md-8" style="font-family: Poppins, sans-serif;">
                   <h3>Profile </h3>
                   <div class="row" id="schoolName">
                      <div class="col-md-12">
                         <div class="form-group"><label class="control-label"
                               style="font-family: Poppins, sans-serif;">School Name</label>
                               <input class="form-control" name="schoolName"
                               type="text" value="<?php echo $name?>" style="height: 45px;border-radius: 35px;"
                               required=""></div>
                      </div>
                   </div>
                   <div class="row" id="schoolEmail">
                      <div class="col-md-12">
                         <div class="form-group"><label class="control-label"
                               style="font-family: Poppins, sans-serif;">Email</label>
                               <input class="form-control"
                               type="text" value="<?php echo $email?>" name="email"
                               style="height: 45px;border-radius: 35px;" required="" inputmode="email"></div>
                      </div>
                   </div>
                   <div class="row" id="schoolAddress">
                      <div class="col-md-12">
                         <div class="form-group"><label class="control-label"
                               style="font-family: Poppins, sans-serif;">Address</label>
                               <input class="form-control" name="address"
                               type="text" value="<?php echo $address ?>" style="height: 45px;border-radius: 35px;"
                               required=""></div>
                      </div>
                   </div>
                   <div class="row" id="schoolAddress-2">
                      <div class="col-md-12">
                         <div class="form-group"><label class="control-label"
                               style="font-family: Poppins, sans-serif;">Address</label>
                               <input class="form-control" name="address2"
                               type="text" value="<?php echo $address ?>" style="height: 45px;border-radius: 35px;"
                               required=""></div>
                      </div>
                   </div>
                   <div class="row" id="schoolContact">
                      <div class="col-md-12">
                         <div class="form-group"><label class="control-label"
                               style="font-family: Poppins, sans-serif;">Contact Number</label>
                               <input
                               class="form-control" type="text" value="<?php echo $contact_info ?>" name=""
                               style="height: 45px;border-radius: 35px;" required="" inputmode="numeric" maxlength="11">
                         </div>
                      </div>
                   </div>
                   <div class="row" id="2col" style="font-family: Poppins, sans-serif;">
                      <div class="col-md-6 col-sm-12" id="province" style="font-family: Poppins, sans-serif;">
                         <div class="form-group"><label class="control-label">Province</label><select
                               class="form-control" style="height: 45px;border-radius: 35px;" required>
                              <option value="" disabled selected>Select a Province</option>
                              <option value="Abra">Abra</option>
                              <option value="Agusan del Norte">Agusan del Norte</option>
                              <option value="Agusan del Sur">Agusan del Sur</option>
                              <option value="Aklan">Aklan</option>
                              <option value="Albay">Albay</option>
                              <option value="Antique">Antique</option>
                              <option value="Apayao">Apayao</option>
                              <option value="Aurora">Aurora</option>
                              <option value="Basilan">Basilan</option>
                              <option value="Bataan">Bataan</option>
                              <option value="Batanes">Batanes</option>
                              <option value="Batangas">Batangas</option>
                              <option value="Benguet">Benguet</option>
                              <option value="Biliran">Biliran</option>
                              <option value="Bohol">Bohol</option>
                              <option value="Bukidnon">Bukidnon</option>
                              <option value="Bulacan">Bulacan</option>
                              <option value="Cagayan">Cagayan</option>
                              <option value="Camarines Norte">Camarines Norte</option>
                              <option value="Camarines Sur">Camarines Sur</option>
                              <option value="Camiguin">Camiguin</option>
                              <option value="Capiz">Capiz</option>
                              <option value="Catanduanes">Catanduanes</option>
                              <option value="Cavite">Cavite</option>
                              <option value="Cebu">Cebu</option>
                              <option value="Compostela Valley">Compostela Valley</option>
                              <option value="Cotabato">Cotabato</option>
                              <option value="Davao de Oro">Davao de Oro</option>
                              <option value="Davao del Norte">Davao del Norte</option>
                              <option value="Davao del Sur">Davao del Sur</option>
                              <option value="Davao Occidental">Davao Occidental</option>
                              <option value="Davao Oriental">Davao Oriental</option>
                              <option value="Dinagat Islands">Dinagat Islands</option>
                              <option value="Eastern Samar">Eastern Samar</option>
                              <option value="Guimaras">Guimaras</option>
                              <option value="Ifugao">Ifugao</option>
                              <option value="Ilocos Norte">Ilocos Norte</option>
                              <option value="Ilocos Sur">Ilocos Sur</option>
                              <option value="Iloilo">Iloilo</option>
                              <option value="Isabela">Isabela</option>
                              <option value="Kalinga">Kalinga</option>
                              <option value="La Union">La Union</option>
                              <option value="Laguna">Laguna</option>
                              <option value="Lanao del Norte">Lanao del Norte</option>
                              <option value="Lanao del Sur">Lanao del Sur</option>
                              <option value="Leyte">Leyte</option>
                              <option value="Maguindanao">Maguindanao</option>
                              <option value="Marinduque">Marinduque</option>
                              <option value="Masbate">Masbate</option>
                              <option value="Mindoro Occidental">Mindoro Occidental</option>
                              <option value="Mindoro Oriental">Mindoro Oriental</option>
                              <option value="Misamis Occidental">Misamis Occidental</option>
                              <option value="Misamis Oriental">Misamis Oriental</option>
                              <option value="Mountain Province">Mountain Province</option>
                              <option value="Negros Occidental">Negros Occidental</option>
                              <option value="Negros Oriental">Negros Oriental</option>
                              <option value="North Cotabato">North Cotabato</option>
                              <option value="Northern Samar">Northern Samar</option>
                              <option value="Nueva Ecija">Nueva Ecija</option>
                              <option value="Nueva Vizcaya">Nueva Vizcaya</option>
                              <option value="Palawan">Palawan</option>
                              <option value="Pampanga">Pampanga</option>
                              <option value="Pangasinan">Pangasinan</option>
                              <option value="Quezon">Quezon</option>
                              <option value="Quirino">Quirino</option>
                              <option value="Rizal">Rizal</option>
                              <option value="Romblon">Romblon</option>
                              <option value="Samar">Samar</option>
                              <option value="Sarangani">Sarangani</option>
                              <option value="Siquijor">Siquijor</option>
                              <option value="Sorsogon">Sorsogon</option>
                              <option value="South Cotabato">South Cotabato</option>
                              <option value="Southern Leyte">Southern Leyte</option>
                              <option value="Sultan Kudarat">Sultan Kudarat</option>
                              <option value="Sulu">Sulu</option>
                              <option value="Surigao del Norte">Surigao del Norte</option>
                              <option value="Surigao del Sur">Surigao del Sur</option>
                              <option value="Tarlac">Tarlac</option>
                              <option value="Tawi-Tawi">Tawi-Tawi</option>
                              <option value="Zambales">Zambales</option>
                              <option value="Zamboanga del Norte">Zamboanga del Norte</option>
                              <option value="Zamboanga del Sur">Zamboanga del Sur</option>
                              <option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
                            </select></div>
                      </div>
                      <div class="col-md-6 col-sm-12" id="city" style="font-family: Poppins, sans-serif;">
                         <div class="form-group"><label class="control-label">City</label><select class="form-control"
                               style="height: 45px;border-radius: 35px;" required>
                              <option value="" disabled selected>Select a City</option>
                              <option value="Manila">Manila</option>
                              <option value="Quezon City">Quezon City</option>
                              <option value="Caloocan">Caloocan</option>
                              <option value="Davao City">Davao City</option>
                              <option value="Cebu City">Cebu City</option>
                              <option value="Zamboanga City">Zamboanga City</option>
                              <option value="Taguig">Taguig</option>
                              <option value="Pasig">Pasig</option>
                              <option value="Antipolo">Antipolo</option>
                              <option value="Valenzuela">Valenzuela</option>
                              <option value="Las Piñas">Las Piñas</option>
                              <option value="Makati">Makati</option>
                              <option value="Mandaluyong">Mandaluyong</option>
                              <option value="Marikina">Marikina</option>
                              <option value="Muntinlupa">Muntinlupa</option>
                              <option value="Navotas">Navotas</option>
                              <option value="Parañaque">Parañaque</option>
                              <option value="Pasay">Pasay</option>
                              <option value="San Juan">San Juan</option>
                              <option value="Tagaytay">Tagaytay</option>
                              <option value="Tarlac City">Tarlac City</option>
                              <option value="Lapu-Lapu City">Lapu-Lapu City</option>
                              <option value="Iloilo City">Iloilo City</option>
                              <option value="Baguio City">Baguio City</option>
                              <option value="Batangas City">Batangas City</option>
                              <option value="General Santos City">General Santos City</option>
                              <option value="Olongapo City">Olongapo City</option>
                              <option value="Puerto Princesa City">Puerto Princesa City</option>
                              <option value="Cagayan de Oro City">Cagayan de Oro City</option>
                              <option value="Bacolod City">Bacolod City</option>
                              <option value="Butuan City">Butuan City</option>
                              <option value="Cotabato City">Cotabato City</option>
                              <option value="Laoag City">Laoag City</option>
                              <option value="Naga City">Naga City</option>
                              <option value="Tacloban City">Tacloban City</option>
                              <option value="Zamboanga City">Zamboanga City</option>
                            </select></div>
                      </div>
                   </div>
                   <div class="row" id="Password">
                      <div class="col-md-12">
                         <div class="form-group"><label class="control-label"
                               style="font-family: Poppins, sans-serif;">Password</label><input class="form-control"
                               type="password" id="schoolPassword" style="height: 45px;border-radius: 35px;" required=""
                               minlength="8" maxlength="16" value="<?php echo $contact_info ?>"></div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                           <button class="btn btn-default" type="button" name="cancel"
                           style="font-family: Poppins, sans-serif;width: 120px;background: rgba(0,23,235,0);color: #0017eb;height: 45px;border-radius: 35px;margin: 0px;margin-right: 20px;font-weight: bold;border-width: 2px;border-color: #0017eb;">Cancel</button>
                           <button class="btn btn-default" type="submit" name="submit"
                           style="font-family: Poppins, sans-serif;width: 120px;background: #0017eb;color: rgb(255,255,255);height: 45px;border-radius: 35px;margin: 0px;margin-right: 20px;border-width: 0px;">
                           Save</button>
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