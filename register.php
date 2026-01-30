<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Register</h2>

<form action="registerprocess.php" method="POST">

<input type="text" name="user_id" placeholder="User ID" required>
<input type="text" name="phone" placeholder="Phone Number" required>

<select name="blood_group" required>
    <option value="">Blood Group</option>
    <option>A+</option><option>A-</option>
    <option>B+</option><option>B-</option>
    <option>AB+</option><option>AB-</option>
    <option>O+</option><option>O-</option>
</select>

<select name="role" required>
    <option value="">Role</option>
    <option value="donor">Donor</option>
    <option value="hospital">Hospital</option>
</select>

<input type="password" name="password" placeholder="Password" required>

<button type="submit">Register</button>

</form>

<a href="login.php">Already have an account?</a>

</body>
</html>
