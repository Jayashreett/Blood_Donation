<?php
session_start();
if($_SESSION['role'] != 'hospital'){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Hospital Dashboard</title>
<style>
body{
    margin:0;
    font-family:Poppins, sans-serif;
    background:linear-gradient(135deg,#1e3c72,#2a5298);
    color:white;
}

.header{
    padding:20px;
    text-align:center;
    font-size:24px;
    font-weight:bold;
    background:rgba(0,0,0,0.3);
}

.container{
    padding:40px;
    text-align:center;
}

.card{
    background:white;
    color:#333;
    padding:30px;
    margin:20px auto;
    width:300px;
    border-radius:15px;
    box-shadow:0 10px 20px rgba(0,0,0,0.3);
}

button{
    padding:10px 20px;
    border:none;
    border-radius:20px;
    background:#2a5298;
    color:white;
    cursor:pointer;
}

button:hover{
    background:#1e3c72;
}
</style>
</head>
<body>

<div class="header">
🏥 Welcome Hospital, <?php echo $_SESSION['user_id']; ?>
</div>

<div class="container">

<div class="card">
<h3>Your Role: Hospital</h3>
<p>Manage blood requests and donors efficiently.</p>
<button onclick="alert('Feature Coming Soon')">Create Blood Request</button>
</div>

<br>
<a href="logout.php"><button>Logout</button></a>

</div>

</body>
</html>
