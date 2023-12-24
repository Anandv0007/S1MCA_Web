<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="POST" action ="update.php">
        name <input type="text" name="name1" placeholder ="enter name"><br><br>
        Enter new rollno <input type = "number" name="rollno"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
$conn=mysqli_connect('localhost','root','','student');
if($conn){
    echo "connection successfull";
}
else{
    echo "connection failed";
}
$name=$_POST["name1"];
$rno=$_POST['rollno'];
$u="UPDATE  stud  SET  rollno='$rno' where name='$name'";
$q=mysqli_query($conn,$u);
if($q){
    echo "rollnumber updated";
}
else{
    echo "updation failed";
}
?>

