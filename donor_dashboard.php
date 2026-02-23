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

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>

body{
    margin:0;
    font-family:Poppins, sans-serif;
    background: linear-gradient(135deg,#ff416c,#ff4b2b);
    min-height:100vh;
    color:white;
}

/* Header */
.header{
    padding:25px;
    text-align:center;
    font-size:26px;
    font-weight:600;
    background: rgba(0,0,0,0.25);
    backdrop-filter: blur(10px);
}

/* Container */
.container{
    padding:50px;
    display:flex;
    justify-content:center;
}

/* Card Design */
.card{
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(20px);
    padding:40px;
    width:420px;
    border-radius:20px;
    box-shadow:0 20px 40px rgba(0,0,0,0.2);
    text-align:center;
}

/* Inputs */
input, select, textarea{
    width:100%;
    padding:12px;
    margin-top:12px;
    border:none;
    border-radius:10px;
    outline:none;
    font-size:14px;
}

/* Button Styling */
button{
    margin-top:20px;
    width:100%;
    padding:14px;
    border:none;
    border-radius:30px;
    background: linear-gradient(45deg,#ff512f,#dd2476);
    color:white;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    transform:translateY(-3px);
    box-shadow:0 10px 25px rgba(0,0,0,0.3);
}

/* Logout Button */
.logout-btn{
    width:auto;
    padding:10px 25px;
    margin-top:25px;
}

</style>
</head>

<body>

<div class="header">
🩸 Welcome Donor, <?php echo $_SESSION['user_id']; ?>
</div>

<div class="container">

<div class="card">
<h2>Donor Details</h2>
<p>Thank you for saving lives ❤️</p>

<button onclick="showForm()">Enter Your Details</button>

<div id="donorForm" style="display:none;">
<form action="donordashboardprocess.php" method="POST">


<input type="text" name="fullname" placeholder="Full Name" required>

<input type="number" name="age" placeholder="Age" required>

<select name="blood_group" required>
<option value="">Select Blood Group</option>
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>O+</option>
<option>O-</option>
<option>AB+</option>
<option>AB-</option>
</select>

<input type="text" name="contact" placeholder="Contact Number" required>

<textarea name="address" placeholder="Address" required></textarea>

<textarea name="disease" placeholder="Any disease? Mention if yes, else write None" required></textarea>

<button type="submit">Submit Details</button>

</form>
</div>

<a href="logout.php">
<button class="logout-btn">Logout</button>
</a>

</div>
</div>

<script>
function showForm(){
    document.getElementById("donorForm").style.display="block";
}
</script>

</body>
</html>
