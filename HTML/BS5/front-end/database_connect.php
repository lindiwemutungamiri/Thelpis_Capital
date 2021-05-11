<?php
    //This file is solely for connecting to the local database on Xampp
    
    //These are the details for the connection
    $username="root";
    $server="localhost";
    // $pass= getenv('MYSQLPASS'??"");
    $pass = "";
    $dbName="THELPIS";

    //This is for executing the database connection
    $conn = mysqli_connect($server,$username,$pass,$dbName);

    //This is to check for errorsl
    if(mysqli_connect_error() !== null){
        die("Connection to Database failed");
    }
?>