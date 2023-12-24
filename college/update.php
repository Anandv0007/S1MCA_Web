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
        <table border=2px>
            <tr>
                <td>KTU_ID</td>
                <td><select name="ktuid">
                    <option>select an option</option>
                    <?php
                    $q="SELECT ktu_id from mark";
                    $p=mysqli_query($conn,$q);
                    if($p){
                       if( mysqli_num_rows($p)>0)
                       {
                        while($row=mysqli_fetch_assoc($p)){
                            echo"<option>".$row[ktu_id]."</option>";
                        }
                       }
                    }
                    ?>
                    </select></td>
                </tr>
                <tr>
                <td>Subject</td>
                <td><select name="subject">
                    <option value="Maths">Maths</option>
                    <option value="DFCA">DFCA</option>
                    <option value="ADS">ADS</option>
                    <option value="ASE">ASE</option>
                    <option value="Web Lab">Web Lab</option>
                    <option value="Python Lab">Python Lab</option>
                    <option value="ADS Lab">ADS Lab</option>
                    </select>
                </tr>
                <tr>
                    <td><input type="submit" value="submit" name="submit">
                </td>
                </tr>
                </table></form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$ktuid1=$_POST['ktuid'];
$sub=$_POST['subject'];
$w="SELECT * from mark where ktu_id='$ktuid1' and subject='$sub'";
$r=mysqli_query($conn,$w);
if($r){
    if(mysqli_num_rows($r)){
        echo"<html><body><form method='POST' action='mark_up.php'> ";
        while($row=mysqli_fetch_assoc($r)){
            echo "ktuid <input type='text' name='ktuid2' value=".$row['ktu_id']." readonly><br><br>";
            echo "subject <input type='text' name='subj' value=".$row['subject']." readonly><br><br>";
            echo "series 1<input type='text' name='s1' value=".$row['series1']."><br><br>";
            echo "series 2<input type='text' name='s2' value=".$row['series2']."><br><br>";
            echo "assignment 1<input type='text' name='a1' value=".$row['assignment1']."><br><br>";
            echo "assignment 2<input type='text' name='a2' value=".$row['assignment2']."><br><br>";
            echo "attendance <input type='text' name='att' value=".$row['attendance']." readonly><br><br>";

        }
        echo"<input type='submit' value='save' name='save'>";
        echo"</form></body></html>";
    }
}
}
?>




