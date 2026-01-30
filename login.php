<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Login</h2>

<form action="auth/login_process.php" method="POST">

<input type="text" name="user_id" placeholder="User ID" required>
<input type="password" name="password" placeholder="Password" required>

<button type="submit">Login</button>

</form>

</body>
</html>
