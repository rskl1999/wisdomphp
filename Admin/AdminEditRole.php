<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>wisdom-1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <section id="sec-header" style="height: 150px;">
            <div>
                <h1 class="fw-bold" style="padding-top: 80px;padding-left: 110px;">Edit Account Role</h1>
            </div>
        </section>
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