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

<body style="color: rgb(0,0,0);"><nav class="navbar navbar-light navbar-expand bg-white  topbar static-top">
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
    <div id="banner" style="height: 250px;background: url(assets/img/banner.jpg) center / cover no-repeat, #d3edff;">
    </div>
        <section id="table">
            <div class="container" style="border-color: rgb(233,78,80);">
                <h1 style="text-align: left;font-weight: bold;margin-bottom: 40px;margin-top: 30px;">Account Roles</h1>
                <div class="table-responsive" style="border-radius: 1.5rem;padding-top: 5px;border: 2px solid rgb(227,230,240);">
                    <table class="table">
                        <thead style="--bs-body-bg: #55565a;">
                            <tr style="--bs-body-bg: #55565a;height: 56.5px;">
                                <th style="padding-left: 30px;padding-right: 0px;padding-bottom: 15px;"><input type="checkbox" style="padding-bottom: 15px;"></th>
                                <th style="padding-bottom: 15px;">Account Name</th>
                                <th style="padding-bottom: 15px;width: 326.594px;">Email</th>
                                <th style="width: 155px;padding-bottom: 15px;">Role</th>
                                <th style="padding-bottom: 15px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding-left: 30px;padding-right: 0px;"><input type="checkbox"></td>
                                <td>
                                    <h1 style="font-size: 16px;">Account Name</h1>
                                </td>
                                <td>email@gmail.com</td>
                                <td>Student</td>
                                <td><button class="btn btn-primary" type="button" style="border-style: solid;border-radius: .75rem;width: 50px;padding: 10px;margin-right: 15px;"><i class="far fa-edit"></i></button><button class="btn btn-primary" type="button" style="background: rgb(233,78,80);border-radius: .75rem;width: 50px;padding: 10px;border-style: solid;border-color: #E94E50;"><i class="far fa-trash-alt"></i></button></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;padding-right: 0px;"><input type="checkbox"></td>
                                <td>
                                    <h1 style="font-size: 16px;">Account Name</h1>
                                </td>
                                <td>email@gmail.com</td>
                                <td>Student</td>
                                <td><button class="btn btn-primary" type="button" style="border-style: solid;border-radius: .75rem;width: 50px;padding: 10px;margin-right: 15px;"><i class="far fa-edit"></i></button><button class="btn btn-primary" type="button" style="background: rgb(233,78,80);border-radius: .75rem;width: 50px;padding: 10px;border-style: solid;border-color: #E94E50;"><i class="far fa-trash-alt"></i></button></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px;padding-right: 0px;"><input type="checkbox"></td>
                                <td>
                                    <h1 style="font-size: 16px;">Account Name</h1>
                                </td>
                                <td>email@gmail.com</td>
                                <td>Student</td>
                                <td><button class="btn btn-primary" type="button" style="border-style: solid;border-radius: .75rem;width: 50px;padding: 10px;margin-right: 15px;"><i class="far fa-edit"></i></button><button class="btn btn-primary" type="button" style="background: rgb(233,78,80);border-radius: .75rem;width: 50px;padding: 10px;border-style: solid;border-color: #E94E50;"><i class="far fa-trash-alt"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav class="text-center" style="margin-left: 40%;margin-top: 3%;margin-right: 40%;">
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
        </section>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
