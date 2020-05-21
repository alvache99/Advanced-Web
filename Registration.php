<?php
session_start();



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'user');
    
$name = $_POST['userID'];
$pass = password_hash($_POST['password'],PASSWORD_DEFAULT);
$email = $_POST['email'];
$type = $_POST['type'];
$firstName = $_POST['fName'];
$lastName = $_POST['lName'];
$s = "select * from useraccount where Username = '$name'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    header('location:RegistrationPage.php');
}else{
   $reg = "insert into useraccount (Username,Password,FirstName,LastName,Type,Email) values ('$name','$pass','$firstName','$lastName','$type','$email')";
    mysqli_query($con,$reg);
    header('location:LoginPage.php');
}

?>