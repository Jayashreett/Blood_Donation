<?php
session_start();
include("../config/db.php");
?>

<form method="POST">

<select name="blood_group" required>
    <option>A+</option><option>A-</option>
    <option>B+</option><option>B-</option>
    <option>AB+</option><option>AB-</option>
    <option>O+</option><option>O-</option>
</select>

<input type="number" name="quantity" placeholder="Quantity" required>

<button name="submit">Submit Request</button>
</form>

<?php
if(isset($_POST['submit'])){
    $hospital = $_SESSION['user_id'];
    mysqli_query($conn,
        "INSERT INTO blood_requests VALUES 
        ('','$hospital','$_POST[blood_group]','$_POST[quantity]',CURDATE(),'Pending')");
    echo "Request Submitted";
}
?>
