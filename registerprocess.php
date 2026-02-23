<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Invalid access");
}

$user_id = $_POST['user_id'] ?? '';

$role = $_POST['role'] ?? '';
$password = $_POST['password'] ?? '';

if ($user_id == ''  || $role == '' || $password == '') {
    die("All fields are required");
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (user_id, role, password)
          VALUES ('$user_id', '$role', '$hashed_password')";

if (mysqli_query($conn, $query)) {
    header("Location: login.php?success=1");
    exit();
}

 else {
    echo "Database Error: " . mysqli_error($conn);
}
?>
