<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blood Donation Register</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    height:100vh;
    background: linear-gradient(135deg,#b31217,#e52d27);
    display:flex;
    justify-content:center;
    align-items:center;
}

/* Register Button */
.open-btn{
    padding:15px 35px;
    background:#fff;
    color:#e52d27;
    border:none;
    border-radius:30px;
    font-size:18px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
}

.open-btn:hover{
    background:#ffe6e6;
}

/* Modal Background */
.modal{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.6);
    display:none;
    justify-content:center;
    align-items:center;
}

/* Modal Content */
.modal-content{
    background:#fff;
    width:400px;
    padding:35px;
    border-radius:15px;
    box-shadow:0 15px 30px rgba(0,0,0,0.3);
    position:relative;
    animation:fadeIn 0.4s ease-in-out;
}

@keyframes fadeIn{
    from{transform:scale(0.8); opacity:0;}
    to{transform:scale(1); opacity:1;}
}

.modal-content h2{
    text-align:center;
    margin-bottom:20px;
    color:#e52d27;
}

/* Close Button */
.close{
    position:absolute;
    top:10px;
    right:15px;
    font-size:22px;
    cursor:pointer;
    color:#999;
}

.close:hover{
    color:#e52d27;
}

/* Form Styling */
form input, form select{
    width:100%;
    padding:12px;
    margin:10px 0;
    border-radius:8px;
    border:1px solid #ddd;
    outline:none;
    transition:0.3s;
}

form input:focus, form select:focus{
    border-color:#e52d27;
    box-shadow:0 0 5px rgba(229,45,39,0.3);
}

/* Submit Button */
form button{
    width:100%;
    padding:12px;
    margin-top:15px;
    background:#e52d27;
    color:#fff;
    border:none;
    border-radius:25px;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
}

form button:hover{
    background:#b31217;
}

.login-link{
    text-align:center;
    margin-top:15px;
    font-size:14px;
}

.login-link a{
    text-decoration:none;
    color:#e52d27;
    font-weight:500;
}
</style>
</head>
<body>

<button class="open-btn" onclick="openModal()">Register Now</button>

<!-- Popup Modal -->
<div class="modal" id="registerModal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Create Account</h2>

        <form action="registerprocess.php" method="POST">

            <input type="text" name="user_id" placeholder="User ID" required>
            <!-- <input type="text" name="phone" placeholder="Phone Number" required>

            <select name="blood_group" required>
                <option value="">Blood Group</option>
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>AB+</option>
                <option>AB-</option>
                <option>O+</option>
                <option>O-</option>
            </select> -->

            <select name="role" required>
                <option value="">Role</option>
                <option value="donor">Donor</option>
                <option value="hospital">Hospital</option>
            </select>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Register</button>
        </form>

        <div class="login-link">
            Already have an account? <a href="login.php">Login</a>
        </div>

    </div>
</div>

<script>
function openModal(){
    document.getElementById("registerModal").style.display="flex";
}

function closeModal(){
    document.getElementById("registerModal").style.display="none";
}

window.onclick = function(event){
    let modal = document.getElementById("registerModal");
    if(event.target == modal){
        modal.style.display="none";
    }
}
</script>

</body>
</html>
