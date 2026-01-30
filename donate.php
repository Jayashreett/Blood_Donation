<?php
session_start();
include("../config/db.php");

$donor = $_SESSION['user_id'];

$bg = mysqli_fetch_assoc(
    mysqli_query($conn,"SELECT blood_group FROM users WHERE user_id='$donor'")
)['blood_group'];

$result = mysqli_query($conn,
    "SELECT * FROM blood_requests WHERE blood_group='$bg'");
?>

<h2>Available Blood Requests</h2>

<?php while($r=mysqli_fetch_assoc($result)){ ?>
<p>
Hospital: <?= $r['hospital_id'] ?><br>
Blood Group: <?= $r['blood_group'] ?><br>
Quantity: <?= $r['quantity'] ?>
</p>
<?php } ?>
