<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="login-reg-assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="login-reg-assets/css/untitled.css">
    <link rel="stylesheet" href="login-reg-assets/css/radio.css">
</head>

<body class="bg-gradient-primary" style="background: url(&quot;login-reg-assets/img/image.jpg&quot;) center / cover no-repeat, rgba(211,237,255,0);">
    <div class="container" id="cont">
        <div class="card shadow-lg o-hidden border-0 my-5" style="background: rgb(255,255,255);">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-login-image" style="background: url(&quot;login-reg-assets/img/dogs/login-logo.jpg&quot;) center;"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4" style="color: rgb(255,255,255);">Create an Account!</h4>
                            </div>
                            <form class="user" method="POST" action="create-acct.php" >
                            <?php session_start();
                                // Check for session error message
                                    if (isset($_SESSION['error'])) {
                                    echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
                                    unset($_SESSION['error']); } // Clear the error message from session 
                            ?>
                                <div id="schoolName" class="mb-3"><input id="school-name" class="form-control form-control-user" placeholder="School Name" name="schoolName"style="font-family: Poppins, sans-serif;" required onkeypress="return isVarchar(event)"/></div>
                                <div id="emailAddress" class="mb-3"><input class="form-control form-control-user" type="email" id="email-address" placeholder="Email" name="email" style="font-family: Poppins, sans-serif;" required onkeypress="return validateEmail(event)"> </div>
                                <div id="userAddress" class="mb-3"><input id="address" class="form-control form-control-user" placeholder="Address" name="address" style="font-family: Poppins, sans-serif;" required onkeypress="return isVarchar(event)"/></div>
                                <div id="contactNumber" class="mb-3"><input id="contact-number" class="form-control form-control-user" placeholder="Contact Number" name="contact-no" style="font-family: Poppins, sans-serif;" inputmode="numeric" maxlength="11" required onkeypress="return isNumberKey(event)"/>
                            </div>
                <div class="row mb-3">
                        <div class="col-sm-6 mb-3 mb-sm-0" id="userProvince">
            <select id="province" name="province" class="form-select" style="height: 53.1875px;padding: 16px;font-family: Poppins, sans-serif;font-size: 12.8px;border-radius: 160px;" required>
        
        <option value="" disabled selected>Select a Province</option>
        <option value="Metro Manila">Metro Manila</option>
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
        <option value="Biliran">Biliran</option>
        <option value="Benguet">Benguet</option>
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
        <option value="Compostela">Compostela</option>
        <option value="Davao del Norte">Davao del Norte</option>
        <option value="Davao del Sur">Davao del Sur</option>
        <option value="Davao Oriental">Davao Oriental</option>
        <option value="Eastern Samar">Eastern Samar</option>
        <option value="Guimaras">Guimaras</option>
        <option value="Ifugao">Ifugao</option>
        <option value="Ilocos Norte">Ilocos Norte</option>
        <option value="Ilocos Sur">Ilocos Sur</option>
        <option value="Iloilo">Iloilo</option>
        <option value="Isabela">Isabela</option>
        <option value="Kalinga">Kalinga</option>
        <option value="Laguna">Laguna</option>
        <option value="Lanao del Norte">Lanao del Norte</option>
        <option value="Lanao del Sur">Lanao del Sur</option>
        <option value="La Union">La Union</option>
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

        <div class="col-sm-6" id="userCity">
        <select id="city" name="city" class="form-select" style="height: 53.1875px;padding: 16px;font-family: Poppins, sans-serif;font-size: 12.8px;border-radius: 160px;" required>
    <option name="city" value="" disabled selected>Select a City</option>
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
                    <div class="row mb-3">
                        <div class="col-sm-6 mb-3 mb-sm-0" id="password"><input class="form-control form-control-user" type="password" id="password-input" placeholder="Password" name="password" style="font-family: Poppins, sans-serif;" required="" minlength="8" onkeypress="return isAlphanumericKey(event)"></div>
                            <div class="col-sm-6" id="confirm-pass"><input class="form-control form-control-user" type="password" id="confirm-password" placeholder="Confirm Password" name="con-pass" style="font-family: Poppins, sans-serif;" required="" minlength="8" onkeypress="return isAlphanumericKey(event)"></div>
                            </div>
                            <div class="col mb-2">
                                <h3 style="font-family: Poppins, sans-serif; font-size:13px; margin-bottom:10px;">Department</h3>
                                <label>
                                    <input type="radio" name="department" value="Admin" />
                                    <span style="font-family: Poppins, sans-serif;">Admin</span>
                                </label>
                                <label>
                                    <input type="radio" name="department" value="Facilitator" />
                                    <span style="font-family: Poppins, sans-serif;">Facilitator</span>
                                </label>
                                <label>
                                    <input type="radio" name="department" value="HR" />
                                    <span style="font-family: Poppins, sans-serif;">HR</span>
                                </label>
                                <label>
                                    <input type="radio" name="department" value="School" />
                                    <span style="font-family: Poppins, sans-serif;">School</span>
                                </label>
                                <label>
                                    <input type="radio" name="department" value="Student" />
                                    <span style="font-family: Poppins, sans-serif;">Student</span>
                                </label>
                            </div>
                                <button class="btn btn-primary d-block btn-user w-100" name="next" type="submit" style="font-family: Poppins, sans-serif;background: rgb(17,55,239);" id="register">Register</button>
                            </form>
                            <hr>
                            <div class="text-center"><a class="small" href="login.php" style="font-family: Poppins, sans-serif;">Already have an account?</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="login-reg-assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="login-reg-assets/js/theme.js"></script>
</body>

</html>
