<?php

    include '../afterLogin/php/db.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    $sql = "INSERT INTO `trainerresister`(`fname`, `lname`, `email`, `password`, `number`) VALUES ('$fname','$lname','$email','$password','$number')";

    $result = mysqli_query($con , $sql);
    
    if($result){
        echo "Inserted";
        header("Location:../afterLogin/html/dashboard/admin/userdashboard.php");
    }
    else{
        echo "Not Inserted";
        header("Location:../html/login.html");
    }

?>