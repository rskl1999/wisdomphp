<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student Profile</title>
    <link rel="stylesheet" href="student-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="student-assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="student-assets/css/Bootstrap-Cards-v2.css">
    <link rel="stylesheet" href="student-assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="student-assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="student-assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="student-assets/css/Profile-Edit-Form-styles.css">
    <link rel="stylesheet" href="student-assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="editProfile-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="editProfile-assets/css/styles.min.css">
</head>

<body><nav class="navbar navbar-light navbar-expand bg-white topbar static-top">
    <div class="container-fluid"><a href="StudentDashboard.php"><img src="student-assets/img/logo_black.png" width="140" height="29" /></a>
        <ul class="navbar-nav flex-nowrap ms-auto">
            <li class="nav-item dropdown no-arrow mx-1"></li>
            <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><img class="border rounded-circle img-profile" src="student-assets/img/avatars/avatar1.jpeg" /></a>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="StudentProfile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Edit Profile</a><a class="dropdown-item" href="StudentDashboard.php"><i class="fas fa-home fa-sm fa-fw me-2 text-gray-400"></i>Dashboard</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
    <div>
    <div id="banner" style="height: 150px;background: url(&quot;student-assets/img/banner-bg.png&quot;) center / cover no-repeat, #d3edff;"></div>
        <div class="container profile profile-view" id="profile" style="padding: 0px 20px;">
        <form>
            <div class="row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div>
                    <input type="file" class="form-control" name="avatar-file" style="border-radius: 0px;border-width: 0px;border-color: rgba(85,85,85,0);" accept="image/*">
                </div>
                <div class="col-md-8 mb-2" style="font-family: Poppins, sans-serif; font-weight:bold;color:#1C1C1C;">
                    <h3>Profile</h3>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label class="control-label" style="font-family: Poppins, sans-serif;">First Name</label>
                                <input class="form-control" type="text" placeholder="First Name" style="height: 45px;border-radius: 35px;" required="">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label class="control-label" style="font-family: Poppins, sans-serif;">Last Name</label>
                                <input class="form-control" type="text" placeholder="Last Name" style="height: 45px;border-radius: 35px;" required="">
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label class="control-label" style="font-family: Poppins, sans-serif;">Email</label>
                                <input class="form-control" type="text" placeholder="student.email@gmail.com" style="height: 45px;border-radius: 35px;" required="" inputmode="email">
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label class="control-label" style="font-family: Poppins, sans-serif;">Course/Strand</label>
                                <input class="form-control" type="text" placeholder="Course/Strand" style="height: 45px;border-radius: 35px;" required="">
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-group">
                                <label class="control-label" style="font-family: Poppins, sans-serif;">Password</label>
                                <input class="form-control" type="password" id="studentPassword" style="height: 45px;border-radius: 35px;" required="" minlength="8" maxlength="16" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <button class="btn btn-default" type="button" style="font-family: Poppins, sans-serif;width: 120px;background: rgba(0,23,235,0);color: #0017eb;height: 45px;border-radius: 35px;margin: 0px;margin-right: 20px;margin-top:20px;font-weight: bold;border-width: 2px;border-color: #0017eb;">Cancel</button>
                            <button class="btn btn-default" type="button" style="font-family: Poppins, sans-serif;width: 120px;background: #0017eb;color: rgb(255,255,255);height: 45px;border-radius: 35px;margin: 0px;margin-right: 20px;margin-top: 20px;border-width: 0px;">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Profile-Edit-Form-profile.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---1-Index-Table-with-Search--Sort-Filters.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---Material-UI-Actions.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
