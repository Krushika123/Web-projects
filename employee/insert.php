<html>
      <head>
      <title>Insert a Record in MySQL Database</title>
   </head>
      <body style="background:linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
      <?php
     if(isset($_POST['submit'])){
    $con = mysqli_connect('localhost','root',"","emp_db");
    mysqli_select_db($con,'emp_db');
    $empno=$_POST['empno'];
    $Ename=$_POST['Ename'];
    $Esalary=$_POST['Esalary'];
  
    $da=(0.80)*$Esalary;
   $hra=(0.15)*$Esalary;
   $ma=(0.12)*$Esalary;
  $insurance=(0.10)*$Esalary;
  $netsalary=$Esalary+$hra+$ma-$insurance;

    $sql_u = "SELECT * FROM emp WHERE empno='$empno'";
    $result = mysqli_query($con, $sql_u);

    if(mysqli_num_rows($result)){
      echo "DATA YOUR TRYING TO INSERT ALREADY EXISTS";
    }
    else {
      $reg = "insert into emp(empno,Ename,Esalary,da,hra,ma,insurance,netsalary) values ('$empno','$Ename','$Esalary','$da','$hra','$ma','$insurance','$netsalary')";
      mysqli_query($con, $reg);
       $rslt = mysqli_query($con,"SELECT * FROM emp where empno='$empno'");
       while($row = mysqli_fetch_array($rslt))
          $empno = $row['empno'];
echo "<h1><center>Inserted Successfully!!!</center></h1>";
echo "<br><br>";
      echo "<center><table border='2'>
      <tr><td>Emp-No.</td><td>$empno</td></tr>
      <tr><td>Ename</td><td>$Ename</td></tr>
      <tr><td>Bsalary</td><td>$Esalary</td></tr>
      
      </table></center>";
    }

     }
    ?>
<p><center>To go back to main page <a href="index.html">Click here</a></center></p>
</body>
</html>