<?php
session_start();
include("../config/db.php");

$user_id = $_POST['user_id'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id='$user_id'");
$row = mysqli_fetch_assoc($result);

if($row && password_verify($password, $row['password'])){
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['role'] = $row['role'];
    header("Location: ../dashboard.php");
}else{
    echo "Invalid Login";
}
?>
