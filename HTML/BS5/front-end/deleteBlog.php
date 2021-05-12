<?php  

    require "database_connect.php";
    if(isset($_GET['id'])){
        $deleteQuery = "DELETE FROM data WHERE id = '$_GET[id]'";
        $exec = mysqli_query($conn,$deleteQuery);
        if(!$exec){
            echo "<h1>DELETION FAILED. PLEASE TRY AGAIN LATER</h1>";
        }else{
            header('location:manageBlogs.php');
        }
    }

?>