<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="sunny";
$new=$_POST['new'];
session_start();
session_regenerate_id();

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connention failed: " . $conn->connect_error);

}
$sqli = "UPDATE `register` SET `Password` = '$new' WHERE email = '$_SESSION[email]'";

if ($conn->query($sqli)=== TRUE){
    echo "<script>alert('Update Successful');</script>";
    header('location:index2.html');
}else{
    echo "Error updating record:" .$conn->error;
}
$conn->close();

?>