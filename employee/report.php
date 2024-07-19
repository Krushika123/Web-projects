<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="report.css">
    <title>REPORT</title>
</head>
<body style="background:linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
    <?php
          session_start();

          $con = mysqli_connect('localhost','root',"","emp_db");
          mysqli_select_db($con, 'emp_db');
          $empno=$_POST["empno"];
          $sql_u = "SELECT * FROM emp WHERE empno='$empno'";
          $result = mysqli_query($con, $sql_u);
          if(mysqli_num_rows($result)){
          
           $result = mysqli_query($con,"SELECT * from emp WHERE empno=$empno");
        
            
        while($row = mysqli_fetch_array($result)) {
            $_SESSION["Ename"]=$row["Ename"];
            
            echo "<h1><center>WELCOME ".$_SESSION["Ename"];
            echo "!!";
            echo "<br><br>";
            echo "<table id='table' border='1'>
            <tr>";
           echo "<tr><td>EMPNO:</td><td>" . $row['empno'] . "</td></tr>";
           echo "<tr><td>ENAME</td><td>" . $row['Ename'] . "</td></tr>";
           echo "<tr><td>BSALARY:</td><td>" . $row['Esalary'] . "</td></tr>";
           
           echo "<tr><td>DA:</td><td>" . $row['da'] . "</td></tr>";
           echo "<tr><td>HRA:</td><td>" . $row['hra'] . "</td></tr>";
           echo "<tr><td>MA:</td><td>" . $row['ma'] . "</td></tr>";
           echo "<tr><td>INSURANCE:</td><td>" . $row['insurance'] . "</td></tr>";
           echo "<tr><td>NETSALARY:</td><td>" . $row['netsalary'] . "</td></tr>";
           echo "</center></h1>";
          
           
        
           
           echo "</tr>";
        }
        echo "</table>";
          }
          else{
            echo "User do not exist";
          }
    ?>
<p><center>To go back to main page <a href="index.html">Click here</a></center></p>
</body>
</html>