<html>
      <head>
      <title>Deleting a Record in MySQL Database</title>
   </head>
      <body style="background:linear-gradient(to right, #33ccff 0%, #ff99cc 100%);">
      <?php
        $emp_id = $_POST['emp_id'];
           

            $servername="localhost";
	  $username="root";
	  $password="";
	  $db="emp_db";
	  $conn=mysqli_connect( $servername,$username,$password,$db);
	   
          $sql = mysqli_query($conn,"delete  from emp  WHERE empno = '$emp_id' ") ;
          
           mysqli_select_db($conn,"emp_db");
           
          $sql = " select *  from emp";
          
            echo "<h1><center>deleted data successfully</center></h1><br>";
            
            mysqli_close($conn);
         

 ?>
 <p><center>To go back to main page <a href="index.html">Click here</a></center></p>
      </body>
</html>