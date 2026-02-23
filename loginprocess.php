<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Invalid access");
}

$user_id = $_POST['user_id'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id='$user_id'");
$row = mysqli_fetch_assoc($result);

if($row && password_verify($password, $row['password'])){

    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['role'] = $row['role'];

    if($row['role'] == 'donor'){
        header("Location: donor_dashboard.php");

        exit();
    }
    elseif($row['role'] == 'hospital'){
        header("Location: hospital_dashboard.php");
        exit();
    }

}else{
    header("Location: ../login.php?error=1");
    exit();
}
?>
