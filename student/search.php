<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><form method="POST" action="search.php">
  rollno  <input type="number" name="rn">
  <input type ="submit" value="submit">
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
$rno=$_POST["rn"];
$q="SELECT * from stud where rollno='$rno'";
$m=mysqli_query($conn,$q);
if(mysqli_num_rows($m))
{
    echo"<table>";
    while($row=mysqli_fetch_assoc($m))
    {
        echo"<tr>";
        echo "<td>".$row["name"]."</td>";
    }
    echo"</table>";
}
?>


