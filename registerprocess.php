<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Invalid access");
}

$user_id = $_POST['user_id'] ?? '';
$phone = $_POST['phone'] ?? '';
$blood_group = $_POST['blood_group'] ?? '';
$role = $_POST['role'] ?? '';
$password = $_POST['password'] ?? '';

if ($user_id == '' || $phone == '' || $blood_group == '' || $role == '' || $password == '') {
    die("All fields are required");
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (user_id, phone, blood_group, role, password)
          VALUES ('$user_id', '$phone', '$blood_group', '$role', '$hashed_password')";

if (mysqli_query($conn, $query)) {
    header("Location: login.php");
    exit();
} else {
    echo "Database Error: " . mysqli_error($conn);
}
?>
