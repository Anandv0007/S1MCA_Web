<?php
include 'conn.php';
if(isset($_POST['save'])){

$ktuid=$_POST['ktuid2'];
$sub=$_POST['subj'];
$se1=$_POST['s1'];
$se2=$_POST['s2'];
$ass1=$_POST['a1'];
$ass2=$_POST['a2'];
$q="UPDATE mark SET series1='$se1', series2='$se2', assignment1='$ass1', assignment2='$ass2' where ktu_id='$ktuid' and subject='$sub'";
$s=mysqli_query($conn,$q);
if($s){
    echo"<script>alert('mark updated')</script>";

}
else{
    echo"<script>alert('mark updation failed')</script>";
}
}
?>
