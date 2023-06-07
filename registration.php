<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $Password=$_POST['Password'];

    $sql="select * from `register` where email='$email'";

    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            echo "<script> alert('user already exist');</script>";
        }else{
            $sql="insert into `register` (fname,lname,email,Password)values('$fname','$lname','$email','$Password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "<script>alert('Your message is sent');</script>";

    }else{
        die(mysqli_error($con));
    }

        }
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natural.clinic</title>
    <script>
        if( window.history.replacestate){
            window.history.replacestate(null,null,window.location.href);
        }
    </script>
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
            <li class="item"><a href="services.html">Services</a></li>
            <li class="item"><a href="aboutus.html">About Us</a></li>
            <li class="item"><a href="doctor.html">Doctors</a></li>
            <li class="item"><a href="contact.html">Contact Us</a></li>
            <li class="item"><a href="appointment.html"> Appointment</a></li>
        </ul>
    </nav>
    <div class="contact-section">
        <h1>Registration</h1>
        <form class="contact-form" action="registration.php" method="post">
            <br>
            <br>
            <input type="fname" class="contact-form-text" placeholder="First name" name="fname" required>
            <br>
            <input type="lname" class="contact-form-text" placeholder="Last name" name="lname" required>
            <br>
            <input type="email" class="contact-form-text" placeholder="Your email" name="email" required>
            <br>
            <input type="password" class="contact-form-text" placeholder="Password" name="Password" required>
            <br>
            <center><input type="submit" class="contact-form-btn" name="submit" value="Register"></center>
            <br>
            <br>
            <center><h2>Already have an account?<a href="login.php">login now!</a></h2></center>
        </form>

    </div>
    <footer>
        <div class="center">
            Copyright &copy; www.naturalclinic@gmail. com
        </div>
    </footer>
</body>
</html>