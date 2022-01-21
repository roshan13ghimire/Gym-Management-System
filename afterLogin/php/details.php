<?php 

    include 'db.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    
    $email = $_POST['email'];
    $height = $_POST['height'];
    
    $weight = $_POST['weight'];
    $gender = $_POST['gender'];



    $sql = "INSERT INTO `details`(`fname`, `lname`, `email`, `height`, `weight`, `gender`) VALUES ('$fname','$lname','$email','$height','$weight','$gender')";
    

    $result = mysqli_query($con , $sql);
    
    if($result){
        echo "Inserted";
        header("Location:../html/dashboard/mypage/userdashboard.html");

    }
    else{
        echo "Not Inserted";
        header("Location:../html/dashboard/mypage/userdashboard.html");
    }



?>