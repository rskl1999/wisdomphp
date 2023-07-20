<?php 
    //Part of account creation function
    session_start();
    require_once('connection.php');

    // Validate user input
    $schoolName = filter_var($_POST['schoolName'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
    $province = filter_var($_POST['province'], FILTER_SANITIZE_STRING);
    $contactNo = filter_var($_POST['contact-no'], FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $conPass = $_POST['con-pass'];

    
        // if email does not exist
        if (isset($_POST['next'])) {
            // Check if the email already exists in the database
            $email_check_query = "SELECT * FROM account WHERE email='$email' LIMIT 1";
            $result = mysqli_query($con, $email_check_query);
            $user = mysqli_fetch_assoc($result);
            if ($user) { // if email exists
                $_SESSION['error'] = "Email already exists.";
                header("Location: register.php");
            } else { 
                if ($password != $conPass) {
                    // If passwords don't match, don't save password and show error message
                    $_SESSION['error'] = "Passwords do not match.";
                    header("Location: register.php");
                } else {
                    // If passwords match, save user input into session variables
                    $_SESSION['schoolName'] = $schoolName;
                    $_SESSION['email'] = $email;
                    $_SESSION['address'] = $address .", ". $city .", ". $province; 
                    $_SESSION['contact-no'] = $contactNo;
                    $_SESSION['password'] = $password;

                    session_regenerate_id(true);

                    header("Location: uploadprofile.php");
                }
            }
        }

?>