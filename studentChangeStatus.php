<?php
    // TODO:
    // Check if student id exists
    // Check if status is valid: ['pending', 'accepted', 'declined']


    require_once('connection.php');
    session_start();

    if(isset($_GET['stid']) & isset($_GET['status'])) {
        $studentid = $_GET['stid'];
        $status = $_GET['status'];
    }
    else {
        header("Location: ".$_SESSION['prevLocation']);
    }

    // Insert into database student status
    $query = $con->prepare("UPDATE studentstatus SET status = ? WHERE studentID = ?");
    $query->bind_param("si", $status, $studentid);
    $query->execute();
    $query->close();

    header('Location: '.$_SESSION['prevLocation']);
?>