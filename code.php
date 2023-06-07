<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sunny";
$email = $_POST['email'];

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed: " .$conn->connect_error);

}
$sql="select * from `register` where email='$email'";
$result = $conn->query($sql);

if($result->num_rows == 1){
    $otp = rand(100000,999999);

    session_start();
    session_regenerate_id();
    $_SESSION['otp'] =$otp;
    $_SESSION['email']=$email ;
    header('Location:f2.php');

}
else{
    echo "<script>alert('no email found.');window.location.href = 'forget.php';</script>";

}
$conn->close();

?>