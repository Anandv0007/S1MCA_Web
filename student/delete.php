<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deletion</title>
</head>
<body>
    <form method="POST" action="">
        enter rollnumber to be deleted<input type="number" name="rno"><br><br>
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
$rn=$_POST["rno"];
$d="DELETE from stud where rollno=$rn";
$e=mysqli_query($conn,$d);
if($e)
{
echo "data deleted";
}
else{
    echo "data deletion failed";
}
?>
