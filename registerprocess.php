<?php
include("db.php");   // ✅ correct path

$user_id = $_POST['user_id'];
$phone = $_POST['phone'];
$blood_group = $_POST['blood_group'];
$role = $_POST['role'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = "INSERT INTO users (user_id, phone, password, role, blood_group)
VALUES ('$user_id', '$phone', '$password', '$role', '$blood_group')";

if(mysqli_query($conn, $query)){
    header("Location: login.php");   // ✅ same folder
    exit();
}else{
    echo "User already exists or DB error";
}
?>
