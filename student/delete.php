<html>
      <head>
      <title>Deleting a Record in MySQL Database</title>
   </head>
      <body style="background: linear-gradient(to right, #33ccff 0%, #b374d8 100%);">
      <?php
        $rollno = $_POST['rollno'];
           

            $servername="localhost";
	  $username="root";
	  $password="";
	  $db="student_db";
	  $conn=mysqli_connect( $servername,$username,$password,$db);
	
          $sql = mysqli_query($conn,"delete  from mark  WHERE rollno = '$rollno' ") ;
          
           mysqli_select_db($conn,"student_db");
           
          $sql = " select *  from mark";
            echo "<h1><center>DELETED DATA SUCCESSFULLY!!!!</center></h1><br>";
            
            mysqli_close($conn);
         

 ?>
 <p><center>To go back to main page <a href="index.html">Click here</a></center></p>
      </body>
</html>