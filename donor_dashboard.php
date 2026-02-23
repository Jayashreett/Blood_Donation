<?php
session_start();
if($_SESSION['role'] != 'donor'){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Donor Dashboard</title>
<style>
body{
    margin:0;
    font-family:Poppins, sans-serif;
    background:linear-gradient(135deg,#e52d27,#b31217);
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
    background:#e52d27;
    color:white;
    cursor:pointer;
}

button:hover{
    background:#b31217;
}
</style>
</head>
<body>

<div class="header">
🩸 Welcome Donor, <?php echo $_SESSION['user_id']; ?>
</div>

<div class="container">

<div class="card">
<h3>Your Role: Donor</h3>
<p>Thank you for saving lives ❤️</p>
<button onclick="alert('Feature Coming Soon')">Enter Your Details</button>
</div>

<br>
<a href="logout.php"><button>Logout</button></a>

</div>

</body>
</html>
