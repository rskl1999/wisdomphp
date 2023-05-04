<?php
    if(isset($_POST['signin'])){
        header('Location: login.php');
    }
    session_start();
    unset($_SESSION['accountID']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>wisdom</title>
    <link rel="stylesheet" href="landing-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700&amp;display=swap">
    <link rel="stylesheet" href="landing-assets/css/swiper-icons.css">
    <link rel="stylesheet" href="landing-assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="landing-assets/css/Features-Cards-icons.css">
    <link rel="stylesheet" href="landing-assets/css/Simple-Slider-swiper-bundle.min.css">
    <link rel="stylesheet" href="landing-assets/css/Simple-Slider.css">
</head>

<body style="font-family: Poppins, sans-serif;">
    <nav class="navbar navbar-light navbar-expand-md py-3" style="font-family: Poppins, sans-serif;box-shadow: 0px 0px 1px rgba(33,37,41,0.66);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="landing-assets/img/logo_black.png" width="140" height="29"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul><button class="btn btn-primary" type="submit" style="margin: 0px 15px;border-radius: 35px;background: #0017eb;font-family: Poppins, sans-serif;width: 106.7812px;padding: 10px 16px;" onclick="location.href='register.php';" >Join Now</button>
                <button name="signin" class="btn btn-primary" type="button" style="margin: 0px 15px;border-radius: 35px;background: rgba(0,23,235,0);font-family: Poppins, sans-serif;width: 106.7812px;padding: 10px 16px;color: #0017eb;border-width: 2px;border-color: #0017eb;font-weight: bold;" onclick="location.href='login.php';">Sign in</button>

            </div>
        </div>
    </nav>
    <section style="background: url(&quot;landing-assets/img/landing_header.svg&quot;);height: 1100px;">
        <section class="py-4 py-xl-5">
            <div class="container h-100" style="margin-top: 5rem;">
                <div class="row h-100">
                    <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div>
                            <h1 style="font-weight: bold;width: auto;font-size: 60px;">Find the internship of your&nbsp;<span style="color: #0017EB;">Dreams</span></h1>
                            <p class="mb-4" style="font-size: 22px;max-width: 40rem;margin: 0 auto;">Discover your ideal internship and work with professionals. Explore opportunities that fit your goals today!</p><button class="btn btn-primary fs-5 fw-semibold me-2 py-2 px-4" type="button" style="background: #0017EB;border-radius: 5REM;margin-top: 1rem;">Join Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container" style="margin-top: 7rem;max-width: 960px;">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <h4 style="color: rgb(0,23,235);font-family: Poppins, sans-serif;font-size: 20px;margin-bottom: -2px;">Choose Categories</h4>
                    <h1 class="fw-semibold" style="width: auto;font-weight: bold;">Internship Opportunities</h1>
                </div>
            </div>
            <div class="row row-cols-2">
                <div class="col-md-3" style="margin-top: 1rem;"><a href="#">
                        <div class="card" style="border-style: none;box-shadow: inset 0px 3px 8px 0px rgb(215,215,215);border-radius: 15px;">
                            <div class="card-body" style="height: 100px;padding: 20px;"><i class="fas fa-comments-dollar" style="font-size: 35px;color: rgb(0,23,235);"></i>
                                <div style="display: inline-block;position: absolute;margin-right: 1rem;margin-left: 10px;"><span class="fw-semibold" style="font-family: Poppins, sans-serif;font-size: 16px;color: rgb(0,0,0);">Marketing &amp; Communication</span>
                                    <h6 class="fw-lighter text-muted mb-2" style="font-family: Poppins, sans-serif;font-size: 15px;">12 Jobs Available</h6>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-md-3" style="margin-top: 1rem;"><a href="#">
                        <div class="card" style="border-style: none;box-shadow: inset 0px 3px 8px 0px rgb(215,215,215);border-radius: 15px;">
                            <div class="card-body" style="height: 100px;padding: 20px;"><i class="fas fa-pen-nib" style="font-size: 35px;color: rgb(0,23,235);"></i>
                                <div style="display: inline-block;position: absolute;margin-right: 1rem;margin-left: 10px;"><span class="fw-semibold" style="font-family: Poppins, sans-serif;font-size: 16px;color: rgb(0,0,0);">UI/UX Design</span>
                                    <h6 class="fw-lighter text-muted mb-2" style="font-family: Poppins, sans-serif;font-size: 15px;">12 Jobs Available</h6>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-md-3" style="margin-top: 1rem;"><a href="#">
                        <div class="card" style="border-style: none;box-shadow: inset 0px 3px 8px 0px rgb(215,215,215);border-radius: 15px;">
                            <div class="card-body" style="height: 100px;padding: 20px;"><i class="fas fa-donate" style="font-size: 35px;color: rgb(0,23,235);"></i>
                                <div style="display: inline-block;position: absolute;margin-right: 1rem;margin-left: 10px;"><span class="fw-semibold" style="font-family: Poppins, sans-serif;font-size: 16px;color: rgb(0,0,0);">Finance Management</span>
                                    <h6 class="fw-lighter text-muted mb-2" style="font-family: Poppins, sans-serif;font-size: 15px;">12 Jobs Available</h6>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-md-3" style="margin-top: 1rem;"><a href="#">
                        <div class="card" style="border-style: none;box-shadow: inset 0px 3px 8px 0px rgb(215,215,215);border-radius: 15px;">
                            <div class="card-body" style="height: 100px;padding: 20px;"><i class="far fa-window-restore" style="font-size: 35px;color: rgb(0,23,235);"></i>
                                <div style="display: inline-block;position: absolute;margin-right: 1rem;margin-left: 10px;"><span class="fw-semibold" style="font-family: Poppins, sans-serif;font-size: 16px;color: rgb(0,0,0);">Web Development</span>
                                    <h6 class="fw-lighter text-muted mb-2" style="font-family: Poppins, sans-serif;font-size: 15px;">12 Jobs Available</h6>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="row row-cols-2" style="height: auto;">
                <div class="col-md-3" style="margin-top: 1rem;"><a href="#">
                        <div class="card" style="border-style: none;box-shadow: inset 0px 3px 8px 0px rgb(215,215,215);border-radius: 15px;">
                            <div class="card-body" style="height: 100px;padding: 20px;"><i class="far fa-folder-open" style="font-size: 35px;color: rgb(0,23,235);"></i>
                                <div style="display: inline-block;position: absolute;margin-right: 1rem;margin-left: 10px;"><span class="fw-semibold" style="font-family: Poppins, sans-serif;font-size: 16px;color: rgb(0,0,0);">Project Management</span>
                                    <h6 class="fw-lighter text-muted mb-2" style="font-family: Poppins, sans-serif;font-size: 15px;">12 Jobs Available</h6>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-md-3" style="margin-top: 1rem;"><a href="#">
                        <div class="card" style="border-style: none;box-shadow: inset 0px 3px 8px 0px rgb(215,215,215);border-radius: 15px;">
                            <div class="card-body" style="height: 100px;padding: 20px;"><i class="far fa-handshake" style="font-size: 35px;color: rgb(0,23,235);"></i>
                                <div style="display: inline-block;position: absolute;margin-right: 1rem;margin-left: 10px;"><span class="fw-semibold" style="font-family: Poppins, sans-serif;font-size: 16px;color: rgb(0,0,0);">Business &amp; Consulting</span>
                                    <h6 class="fw-lighter text-muted mb-2" style="font-family: Poppins, sans-serif;font-size: 15px;">12 Jobs Available</h6>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-md-3" style="margin-top: 1rem;"><a href="#">
                        <div class="card" style="border-style: none;box-shadow: inset 0px 3px 8px 0px rgb(215,215,215);border-radius: 15px;">
                            <div class="card-body" style="height: 100px;padding: 20px;"><i class="fas fa-paint-brush" style="font-size: 35px;color: rgb(0,23,235);"></i>
                                <div style="display: inline-block;position: absolute;margin-right: 1rem;margin-left: 10px;"><span class="fw-semibold" style="font-family: Poppins, sans-serif;font-size: 16px;color: rgb(0,0,0);">Graphic Designer</span>
                                    <h6 class="fw-lighter text-muted mb-2" style="font-family: Poppins, sans-serif;font-size: 15px;">12 Jobs Available</h6>
                                </div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-md-3" style="margin-top: 1rem;"><a href="#">
                        <div class="card" style="border-style: none;box-shadow: inset 0px 3px 8px 0px rgb(215,215,215);border-radius: 15px;">
                            <div class="card-body" style="height: 100px;padding: 20px;"><i class="fas fa-photo-video" style="font-size: 35px;color: rgb(0,23,235);"></i>
                                <div style="display: inline-block;position: absolute;margin-right: 1rem;margin-left: 10px;"><span class="fw-semibold" style="font-family: Poppins, sans-serif;font-size: 16px;color: rgb(0,0,0);">Video Editor</span>
                                    <h6 class="fw-lighter text-muted mb-2" style="font-family: Poppins, sans-serif;font-size: 15px;">12 Jobs Available</h6>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
        </div>
        <section style="margin-top: 8rem;">
            <div class="container" style="width: 1319px;max-width: 960px;">
                <h1 style="font-weight: bold;text-align: left;font-size: 30px;">Category Name</h1>
                <div class="simple-slider" style="height: 300px;">
                    <div class="swiper-container" style="height: 300px;">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="border-radius: 15px;max-width: 300px;text-align: center;"><img style="object-fit: cover;max-height: 250px;max-width: 300px;width: 230px;height: 300px;border-radius: 15px;" src="landing-assets/img/110fc1dea3e8b545e38032234c8429a3.webp">
                                <h1 style="font-size: 20px;max-width: 300px;margin-top: 5px;">Heading</h1>
                            </div>
                            <div class="swiper-slide" style="border-radius: 15px;max-width: 300px;text-align: center;"><img style="object-fit: cover;max-height: 250px;max-width: 300px;width: 230px;height: 300px;border-radius: 15px;" src="landing-assets/img/871e92918540e90fd109da16f40728b4.webp">
                                <h1 style="font-size: 20px;max-width: 300px;margin-top: 5px;">Heading</h1>
                            </div>
                            <div class="swiper-slide" style="border-radius: 15px;max-width: 300px;text-align: center;"><img style="object-fit: cover;max-height: 250px;max-width: 300px;width: 230px;height: 300px;border-radius: 15px;" src="landing-assets/img/fb987f28c2efeaaeea5c33378f7d189b.webp">
                                <h1 style="font-size: 20px;max-width: 300px;margin-top: 5px;">Heading</h1>
                            </div>
                            <div class="swiper-slide" style="border-radius: 15px;max-width: 300px;text-align: center;"><img style="object-fit: cover;max-height: 250px;max-width: 300px;width: 230px;height: 300px;border-radius: 15px;" src="landing-assets/img/e496f3d8dd862c31d8cf3b20384e551b.webp">
                                <h1 style="font-size: 20px;max-width: 300px;margin-top: 5px;">Heading</h1>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev" style="color: rgb(255,255,255);"></div>
                        <div class="swiper-button-next" style="color: rgb(255,255,255);"></div>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 8rem;">
            <div class="container" style="width: 1319px;max-width: 960px;">
                <h1 style="font-weight: bold;text-align: left;font-size: 30px;">Category Name</h1>
                <div class="simple-slider" style="height: 300px;">
                    <div class="swiper-container" style="height: 300px;">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="border-radius: 15px;max-width: 300px;text-align: center;"><img style="object-fit: cover;max-height: 250px;max-width: 300px;width: 230px;height: 300px;border-radius: 15px;" src="landing-assets/img/110fc1dea3e8b545e38032234c8429a3.webp">
                                <h1 style="font-size: 20px;max-width: 300px;margin-top: 5px;">Heading</h1>
                            </div>
                            <div class="swiper-slide" style="border-radius: 15px;max-width: 300px;text-align: center;"><img style="object-fit: cover;max-height: 250px;max-width: 300px;width: 230px;height: 300px;border-radius: 15px;" src="landing-assets/img/871e92918540e90fd109da16f40728b4.webp">
                                <h1 style="font-size: 20px;max-width: 300px;margin-top: 5px;">Heading</h1>
                            </div>
                            <div class="swiper-slide" style="border-radius: 15px;max-width: 300px;text-align: center;"><img style="object-fit: cover;max-height: 250px;max-width: 300px;width: 230px;height: 300px;border-radius: 15px;" src="landing-assets/img/fb987f28c2efeaaeea5c33378f7d189b.webp">
                                <h1 style="font-size: 20px;max-width: 300px;margin-top: 5px;">Heading</h1>
                            </div>
                            <div class="swiper-slide" style="border-radius: 15px;max-width: 300px;text-align: center;"><img style="object-fit: cover;max-height: 250px;max-width: 300px;width: 230px;height: 300px;border-radius: 15px;" src="landing-assets/img/e496f3d8dd862c31d8cf3b20384e551b.webp">
                                <h1 style="font-size: 20px;max-width: 300px;margin-top: 5px;">Heading</h1>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <script src="landing-assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="landing-assets/js/Card-Carousel-slider.js"></script>
    <script src="landing-assets/js/Simple-Slider-swiper-bundle.min.js"></script>
    <script src="landing-assets/js/Simple-Slider.js"></script>
</body>

</html>