<?php
session_start();
include "db.php"; // Your database connection file

if(isset($_POST['fullname'])){

    $user_id = $_SESSION['user_id'];
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $blood_group = $_POST['blood_group'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $disease = $_POST['disease'];

    $sql = "INSERT INTO donor_detail 
            (user_id, fullname, age, blood_group, contact, address, disease)
            VALUES
            ('$user_id','$fullname','$age','$blood_group','$contact','$address','$disease')";

    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Details Saved Successfully');
        window.location='donor_dashboard.php';
        </script>";
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }
}
?>
