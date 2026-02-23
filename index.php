<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blood Donation Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: 'Poppins', sans-serif;
        }

        body{
            background: linear-gradient(135deg, #b31217, #e52d27);
            color:#fff;
        }

        header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:20px 80px;
        }

        header h1{
            font-size:24px;
            font-weight:600;
        }

        nav a{
            text-decoration:none;
            color:#fff;
            margin-left:20px;
            font-weight:500;
            transition:0.3s;
        }

        nav a:hover{
            color:#ffdede;
        }

        .hero{
            display:flex;
            align-items:center;
            justify-content:space-between;
            padding:80px;
            min-height:90vh;
        }

        .hero-text{
            max-width:600px;
        }

        .hero-text h2{
            font-size:48px;
            margin-bottom:20px;
        }

        .hero-text p{
            font-size:18px;
            margin-bottom:30px;
            line-height:1.6;
        }

        .btn{
            padding:12px 25px;
            border:none;
            border-radius:30px;
            font-size:16px;
            cursor:pointer;
            margin-right:15px;
            transition:0.3s;
        }

        .btn-primary{
            background:#fff;
            color:#e52d27;
            font-weight:600;
        }

        .btn-primary:hover{
            background:#ffe6e6;
        }

        .btn-outline{
            background:transparent;
            border:2px solid #fff;
            color:#fff;
        }

        .btn-outline:hover{
            background:#fff;
            color:#e52d27;
        }

        .hero img{
            width:450px;
        }

        .features{
            background:#fff;
            color:#333;
            padding:60px 80px;
            text-align:center;
        }

        .features h3{
            font-size:32px;
            margin-bottom:40px;
            color:#e52d27;
        }

        .feature-box{
            display:flex;
            justify-content:space-around;
            flex-wrap:wrap;
        }

        .feature{
            width:300px;
            padding:20px;
            margin:10px;
            background:#f9f9f9;
            border-radius:15px;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
            transition:0.3s;
        }

        .feature:hover{
            transform:translateY(-10px);
        }

        .feature h4{
            margin-bottom:15px;
            color:#e52d27;
        }

        footer{
            text-align:center;
            padding:20px;
            background:#b31217;
            font-size:14px;
        }

        @media(max-width:1000px){
            .hero{
                flex-direction:column;
                text-align:center;
            }

            .hero img{
                margin-top:40px;
                width:300px;
            }
        }

    </style>
</head>
<body>

<header>
    <h1>🩸 BloodCare</h1>
    <nav>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </nav>
</header>

<section class="hero">
    <div class="hero-text">
        <h2>Donate Blood, Save Lives</h2>
        <p>
            Join our Blood Donation Management System to connect donors with patients in need. 
            Fast emergency requests, easy donor registration, and real-time availability tracking.
        </p>

        <a href="register.php">
            <button class="btn btn-primary">Become a Donor</button>
        </a>

        <a href="login.php">
            <button class="btn btn-outline">Emergency Request</button>
        </a>
    </div>

    <img src="https://cdn-icons-png.flaticon.com/512/2966/2966484.png" alt="Blood Donation">
</section>

<section class="features">
    <h3>Our Key Features</h3>

    <div class="feature-box">

        <div class="feature">
            <h4>🩸 Donor Registration</h4>
            <p>Quick and simple donor sign-up with blood group and contact details.</p>
        </div>

        <div class="feature">
            <h4>🚑 Emergency Requests</h4>
            <p>Send urgent blood requests and connect instantly with available donors.</p>
        </div>

        <div class="feature">
            <h4>📊 Blood Inventory</h4>
            <p>Track available blood groups and manage hospital stock efficiently.</p>
        </div>

    </div>
</section>

<footer>
    © 2026 BloodCare | Blood Donation & Emergency Request System
</footer>

</body>
</html>
