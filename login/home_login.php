<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        name <input type="text" name="name"><br><br>
        password<input type="password" name="password"><br><br>
        <input type="submit" value="submit"><br><br>
        previous page<a href="home.php">click here</a>

</form>

</body>
</html>

<?php
if (isset($_POST)) 
{
    $conn=mysqli_connect('localhost','root','','student');
    if($conn){
        echo "connection sucessfull";
    }
    else{
        echo "connection failed";
    }
    $name1=$_POST['name'];
    $pswd=$_POST['password'];
    $q="SELECT * from login where Name='$name1' and Password='$pswd'";
    $s=mysqli_query($conn,$q);
    if(mysqli_num_rows($s)){
        //$row=mysqli_fetch_assoc($s);
        //echo "<script> alert('login successfull')</script>";
        header("location: home.php");
    }
    else{
         echo "login failed";
    }

}
?>
