<?php
session_start();
include "db.php";

if($_SESSION['role'] != 'hospital'){
    header("Location: login.php");
    exit();
}

/* Fetch Donor Data */
$query = "SELECT * FROM donor_detail ORDER BY id DESC";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Hospital Dashboard</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>

body{
    margin:0;
    font-family:Poppins,sans-serif;
    background:linear-gradient(135deg,#1e3c72,#2a5298);
    color:white;
}

/* Header */
.header{
    padding:25px;
    text-align:center;
    font-size:26px;
    font-weight:600;
    background:rgba(0,0,0,0.3);
    backdrop-filter: blur(10px);
}

/* Container */
.container{
    padding:40px;
    text-align:center;
}

/* Card */
.card{
    background:white;
    color:#333;
    padding:30px;
    margin:20px auto;
    width:90%;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.3);
}

/* Button */
button{
    padding:12px 25px;
    border:none;
    border-radius:25px;
    background:#2a5298;
    color:white;
    cursor:pointer;
    font-size:15px;
    transition:0.3s;
}

button:hover{
    background:#1e3c72;
    transform:translateY(-2px);
}

/* Table Styling */
table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

th{
    background:#2a5298;
    color:white;
    padding:12px;
}

td{
    padding:12px;
    border-bottom:1px solid #ddd;
}

tr:hover{
    background:#f1f1f1;
}

.hidden{
    display:none;
}

</style>
</head>

<body>

<div class="header">
🏥 Welcome Hospital, <?php echo $_SESSION['user_id']; ?>
</div>

<div class="container">

<div class="card">
<h3>Hospital Dashboard</h3>
<p>Manage blood requests and donors efficiently ❤️</p>

<button onclick="showDonors()">Create Blood Request (View Donors)</button>

<div id="donorTable" class="hidden">

<h3 style="margin-top:30px;">Available Donors</h3>

<table>
<tr>
<th>ID</th>
<th>Donor Name</th>
<th>Age</th>
<th>Blood Group</th>
<th>Contact</th>
<th>Disease</th>
<th>Address</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fullname']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['blood_group']; ?></td>
<td><?php echo $row['contact']; ?></td>
<td><?php echo $row['disease']; ?></td>
<td><?php echo $row['address']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</div>

<br>

<a href="logout.php">
<button>Logout</button>
</a>

</div>

<script>
function showDonors(){
    document.getElementById("donorTable").style.display="block";
}
</script>

</body>
</html>
