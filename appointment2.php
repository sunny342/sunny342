<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $number = $_POST['number'];
    $time = $_POST['time'];



$sql="select * from `register2` where email='$email'";

$result=mysqli_query($con,$sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
        echo "<script> alert('Patient already exist');</script>";
    }else{
        $sql="insert into `register2` (fname,lname,email,Password,mobile,date,number,time)values('$fname','$lname','$email','$Password','$mobile','$date','$number','$time')";
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
<body class="">
    <nav id="navbar">
        <div id="logo">
            <img src="images/natural_logo_white.png" alt="msg" height="130px">
        </div>
        <ul>
            <li class="item"><a href="index2.html">Home</a></li>
            <li class="item"><a href="services2.html">Services</a></li>
            <li class="item"><a href="aboutus2.html">About Us</a></li>
            <li class="item"><a href="doctor2.html">Doctors</a></li>
            <li class="item"><a href="appointment2.php">Appointment</a></li>
            
        </ul>
        </nav>
        <div class="contact-section">
            <h1>Make An Appointment</h1>
            <form class="contact-form" action="appointment.php" method="post">
                <input type="text" class="contact-form-text" placeholder="First name" name="fname" id="fname">
                <input type="text" class="contact-form-text" placeholder="Last name" name="lname" id="lname">
                <input type="text" class="contact-form-text" placeholder="Your email" name="email" id="email">
                <input type="password" class="contact-form-text" placeholder="Password" name="Password">
                <input type="text" class="contact-form-text" placeholder="Your phone" name="mobile" id="mobile">
                <input type="date" class="contact-form-text" placeholder=""  name="date" required>
                <input type="number" class="contact-form-text" placeholder="Your number" name="number" required>
                <input type="time" class="contact-form-text" placeholder="select time" name="time" required>
                 <center><input type="submit" class="contact-form-btn" value="Book Now"></center>
    
            </form>
    
        </div>
    <footer>
        <div class="center">
            Copyright &copy; www.naturalclinic@gmail. com
        </div>
    </footer>
        </body>
        </html>