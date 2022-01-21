<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "gym";


    $con = mysqli_connect($host,$user,$pass,$dbname);
    if($con){
        // echo "Connected";
    }
    else{
        echo "Not Connected";
    }

?>