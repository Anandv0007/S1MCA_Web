<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><center>HOME</center> </h1>
    <h3><center>SIGN-UP</center> </h3>
    <form method="POST" action ="">
        NAME <input type="text" name="name"><br>
        ROLLNO<input type="number" name="rno"><br>
        EMAIL <input type="text" name="email"><br>
        PASSWORD <input type="password" name="pd"><br>
        <input type="submit" value="submit"><br><br>
        already a user ? login <a href ="home_login.php">click here</a>

</body>
</html>

<?php
$conn=mysqli_connect('localhost','root','','student');
if($conn)
{
    echo "connection successfull";
}
else
{
    echo "connection failed";
}
$name1=$_POST["name"];
$rn=$_POST["rno"];
$email1=$_POST["email"];
$password=$_POST["pd"];
$p="INSERT into login values ('$name1',$rn,'$email1','$password')";
$q=mysqli_query($conn,$p);
if($q){
    echo "data inserted";
}
else{
    echo "data insertion failed";
}
?>
