

<?php
session_start();
include 'db.php';
$email=$_POST['email'];
$password=$_POST['password'];
$type = $_POST['select'];
 
 
//query for fetching email and password from database
$query = "SELECT * FROM `register` WHERE email = '$email' and password ='$password' ";
    $result = mysqli_query($con,$query);
    $row = $result->fetch_assoc();


$query1= "SELECT * FROM `trainerresister` WHERE email = '$email' and password ='$password' ";
$result1 = mysqli_query($con,$query1);
$row1 = mysqli_fetch_assoc($result1);
echo $row['email'];

$sql = "SELECT email FROM details WHERE email = '$email'";





$res = mysqli_query($con,$sql);   



if($res){
    $nrow = mysqli_fetch_assoc($res);
    $nemail = $nrow['email'];

}

if ($type == "admin"){
    if($email=="admin@gmail.com" && $password=="admin"){
        header("Location:../html/dashboard/admin/userdashboard.php");
    }
    else{
        header("Location:../../frontpage/login.html");
    }

}
elseif($type == "trainer"){


    if($row1['email']==$email && $row1['password']==$password)
    
    {
        header("Location:../html/dashboard/trainer/userdashboard.php");
    }
    else{
        header("Location:../../frontpage/login.html");
    }
}
else{
    if($row['email']==$email && $row['password']==$password)
    
    {
        $_SESSION['email'] = $email;
        // echo "Login Success Welcome ";
        if($nemail){
            header("Location:../html/dashboard/mypage/userdashboard.html");
            
            
        }
        else{
        header( "Location:../html/dashboard/user/userdashboard.php" );
        }

        }
    else
    {
        // echo "Failed to login!!";
        header("Location:../../frontpage/login.html");
    }
}
?>

