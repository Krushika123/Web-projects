<html>
      <head>
      <title>Update a Record in MySQL Database</title>
   </head>
      <body>
      <?php
        $emp_id = $_POST['emp_id'];
            $emp_name = $_POST['emp_name'];
            $emp_salary = $_POST['emp_salary'];
			$da=(0.80)*$emp_salary;
   $hra=(0.15)*$emp_salary;
   $ma=(0.12)*$emp_salary;
  $insurance=(0.10)*$emp_salary;
  $netsalary=$emp_salary+$hra+$ma-$insurance;
            $servername="localhost";
	  $username="root";
	  $password="";
	  $db="emp_db";
	  $conn=mysqli_connect( $servername,$username,$password,$db);
	   
          mysqli_select_db($conn,"emp_db");
            
            if($emp_id != '' || $emp_name != '' || $emp_salary != '')
	   {
          $sql = mysqli_query($conn,"UPDATE emp SET Ename='$emp_name', Esalary='$emp_salary' WHERE empno = '$emp_id'") ;
           echo "<h1><center>Updated data successfully!!!!</center></h1><br>";
	   }
	   else
	   {
		  echo "updation failed"; 
	   }
	   
     $sql = " select *  from emp";
	 echo "<h1><center>";
	 echo "Eno: $emp_id";
			echo "<br>";
			echo "Ename: $emp_name";
echo "<br>";			
			echo "Esalary: $emp_salary"; 
			echo "<br>";
			echo "DA: $da"; 
			echo "<br>";
			echo "HRA: $hra"; 
			echo "<br>";
			echo "MA: $ma"; 
			echo "<br>";
            echo "INSURANCE: $insurance"; 
			echo "<br>";
			echo "NETSALARY: $netsalary"; 
			echo "<br>";
			echo "</h1></center>";
            mysqli_close($conn);
         

 ?>
<p><center>To go back to main page <a href="index.html">Click here</a></center></p>
</body>
</html>