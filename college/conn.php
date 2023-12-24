
<?php
$conn=mysqli_connect('localhost','root','','student');
if($conn){
    echo"connection successfull";

}
else{
    echo"connection failed";
}
?>
