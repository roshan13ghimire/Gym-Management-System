<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body{
            margin:0;
            padding:0;
            box-sizing: border-box;
            /* display: flex;
            justify-content: center; */
            background-color: #e94c3d;;
        }
        .table tr , td{
    border:1px solid black;
    padding:15px;
}
.main-div{
    display: flex;
    justify-content: space-around;
    font-size: 20px;
    text-shadow: 0 0 3px #FF0000;
}
a{
    text-decoration: none;
    
}
button{
    margin-top:20px;
    padding:15px;
    background-color:blue;
    border:none;
    outline:none;
    cursor: pointer;
    font-size: 20px;

}
button a{
    color:white;
}

    </style>
</head>
<body class = "body">
    <div class = "main-div">
        <div class="trainers">
            <h1>Here is the list of the Trainers</h1>

        <table>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Action</td>
            </tr>
            <?php
            include '../afterLogin/php/db.php';
            $sql = "SELECT * from trainerresister";

            $result = mysqli_query($con, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $email= $row['email'];
                    $number = $row['number'];
            ?>
             <tr>
                        <td> <?php echo $fname ?></td>
                        <td> <?php echo $lname ?></td>
                        <td> <?php echo $email ?></td>
                        <td> <?php echo $number ?></td>
                        <td><a href="#">Update  </a>
                        <a href="#">Delete</a>
                        </td>
                    </tr>
                    <?php 
                }
            }
            ?>
        </table>

        <div class="register">
            <button><a href = "trainerregister.html">Add Trainers</a></button>
            <button><a href = "index.html">Logout</a></button>
        </div>
        </div>
        <div class="trainers">
            <h1>Here is the list of the Members</h1>

        <table>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Action</td>
            </tr>
            <?php
            include '../afterLogin/php/db.php';
            $sql = "SELECT * from details";

            $result = mysqli_query($con, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $email= $row['email'];
                    $height = $row['height'];
            ?>
             <tr>
                        <td> <?php echo $fname ?></td>
                        <td> <?php echo $lname ?></td>
                        <td> <?php echo $email ?></td>
                        <td> <?php echo $height ?></td>
                        <td><a href="#">Update  </a>
                        <a href="#">Delete</a>
                        </td>
                    </tr>
                    <?php 
                }
            }
            ?>
            </div>
    </div>
</body>
</html>