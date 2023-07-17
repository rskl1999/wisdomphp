<?php 

$user = "root";         //USERNAME
$pass = "";             //PASSWORD
$host = "localhost";    //SERVERNAME
$db_name = "wisdomdb";  //DATABASE NAME
$con = mysqli_connect ($host, $user, $pass);
$db = mysqli_select_db ($con, $db_name );

if(isset($_GET['deleteid'])){
    $account_id=$_GET['deleteid'];

    $sql="DELETE FROM accounttbl WHERE account_id=$account_id";
    $result=mysqli_query($con,$sql);

    if($result){
    echo "Deleted successfully";
        //header('<location:Admin/AdminDashboard.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>
