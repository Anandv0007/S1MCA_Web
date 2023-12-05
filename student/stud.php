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
insertion
$rno=$_POST['rollno'];
$name=$_POST['name'];
$sq="INSERT into stud1 values('$name','$rno')";
$p=mysqli_query($conn,$sq);
if($p){
    echo"data inserted successfully";
}
else{
    echo"failed to insert data";
}
?>

