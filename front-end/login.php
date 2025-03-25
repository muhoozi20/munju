<?
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
   <div id="form">
    <form action="login.php" method="post">
    <table>
        <tr><td><label for="">names</label></td><td><input type="text" value="" name="name"></td></tr>
        <tr><td><label for="">age</label></td><td><input type="number" value="" name="age"></td></tr>
        <tr><td><label for="">gender</label></td><td><input type="radio" value="M" name="gender">Male <input type="radio" value="F" name="gender">Female</td></tr>
        <tr><td><label for="">salary</label></td><td><input type="number" value="" name="salary"></td></tr>
        <tr><td><label for="">about</label></td><td><textarea name="text" id=""></textarea></td></tr>

        <tr><td><button name="save">submit</button></td>
    </tr>
    <tr><td><button name="view">View users</button></td></tr>
</table>
    </form>
    <?php
    if (isset($_POST["view"])) {
        
    $con=mysqli_connect("localhost","root","","bus_station");
    $query=mysqli_query($con,"select * from users");

        echo"<table>";

        echo "<tr><th>No</th><th>NAMES</th><th>AGE</th><th>GENDER</th><th>SALARY</th><th>ABOUT</th><th colspan='2'>Modify</th></tr>";
        $id=1;
        while ($row=mysqli_fetch_array($query)) {
            echo "<tr>"."<td>".$id."</td>"."<td>".$row["names"]."</td>"."<td>".$row["age"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["salary"]."</td>"."<td>".$row["about"]."</td>"."<td><button><a href='update.php? upd=".$row['u_id']."' style='text-decoration:none;'>Update</a></button></td>"."<td><button><a href='delete.php? del=".$row['u_id']."' style='text-decoration:none;'>Delete</a></button></td>"."</tr>";
               $id++;
    }
           echo "</table>";

} 
    ?>
</td></tr>
    </table>
    </form>
    <?php
    if (isset($_POST["save"])) {
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $salary=$_POST['salary'];
        $about=$_POST['text'];
        
        $con=mysqli_connect('localhost','root','','bus_station');
        $query=mysqli_query($con,"insert into users VALUES('','$name','$age','$gender','$salary','$about')");
        if($query)
        {
            echo "data inserted";
        }
        else{
            echo "data not inserted";
        }

    }
    
    ?>
   </div> 
</body>
</html>