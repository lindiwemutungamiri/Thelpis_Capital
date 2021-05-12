<?php 

    require "database_connect.php";
    $error;
    $query = "SELECT * FROM data";
    $exec = mysqli_query($conn, $query);
    if(!$exec)
        $error = "RETRIEVAL OF BLOGS FAILED. PLEASE TRY AGAIN LATER";

?>