<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Layout</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md py-3" style="font-family: Poppins, sans-serif; box-shadow: 0px 0px 2px rgba(33,37,41,0.66);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="indexnew.php"><img src="assets/img/logo_black.png" width="140" height="29"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="About Us.php">About</a></li>

                    <li class="nav-item d-xxl-flex align-self-center justify-content-xxl-center align-items-xxl-center">
                        <div class="nav-item dropdown"><a class="dropdown-toggle text-decoration-none" aria-expanded="false" data-bs-toggle="dropdown" href="Individual Sub-Categories.php" style="color: rgba(0,0,0,0.55);">Categories</a>
                            <div class="dropdown-menu" style="padding: 40px 15px;width: 800px;max-width: 800px;min-width: 500px;margin-top: 15px;">
                               
                            <!-- <h1 class="text-uppercase" style="font-size: 14px;margin-left: 15px;font-weight: bold;">Computer Science and Information Technology</h1> -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 d-flex">
                                            <div></div><i class="fas fa-robot" style="font-size: 21px;color: #3448ff;width: 30px;"></i>
                                            <div style="margin-left: 10px;"><a href="Individual Sub-Categories.php#robotics" class="text-decoration-none">
                                                    <h1 style="font-size: 16px;font-weight: bold;color: rgb(0,0,0);">Robotics</h1>
                                                    <p style="margin-top: -7px;color: #677489;">Design, develop, and test robotic systems.</p>
                                                </a></div>
                                        </div>

                                        <div class="col-md-6 d-flex">
                                            <div></div><i class="fas fa-th-large" style="font-size: 21px;color: #3448ff;width: 30px;"></i>
                                            <div style="margin-left: 10px;"><a href="Individual Sub-Categories.php#3dprinting" class="text-decoration-none">
                                                    <h1 style="font-size: 16px;font-weight: bold;color: rgb(0,0,0);">3D Printing</h1>
                                                    <p style="margin-top: -7px;color: #677489;">Design, develop, and test robotic systems.</p>
                                                </a></div>
                                        </div>
                                        
                                        <div class="col-md-6 d-flex">
                                            <div></div><i class="fas fa-project-diagram" style="font-size: 21px;color: #3448ff;width: 30px;"></i>
                                            <div style="margin-left: 10px;"><a href="Individual Sub-Categories.php#programming" class="text-decoration-none">
                                                    <h1 style="font-size: 16px;font-weight: bold;color: rgb(0,0,0);">Programming</h1>
                                                    <p style="margin-top: -7px;color: #677489;">Implement user interfaces for websites.</p>
                                                </a></div>
                                        </div>
                                          
                                        <div class="col-md-6 d-flex">
                                            <div></div><i class="fas fa-th-large" style="font-size: 21px;color: #3448ff;width: 30px;"></i>
                                            <div style="margin-left: 10px;"><a href="Individual Sub-Categories.php#animation" class="text-decoration-none">
                                                    <h1 style="font-size: 16px;font-weight: bold;color: rgb(0,0,0);">Animation</h1>
                                                    <p style="margin-top: -7px;color: #677489;">Implement the server-side components of a website.</p>
                                                </a></div>
                                        </div>
                                        
                                        <div class="col-md-6 d-flex">
                                            <div></div><i class="fas fa-project-diagram" style="font-size: 21px;color: #3448ff;width: 30px;"></i>
                                            <div style="margin-left: 10px;"><a href="Individual Sub-Categories.php#graphicdesign" class="text-decoration-none">
                                                    <h1 style="font-size: 16px;font-weight: bold;color: rgb(0,0,0);">Graphic Design</h1>
                                                    <p style="margin-top: -7px;color: #677489;">Implement user interfaces for websites.</p>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="Alumni.php">Alumni</a></li>
                    <li class="nav-item"><a class="nav-link" href="ContactUs.php">Contact</a></li>
                </ul>
                <a href = "register.php"><button class="btn btn-primary" type="button" style="margin: 0px 15px;border-radius: 35px;margin-right: 1px; background: #0017eb;font-family: Poppins, sans-serif;width: 106.7812px;padding: 10px 16px;">Join Now</button></a>
                <a href = "login.php"><button class="btn btn-primary" type="button" style="margin: 0px 15px;border-radius: 35px;background: rgba(0,23,235,0);font-family: Poppins, sans-serif;width: 106.7812px;padding: 10px 16px;color: #0017eb;border-width: 2px;border-color: #0017eb;font-weight: bold;">Sign in</button></a>
            </div>
        </div>
    </nav>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---1-Index-Table-with-Search--Sort-Filters.js"></script>
    <script src="assets/js/Ludens---1-Index-Table-with-Search--Sort-Filters-v20-Ludens---Material-UI-Actions.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
