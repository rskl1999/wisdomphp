<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SchoolPage</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Cards-v2.css">
    <link rel="stylesheet" href="assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-styles.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
</head>

<body style="color: rgb(0,0,0);"><nav class="navbar navbar-light navbar-expand bg-white  topbar static-top">
    <div class="container-fluid"><img src="assets/img/logo_black.png" width="140" height="29" />
        <ul class="navbar-nav flex-nowrap ms-auto">
            <li class="nav-item d-flex justify-content-center align-items-center dropdown no-arrow mx-1"></li>
            <li class="nav-item dropdown no-arrow mx-1"></li>
            <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg" /></a>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="fas fa-home fa-sm fa-fw me-2 text-gray-400"></i>Dashboard</a><a class="dropdown-item" href="#"><i class="fas fa-location-arrow fa-sm fa-fw me-2 text-gray-400"></i> Get help</a><a class="dropdown-item" href="#"><i class="fas fa-location-arrow fa-sm fa-fw me-2 text-gray-400"></i> Activity log</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
    <div id="banner" style="height: 150px;background: url(&quot;assets/img/banner-bg.png&quot;) center / cover no-repeat, #d3edff;"></div>
    <div>
        <div class="container">
            <form style="padding: 31px;">
                <div id="ProgramAdviserInfo" style="padding: 40px 0px;">
                    <h3><strong>Program Adviser Information</strong></h3>
                    <div class="row d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="name">
                        <div class="col" id="fname"><label class="form-label"><strong>First Name</strong></label><input class="form-control" type="text" style="height: 45px;border-radius: 35px;" placeholder="First Name" required=""></div>
                        <div class="col" id="lname"><label class="form-label"><strong>Last Name</strong></label><input class="form-control" type="text" style="height: 45px;border-radius: 35px;" placeholder="Last Name" required=""></div>
                        <div class="col" id="blank"></div>
                    </div>
                    <div class="row" id="email">
                        <div class="col"><label class="form-label"><strong>Email</strong></label><input class="form-control" type="email" style="height: 45px;border-radius: 35px;" placeholder="Email" required=""></div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
                <div id="InternshipInfo" style="padding: 40px 0px;">
                    <h3><strong>Internship Information</strong></h3>
                    <div class="row">
                        <div class="col" id="program"><label class="form-label"><strong>Program</strong></label><input class="form-control" type="text" style="height: 45px;border-radius: 35px;" placeholder="Program" required=""></div>
                        <div class="col" id="duration"><label class="form-label"><strong>Duration</strong></label><input class="form-control" type="number" style="height: 45px;border-radius: 35px;" required="" min="100" max="500"></div>
                        <div class="col" id="blank-1"></div>
                    </div>
                </div>
                <div id="addStudent" style="padding: 40px 0px;">
                    <h3><strong>Add Student</strong></h3>
                    <div class="row">
                        <div class="col" id="program-1"><label class="form-label"><strong>First Name</strong></label><input class="form-control" type="text" style="height: 45px;border-radius: 35px;" placeholder="First Name" required=""></div>
                        <div class="col" id="program-3"><label class="form-label"><strong>Last Name</strong></label><input class="form-control" type="text" style="height: 45px;border-radius: 35px;" placeholder="Last Name" required=""></div>
                        <div class="col" id="program-2"><label class="form-label"><strong>Email&nbsp;</strong></label><input class="form-control" type="email" style="height: 45px;border-radius: 35px;" placeholder="Email" required=""></div>
                        <div class="col d-flex align-items-end align-content-start" id="blank-2"><button class="btn btn-primary" type="button" style="background: rgba(0,23,235,0);height: 45px;border-radius: 35px;border-width: 2px;border-color: #0017eb;color: #0017eb;margin: 0px 12px;width: 122px;"><strong>Remove</strong></button><button class="btn btn-primary" type="button" style="background: #0017eb;height: 45px;border-radius: 35px;border-width: 2px;border-color: #0017eb;color: #ffffff;margin: 0px 12px;width: 122px;"><strong>Add</strong></button></div>
                    </div>
                </div>
                <div id="buttons" style="padding: 40px 0px;"><button class="btn btn-primary" id="discard" type="button" style="background: rgba(0,23,235,0);width: 150px;height: 45px;border-radius: 35px;margin-right: 25px;color: #0017eb;border-width: 2px;"><strong>Discard</strong></button><button id="submit" class="btn btn-primary" type="button" style="background: #0017eb;width: 150px;height: 45px;border-radius: 35px;margin-right: 25px;">Submit</button></div>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---1-Index-Table-with-Search--Sort-Filters.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---Material-UI-Actions.js"></script>
    <script src="assets/js/Profile-Edit-Form-profile.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/alert.js"></script>
</body>

</html>