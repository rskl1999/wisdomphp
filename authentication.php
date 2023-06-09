<?php
session_start();
require_once('connection.php');

if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Email and password are required.";
        exit();
    }
    // Look for user in accounttbl based on role
    if ($stmt = mysqli_prepare($con, "SELECT * FROM accounttbl WHERE email = ?")) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $hashed_password = $row['pass'];

            if (password_verify($password, $hashed_password)) {
                $role = $row['role'];
                switch ($role) {
                    case "student":
                        $_SESSION['accountID'] = $row['accountID'];
                        mysqli_close($con);
                        header("Location: student_dashboard.php");
                        exit();
                        break;
                    case "school":
                        $_SESSION['accountID'] = $row['accountID'];
                        mysqli_close($con);
                        header("Location: school-dashboard.php?page=1");
                        exit();
                        break;
                    case "facilitator":
                        $_SESSION['accountID'] = $row['accountID'];
                        mysqli_close($con);
                        header("Location: facilitator_dashboard.php");
                        exit();
                        break;
                    case "Human Resources":
                        $_SESSION['accountID'] = $row['accountID'];
                        mysqli_close($con);
                        header("Location: school-applicant.php");
                        exit();
                        break;
                    case "Admin":
                        $_SESSION['accountID'] = $row['accountID'];
                        mysqli_close($con);
                        header("Location: school-applicant.php");
                        exit();
                        break;
                    default:
                        $_SESSION['error'] = "Invalid role.";
                        mysqli_close($con);
                        header("Location: login.php");
                        exit();
                }
            }
        }
        mysqli_stmt_close($stmt);
    }
    // No user found with the given credentials
    $_SESSION['error'] = "Invalid email or password.";
    mysqli_close($con);
    header("Location: login.php");
    exit();
}
?>
