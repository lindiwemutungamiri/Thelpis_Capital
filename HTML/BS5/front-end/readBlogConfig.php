<?php 

    require "database_connect.php";
    $errors;
    if(isset($_GET['index'])){
        $id = $_GET['index'];
        $query = "SELECT * from data WHERE id = '$id'";
        $exec = mysqli_query($conn,$query);
        if(!$exec){
            $errors = "RETREIVAL FROM DATABASE FAILED. PLEASE TRY AGAIN LATER";
        }else{
            foreach($exec as $q){
                $body = $q['content'];
                $title = $q['title'];
            }
        }
    }


?>