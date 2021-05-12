<?php

require "database_connect.php";
$errors = [];
// echo $conn;

if(isset($_POST['formSubmit'])){
    $content =  $_POST['body'];
    $title = $_POST['title'];
    $query = "INSERT INTO data(title,content) VALUES('$title','$content')";
    $exec = mysqli_query($conn,$query);
    if($exec){
        //Success in adding to database. Move to page for reading OR creation
        header("Location: addBlog.php?info=added");
        exit();
    }else{
        $errors[0] = "Database Unavailabe. Please try again";
    }
}
?>