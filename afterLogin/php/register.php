<?php 

    include 'db.php';

    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "INSERT INTO `register`(`email`, `password`) VALUES ('$email','$password')";

    $result = mysqli_query($con , $sql);
    
    if($result){
        echo "Inserted";
        header("Location:../../frontpage/login.html");
    }
    else{
        echo "Not Inserted";
        header("Location:../html/login.html");
    }



?>