<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
<?php

$con = mysqli_connect('localhost','root',"",'emp_db');
mysqli_select_db($con,'emp_db');
if(isset($_POST['submit'])){
    $Ename = $_POST['Ename'];
     $firstChar = substr($Ename,0,1);
    $sql = "SELECT *from emp  WHERE Ename LIKE '$firstChar%'";
    $sqlReult = mysqli_query($con,$sql);
        if(mysqli_num_rows($sqlReult) > 0){
          while($row = mysqli_fetch_assoc($sqlReult)){
          
          
          echo "<h1><center>";
          echo "Name Matching to the Request Query:";
          echo "<br><fieldset width='100px'>";
          echo "Employee Name: ";
            echo $row['Ename']."\n\n     ";
            echo "<br>";
            echo "Employee Salary: ";
            echo $row['Esalary']."\n";
            echo "<br>";
            echo "Employee DA: ";
            echo $row['da']."\n";
            echo "<br>";
            echo "Employee HRA: ";
            echo $row['hra']."\n";
            echo "<br>";
            echo "Employee MA: ";
            echo $row['ma']."\n";
            echo "<br>";
            echo "Employee Insurance: ";
            echo $row['insurance']."\n";
            echo "<br>";
            echo "Employee Net Salary: ";
            echo $row['netsalary']."\n";
            echo "<br>";
          
         echo "</fieldset></center></h1>";
            
            
    }
        }
      }
?>
<p><center>To go back to main page <a href="index.html">Click here</a></center></p>
</body>
</html>