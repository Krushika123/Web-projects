<html>
      <head>
      <title>Update a Record in MySQL Database</title>
   </head>
      <body style="background: linear-gradient(to right, #33ccff 0%, #b374d8 100%);">
      <?php
        $rollno = $_POST['rollno'];
            $Sname = $_POST['Sname'];
            $sub1 = $_POST['sub1'];
			$sub2 = $_POST['sub2'];
			$sub3 = $_POST['sub3'];
			$sub4 = $_POST['sub4'];
			$sub5 = $_POST['sub5'];
			$total=$sub1+$sub2+$sub3+$sub4+$sub5;
    $avg=$total/5;
    if($avg>=80){
      $class="DISTINCTION";
    }
    else if($avg>=60){
     $class="FIRST CLASS";
   }
   else if($avg>=50){
     $class="SECOND CLASS";
   }
   else{
     $class="FAIL";
   }

            $servername="localhost";
	  $username="root";
	  $password="";
	  $db="student_db";
	  $conn=mysqli_connect( $servername,$username,$password,$db);
	   if(!$conn) {
               die('Could not connect: ' . mysqli_connect_error());
			   echo "<br>";
            }
			else{
				echo "connected successfully";
				echo "<br>";
			}
          mysqli_select_db($conn,"student_db");
            
            if($rollno != '' || $Sname != '' || $sub1 != ''|| $sub2 != ''|| $sub3 != ''|| $sub4 != ''|| $sub5 != '')
	   {
          $sql = mysqli_query($conn,"UPDATE mark SET Sname='$Sname', sub1='$sub1' , sub2='$sub2' , sub3='$sub3' , sub4='$sub4' , sub5='$sub5',total='$total',avg='$avg',class='$class' WHERE rollno = '$rollno'") ;
           echo "Updated data successfully<br>";
	   }
	   else
	   {
		  echo "updation failed"; 
	   }
	   
     $sql = " select *  from mark";
	 echo "rollno: $rollno";
			echo "<br>";
			echo "Sname: $Sname";
echo "<br>";			
			echo "sub1: $sub1"; 
			echo "<br>";
			echo "sub2: $sub2"; 
			echo "<br>";
			echo "sub3: $sub3"; 
			echo "<br>";
           echo "sub4: $sub4"; 
			echo "<br>";
			echo "sub5: $sub5"; 
			echo "<br>";
            mysqli_close($conn);
         

 ?>
 <p><center>To go back to main page <a href="index.html">Click here</a></center></p>
	  </body>
</html> 