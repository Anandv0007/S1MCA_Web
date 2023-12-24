<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        
    enter subject 
     <select name="subject">
        <option value="Maths">Maths</option>
        <option value="DFCA">DFCA</option>
        <option value="ADS">ADS</option>
        <option value="ASE">ASE</option>
        <option value="Web Lab">Web Lab</option>
        <option value="Python Lab">Python Lab</option>
        <option value="ADS Lab">ADS Lab</option>
        </select>
        <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
if (isset($_POST['submit'])){
    $sub=$_POST['subject'];
   $q= "SELECT * from mark where subject='$sub'"; 
   $p=mysqli_query($conn,$q);
   if(mysqli_num_rows($p)){
    echo"<table border=2px>";

    while($row=mysqli_fetch_assoc($p)){
        $att=$row['attendance'];
        if($att>=90){
            $at_mark=8;
        } 
        elseif($att>=80 && $att<90){
            $at_mark=7;
        }
        elseif($att>=70 && $att<80){
            $at_mark=6;
        }
        else{
            $at_mark=0;
        }
        $se_mark=(($row['series1']+$row['series2'])/100)*20;
        $as_mark=($row['assignment1']+$row['assignment2'])/2;

     $int_mark=$at_mark+$se_mark+$as_mark;
    
     echo "<tr><td>".$row['ktu_id']."</td>";
    
     echo "<td>".$int_mark."</td></tr>";
    }
   echo  "</table>";

   echo "<input type='button' onclick='window.print()' value='print'>";
    

   }
   

}
?>


