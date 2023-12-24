
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
    <form method="POST" action="markinsert.php">
    <center>
            <table border=5px width=400px height=400px>
                <tr>
                    <th colspan=2>Mark Details</th>
                </tr>
                
                <tr>
            <td width=250px>KTU-ID</td>
            <td> <select name="ktuid"> 
                <option>select an option</option> 
                <?php
                $p="SELECT ktu_id from stud_reg" ;
                $s=mysqli_query($conn,$p);
                if($s){
                    if(mysqli_num_rows($s)>0){
                       while($row=mysqli_fetch_assoc($s)){
                        echo"<option>".$row['ktu_id']."<br></option>";
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
    <td>Series 1 Mark</td>
    <td><input type="text" name="s1"></td>
</tr>
<tr>
    <td>Series 2 Mark</td>
    <td><input type="text" name="s2"></td>
</tr>
<tr>
    <td>Assignment 1 Mark</td>
    <td><input type="text" name="a1"></td>
</tr>
<tr>
    <td>Assignment 2 Mark</td>
    <td><input type="text" name="a2"></td>
</tr>
<tr><td>
    attendence</td>
    <td><input type="number" name="att"></td>
    </tr>
<tr>
    <td colspan=2 style="text-align-center"><center><input type="submit" value="Submit"></center></td>
</tr>

</table>
</center>
</form>


</body>
</html>