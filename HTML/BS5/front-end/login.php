<?php
session_start();
require "database_connect.php";
$errors = "";
if(isset($_POST['loginSubmit'])){
    $email = $_POST['userMail'];
    $pass = $_POST['userPass'];
    $checkPass = md5($pass);
    $checkLogin = "SELECT * FROM user_login WHERE Email = '$email' AND Pass = '$checkPass'";
    $execLogin = mysqli_query($conn,$checkLogin);
    if($execLogin && $execLogin->num_rows == 1){
        $_SESSION['success'] = "Entry allowed";
        $_SESSION['email'] = "'$email'";
        header('location:success.html');
    }else{
        $errors = "Email / Password is incorrect";
    }
    
}
?>