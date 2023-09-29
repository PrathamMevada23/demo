<?php
    include("connect.php");
    if(isset($_POST["btnsubmit"])){
        $fname = $_POST["firstname"];
        $lname=$_POST["lastname"];
        $phone=$_POST["phoneno"];
        $insert="insert into table1 values(0,'$fname','$lname','$phone')";
        mysqli_query($cnn,$insert);
    }

    //update
    if(isset($_POST["btnupdate"])){
        $id=$_POST["id"];
        $fname=$_POST["firstname"];
        $lname=$_POST["lastname"];
        $phoneno=$_POST["phoneno"];
        $update="UPDATE table1 SET firstname='$fname',lastname='$lname',phoneno='$phoneno' WHERE id='$id'";
        mysqli_query($cnn,$update);
    }

    //delete
    if(isset($_POST["btndelete"])){
        $id=$_POST["id"];
        $delete = "delete from table1 WHERE id='id'";
        mysqli_query($cnn,$delete);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Registration Form</h1>
    <h2><a href="login.php" target="_blank">login</a> | <a href="index.php" target="_blank">Register</a></h2>
    <form method="post">
        <tr>
            <td>
                <label>id</label>
                <input type="text" name="id" placeholder="Enter Id Here">
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <label>firstname</label>
                <input type="text" name="firstname"  placeholder="Enter First name Here">
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <label>lastname</label>
                <input type="text" name="lastname"  placeholder="Enter Last name Here">
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <label>phoneno</label>
                <input type="text" name="phoneno"  placeholder="Enter PhoneNo Here">
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <input type="submit" name="btnsubmit" value="Submit">
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <input type="submit" name="btnupdate" value="update">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="btndelete" value="delete">
            </td>
        </tr>
    </form>
    </center>
</body>
</html>