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
$rno=$_POST['rollno'];
$name=$_POST['name'];
$sq="INSERT into stud values('$name','$rno')";
$p=mysqli_query($conn,$sq);
if($p){
    echo"data inserted successfully";
}
else{
    echo"failed to insert data";
}

/*$p="SELECT * from stud where rollno='$rno'";
$s=mysqli_query($conn,$p);
if(mysqli_num_rows($s)){
  while($row=mysqli_fetch_assoc($s))
  {
    echo "$row['rollno']";
  }
}*/
?>
