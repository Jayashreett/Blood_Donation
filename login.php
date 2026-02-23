<?php if(isset($_GET['success'])): ?>
    <div class="success-message" id="successBox">
        ✅ Successfully Registered!
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Blood Donation System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

/* Blood Background */
body{
    height:100vh;
    background: url('https://images.unsplash.com/photo-1615461066159-fea0960485d5') no-repeat center center/cover;
    display:flex;
    justify-content:center;
    align-items:center;
    position:relative;
}

/* Dark Overlay */
body::before{
    content:"";
    position:absolute;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.65);
    top:0;
    left:0;
}

/* Success Message */
.success-message {
    position: fixed;
    top: 20px;
    left: 20px;
    background: #28a745;
    color: #fff;
    padding: 15px 25px;
    border-radius: 8px;
    font-weight: 500;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    animation: slideIn 0.5s ease;
    z-index: 9999;
}

@keyframes slideIn {
    from { transform: translateX(-100%); opacity:0; }
    to { transform: translateX(0); opacity:1; }
}

/* Glass Login Box */
.login-box{
    position:relative;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(15px);
    padding:40px;
    width:350px;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,0.4);
    text-align:center;
    color:#fff;
    z-index:1;
    animation:fadeIn 0.8s ease-in-out;
}

@keyframes fadeIn{
    from{ transform:translateY(30px); opacity:0;}
    to{ transform:translateY(0); opacity:1;}
}

.login-box h2{
    margin-bottom:25px;
    font-weight:600;
}

/* Input Fields */
.login-box input{
    width:100%;
    padding:12px;
    margin:12px 0;
    border:none;
    border-radius:8px;
    outline:none;
    background:rgba(255,255,255,0.2);
    color:#fff;
    font-size:14px;
}

.login-box input::placeholder{
    color:#eee;
}

/* Button */
.login-box button{
    width:100%;
    padding:12px;
    margin-top:15px;
    border:none;
    border-radius:25px;
    background:#e52d27;
    color:#fff;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
}

.login-box button:hover{
    background:#b31217;
}

/* Register Link */
.login-box p{
    margin-top:15px;
    font-size:14px;
}

.login-box a{
    color:#ffb3b3;
    text-decoration:none;
    font-weight:500;
}

.login-box a:hover{
    text-decoration:underline;
}

/* Responsive */
@media(max-width:400px){
    .login-box{
        width:90%;
    }
}
</style>
</head>

<body>

<div class="login-box">
    <h2>🩸 Blood Donation Login</h2>

    <form action="loginprocess.php" method="POST">
        <input type="text" name="user_id" placeholder="User ID" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="register.php">Register</a></p>
</div>

<script>
setTimeout(function(){
    var box = document.getElementById("successBox");
    if(box){
        box.style.display = "none";
    }
}, 3000);
</script>

</body>
</html>
