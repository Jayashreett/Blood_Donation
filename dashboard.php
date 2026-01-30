<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Welcome <?php echo $_SESSION['user_id']; ?></h2>

<?php
if($_SESSION['role']=="hospital"){
    echo "<a href='hospital/request_blood.php'>Request Blood</a>";
}else{
    echo "<a href='donor/view_requests.php'>View Blood Requests</a>";
}
?>

<br><br>
<a href="logout.php">Logout</a>

</body>
</html>
