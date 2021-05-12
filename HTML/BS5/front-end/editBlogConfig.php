<?php 

    require "database_connect.php";
    if(isset($_POST['formUpdate'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['body'];
    }else{
        die("Connection failed");
    }

    $updateQuery = "UPDATE data SET title = '$title', content = '$content' WHERE id = '$id'";
    $exec = mysqli_query($conn,$updateQuery);
    if($exec){
        header("location:manageBlogs.php");
    }else{
        echo "<h1>Update failed</h1>";
    }

?>