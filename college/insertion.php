
<?php
include 'conn.php';
$ktuid=$_POST['ktu_id'];
$rno=$_POST['roll_no'];
$name1=$_POST['name'];
$sem=$_POST['sem'];
$p="INSERT into stud_reg values('$ktuid',$rno,'$name1',$sem)";
$q=mysqli_query($conn,$p);
if($q){
    echo"<script>alert('data inserted successfully')</script>";

}

else{
    echo"<script>alert('couldnt insert data')</script>";
  
}
?>
