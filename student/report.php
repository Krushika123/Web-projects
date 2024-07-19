<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>REPORT</title>
    <style>
      #myTable{
        width:20%;
        margin-left: 600px;
        border-collapse: collapse;
        background-color: paleturquoise;
      }
      td{
        width:30px;
      
      }
      body{
        /* background-color:navajowhite; */
        background: linear-gradient(to right, #33ccff 0%, #b374d8 100%);
      }
      </style>
</head>
<body>
    <?php
           
			
            $con = mysqli_connect('localhost','root',"",'student_db');
    mysqli_select_db($con,'student_db');
	  $rollno = $_POST['rollno'];
	  
	  
          mysqli_select_db($con, 'student_db');
          $rollno=$_POST["rollno"];
          $sql_u = "SELECT * FROM mark WHERE rollno='$rollno'";
          $result = mysqli_query($con, $sql_u);
          if(mysqli_num_rows($result)){
          
           $result = mysqli_query($con,"SELECT * from mark WHERE rollno=$rollno");
        
            
        while($row = mysqli_fetch_array($result)) {
            $_SESSION["Sname"]=$row["Sname"];
            
            echo "<h1><center><u>WELCOME ".$_SESSION["Sname"];
            echo "!!!</u></center></h1>";
            echo "<br>";
            echo "<br>";
            echo "<table border='2' id=myTable><center>
            <tr>";
           echo "<tr><td>ROLL NO:</td><td>" . $row['rollno'] . "</td></tr>";
           echo "<tr><td>NAME:</td><td>" . $row['Sname'] . "</td></tr>";
           echo "<tr><td>SUB1:</td><td>" . $row['sub1'] . "</td></tr>";
           
           echo "<tr><td>SUB2:</td><td>" . $row['sub2'] . "</td></tr>";
           echo "<tr><td>SUB3:</td><td>" . $row['sub3'] . "</td></tr>";
           echo "<tr><td>SUB4:</td><td>" . $row['sub4'] . "</td></tr>";
           echo "<tr><td>SUB5:</td><td>" . $row['sub5'] . "</td></tr>";
           echo "<tr><td>TOTAL:</td><td>" . $row['total'] . "</td></tr>";
           echo "<tr><td>AVERAGE:</td><td>" . $row['avg'] . "</td></tr>";
           echo "<tr><td>CLASS:</td><td>" . $row['class'] . "</td></tr>";
           echo "</tr>";
        }
        echo "</center></table>";
          }
          else{
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<h1><center>User does not exist!!!</h1></center>";
          }
	  
    ?>
    <p><center>To go back to main page <a href="index.html">Click here</a></center></p>
</body>
</html>