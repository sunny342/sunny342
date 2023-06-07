<?php
$hostname='localhost';
$username='root';
$password='';
$database='sunny';

$con=mysqli_connect($hostname,$username,$password,$database);

if(!$con){
    die(mysqli_error($con));
    
}
    


?>