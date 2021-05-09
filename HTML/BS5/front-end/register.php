<?php

require "database_connect.php";
$errors = "";
$passError = "";
$processError = "";

if(isset($_POST['userRegister'])){
    $fullName = $_POST['fullName'];
    $userMail = $_POST['userMail'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    $checkEmail = "SELECT * FROM user_login WHERE Email = '$userMail'";
    // $checkName = "SELECT * FROM user_login WHERE Full_Name = '$fullName'";
    $execMailCheck = mysqli_query($conn,$checkEmail);
    // $execNameCheck = mysqli_query($conn,$checkName);

    if($execMailCheck && $execMailCheck->num_rows > 0){
        $errors = "Email Already Exists";
    }else{
        if($pass1 == $pass2){
            $insertQuery = "INSERT INTO user_login VALUES(0,'$userMail','$fullName', '$pass1')";
            $execInsert = mysqli_query($conn,$insertQuery);
            if($execInsert){
                header('location:login.html');
            }
        }else{
            $passError = "Passwords Do Not Match";
        }
    }
}

?>