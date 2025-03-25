<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form input{
            border: none;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_GET['del'])) {
         $id=$_GET['del'];
   
    $con=mysqli_connect("localhost","root","","bus_station");
    $query=mysqli_query($con,"select * from users where u_id='$id'");
    $row=mysqli_fetch_array($query)
    
    ?>
    <form action="delete.php" method="post">
            <table>
            <tr><td><input type="hidden" value="<?php echo $row['u_id']; ?>" name="u_id"></td></tr>
            <tr><td>Names:</td><td><input type="text" value="<?php echo $row['names']; ?>" name="nms"></td></tr>
            <tr><td>Age</td><td><input type="text" value="<?php echo $row['age']; ?>" name="ag"></td></tr>
            <tr><td>Gender</td><td><input type="text" value="<?php echo $row['gender']; ?>" name="gnd"></td></tr>
            <tr><td>salary</td><td><input type="text" value="<?php echo $row['salary']; ?>" name="sl"></td></tr>
            <tr><td>about</td><td><input type="text" value="<?php echo $row['about']; ?>" name="info"></td></tr>
            <tr><td><button name="delete">delete</button></td></tr>
            <tr><td><button name="dont">don't</button></td></tr>
        </table>
        
    </form>
    <?php
    }
    ?>

    <?php
    if (isset($_POST['delete'])) {
        
        $id=$_POST['u_id'];

        $con=mysqli_connect("localhost","root","","bus_station");
        $query=mysqli_query($con,"delete from users where  u_id='$id'");
        if ($query) {
            echo "record delete succesfully";
            header("location:login.php");
        }
    }

    if (isset($_POST['dont'])) {
        header("Location:login.php"); 
        exit();
    }


    ?>
   
</body>
</html>