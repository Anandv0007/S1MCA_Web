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
<br><br>
        <form action="insertion.php" method="POST">
            <center>
            <table border=5px width=400px height=400px>
                <tr>
                    <th colspan=2>student registration</th>
                </tr>
                <tr>
                    <td>KTU ID</td>
                    <td><input type="text" name="ktu_id"></td>
                </tr>
                <tr>
                    <td>Roll No</td>
                    <td><input type="text" name="roll_no"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td><input type="number" name="sem"></td>
                </tr>
                <tr>
                    <td colspan=2 style="text-align-center"><center><input type="submit" value="Submit"></center></td>
                </tr>
                
            </table>
            </center>
        </form>
</body>
</html>