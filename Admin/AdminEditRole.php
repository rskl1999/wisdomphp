<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>wisdom-1</title>
    <link rel="stylesheet" href="admin-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="admin-assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="admin-assets/css/Bootstrap-Cards-v2.css">
    <link rel="stylesheet" href="admin-assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="admin-assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="admin-assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="admin-assets/css/Profile-Edit-Form-styles.css">
    <link rel="stylesheet" href="admin-assets/css/Profile-Edit-Form.css">
</head>

<body style="color: rgb(0,0,0);">
    <nav class="navbar navbar-light navbar-expand bg-white  topbar static-top">
    <div class="container-fluid"><a href="StudentDashboard.php"><img src="assets/img/logo.png" width="140" height="29" /></a>
        <ul class="navbar-nav flex-nowrap ms-auto">
            <li class="nav-item dropdown no-arrow mx-1"></li>
            <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><img class="border rounded-circle img-profile" src="admin-assets/img/avatars/avatar1.jpeg" /></a>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="StudentProfile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Edit Profile</a><a class="dropdown-item" href="StudentDashboard.php"><i class="fas fa-home fa-sm fa-fw me-2 text-gray-400"></i>Dashboard</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout</a>
                    </div>
                </div>
            </li>
        </ul>
        </div>
        </nav>
        <div id="banner" style="height: 250px;background: url(&quot;assets/img/banner.jpg&quot;) center / cover no-repeat, #d3edff;">
        </div>
        <section id="admin-edit-acc">
            <form style="margin: 50px;">
                <div>
                    <div class="row" style="height: 110px;">
                        <div class="col" style="margin: 23px;margin-top: 5px;">
                            <div><label class="form-label" style="font-size: 16px;"><strong>First Name</strong></label></div>
                            <div><input class="form-control" type="text" style="border-radius: 25px;width: 100%;height: 50px;font-size: 16px;border: 1px solid #d1d3e2;" placeholder="First Name"></div>
                        </div>
                        <div class="col" style="margin: 23px;margin-top: 5px;">
                            <div><label class="form-label" style="font-size: 16px;"><strong>Last Name</strong></label></div>
                            <div><input class="form-control" type="text" style="border-radius: 25px;width: 100%;height: 50px;border: 1px solid #d1d3e2;" placeholder="Last Name"></div>
                        </div>
                    </div>
                    <div class="row" style="height: 110px;">
                        <div class="col" style="margin: 23px;margin-top: 5px;">
                            <div><label class="form-label" style="font-size: 16px;"><strong>Email</strong></label></div>
                            <div><input class="form-control" type="text" style="border-radius: 25px;width: 100%;height: 50px;border: 1px solid #d1d3e2;" placeholder="Email Address"></div>
                        </div>
                    </div>
                    <div class="row" style="height: 110px;">
                        <div class="col" style="margin: 23px;margin-top: 5px;">
                            <div><label class="form-label" style="font-size: 16px;"><strong>Account Role</strong></label></div>
                            <div class="dropdown" style="border-radius: 25px;width: 100%;height: 50px;color: #C7BABA;border: 1px solid #d1d3e2;"><button class="btn btn-primary disabled dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="color: var(--bs-black);background: rgb(255,255,255);border-style: none;margin: 5px;" disabled="">Account Role</button>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Student</a><a class="dropdown-item" href="#">School</a><a class="dropdown-item" href="#">Facilitator</a><a class="dropdown-item" href="#">Human Resource</a><a class="dropdown-item" href="#">Admin</a></div>
                            </div>
                            <div></div>
                        </div>
                        <div class="col" style="margin: 23px;margin-top: 5px;">
                            <div><label class="form-label" style="font-size: 16px;"><strong>Password</strong></label></div>
                            <div><input class="form-control" type="password" style="border-radius: 25px;width: 100%;height: 50px;border: 1px solid #d1d3e2;" placeholder="*************"></div>
                        </div>
                    </div>
                    <div class="row" style="height: 110px;">
                        <div class="col"><button class="btn btn-primary" type="button" style="margin: 25px;border-radius: 25px;width: 160px;height: 50px;margin-right: 0px;color: var(--bs-btn-bg);background: var(--bs-btn-disabled-color);border: 1px solid var(--bs-btn-bg);"><strong>Cancel</strong></button><button class="btn btn-primary" type="button" style="margin: 25px;border-radius: 25px;width: 160px;height: 50px;margin-right: 0px;"><strong>Save</strong></button></div>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
