<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: linear-gradient(to right, #33ccff 0%, #b374d8 100%);">
<?php

$con = mysqli_connect('localhost','root',"",'student_db');
mysqli_select_db($con,'student_db');
if(isset($_POST['submit'])){
    $Sname = $_POST['Sname'];
     $firstChar = substr($Sname,0,1);
    $sql = "SELECT *from mark  WHERE Sname LIKE '$firstChar%'";
    $sqlReult = mysqli_query($con,$sql);
        if(mysqli_num_rows($sqlReult) > 0){
          while($row = mysqli_fetch_assoc($sqlReult)){
          
          
          echo "<h1><center>";
          echo "Name Matching to the Request Query:";
          echo "<br><fieldset width='100px'>";
            echo $row['Sname']."\n\n     ";
            echo "<br>";
            echo $row['sub1']."\n";
            echo "<br>";
            echo $row['sub2']."\n";
            echo "<br>";
            echo $row['sub3']."\n";
            echo "<br>";
            echo $row['sub4']."\n";
            echo "<br>";
            echo $row['sub5']."\n";
            echo "<br>";
            echo $row['total']."\n";
            echo "<br>";
            echo $row['avg']."\n";
            echo "<br>";
            echo $row['class']. "<br>";
         echo "</fieldset></center></h1>";
            
            
    }
        }
      }
?>
<p><center>To go back to main page <a href="index.html">Click here</a></center></p>
</body>
</html>