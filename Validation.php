<?php
session_start();



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'user');
    
$name = $_POST['userID'];
$pass = $_POST['password'];

$s = "SELECT Password,username FROM useraccount WHERE Username ='".$name."'LIMIT 1";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);


if($num > 0){
    $row = mysqli_fetch_array($result);
    if(password_verify($pass,$row["Password"])){
   header('location:shopPage.php');
        }
    else{
       header('location:loginPage.php'); 
    }
    
}

?>