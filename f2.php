<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natural.clinic</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width:1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cfad418632.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="images/natural_logo_white.png" alt="msg" height="130px">
        </div>
        <ul>
            <li class="item"><a href="index.html">Home</a></li>
            <li class="item"><a href="services2.html">Services</a></li>
            <li class="item"><a href="aboutus2.html">About Us</a></li>
            <li class="item"><a href="doctor.html">Doctors</a></li>
            <li class="item"><a href="contact2.html">Contact Us</a></li>
            <li class="item"><a href="appointment2.html"> Appointment</a></li>
        </ul>
    </nav>
    <div class="contact-section">
        <br><br>
        <h1>Forget password</h1>
        <form class="contact-form" action="f3.php" method="post">
            <br><br>
            <br>
            <input type="number" class="contact-form-text" placeholder="Enter code" name="otp" value=<?php session_start(); echo $_SESSION['otp'];?>>
            <br>
            <center> <button type="sabmit" class="btn" name="email">Next</button></center>
            <br>
        </form>
        <br><br><br>

    </div>
    <footer>
        <div class="center">
            Copyright &copy; www.naturalclinic@gmail. com
        </div>
    </footer>
</body>
</html>