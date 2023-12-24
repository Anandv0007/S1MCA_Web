<?php
include 'conn.php';


$ktuid=$_POST['ktuid'];
$sub=$_POST['subject'];
$se1=$_POST['s1'];
$se2=$_POST['s2'];
$as1=$_POST['a1'];
$as2=$_POST['a2'];
$att=$_POST['att'];

$p="INSERT into mark values('$ktuid','$sub',$se1,$se2,$as1,$as2,$att)";
$s=mysqli_query($conn,$p);
if($s){
    echo"<script>alert('marks are inserted')</script>";

}
else{
    echo"marks are not inserted";
}
?>

