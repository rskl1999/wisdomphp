<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Calendar</title>
    <link rel="stylesheet" href="calendar-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="calendar-assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="calendar-assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="calendar-assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="calendar-assets/style.css">
</head>

<body style="font-family: Poppins, sans-serif;">
    <nav class="navbar navbar-light navbar-expand bg-white  topbar static-top" style="box-shadow: 0px 0px 2px rgba(33,37,41,0.66);">
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

    <section style="margin-top: 60px;">
        <div class="col-md-9">
            <div class="row">
                <h2 style="margin-left: 70px;font-family: Poppins, sans-serif; font-size: 20px;">Calendar</h2> 
                    <div class="wrapper">
                        <div class="icons">
                            <h1 class="current-date" style="margin-left: 70px;font-family: Poppins,sans-serif; font-weight:bold;"></h1>
                            <span id="prev" class="material-symbols-rounded" style="margin-left: 63%;">&lsaquo;</span>
                            <span id="next" class="material-symbols-rounded" style="margin-left: 67%;">&rsaquo;</span>
                        </div>
                    <div class="calendar">
                    <ul class="weeks" style="margin-right:30px; margin-left:18px;">
                        <li>S</li>
                        <li>M</li>
                        <li>T</li>
                        <li>W</li>
                        <li>T</li>
                        <li>F</li>
                        <li>S</li>
                    </ul>
                    <ul class="days"></ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="calendar-assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="calendar-assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---1-Index-Table-with-Search--Sort-Filters.js"></script>
    <script src="calendar-assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---Material-UI-Actions.js"></script>
    <script src="calendar-assets/js/theme.js"></script>
    <script src="calendar-assets/script.js"></script>
</body>

</html>
