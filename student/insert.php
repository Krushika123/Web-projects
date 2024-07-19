<html>
      <head>
      <title>Insert a Record in MySQL Database</title>
   </head>
      <body style="background: linear-gradient(to right, #33ccff 0%, #b374d8 100%);">
	  <?php
      $con = mysqli_connect('localhost','root',"",'student_db');
    mysqli_select_db($con,'student_db');
    $rollno=$_POST['rollno'];
    $Sname=$_POST['Sname'];
    $sub1=$_POST['sub1'];
    $sub2=$_POST['sub2'];
    $sub3=$_POST['sub3'];
    $sub4=$_POST['sub4'];
    $sub5=$_POST['sub5'];
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



    $sql_u = "SELECT * FROM mark WHERE rollno='$rollno'";
    $result = mysqli_query($con, $sql_u);

    if(mysqli_num_rows($result)){
      echo "<h1><center>THE CURRENT PROCESSING DATA ALREADY EXIST</center></h1>";
    }
    else {
      $reg = "insert into mark(rollno,Sname,sub1,sub2,sub3,sub4,sub5,total,avg,class) values ('$rollno','$Sname','$sub1','$sub2','$sub3','$sub4','$sub5','$total','$avg','$class')";
      mysqli_query($con, $reg);
       $rslt = mysqli_query($con,"SELECT * FROM mark where rollno='$rollno'");
       while($row = mysqli_fetch_array($rslt))
          $rollno = $row['rollno'];
          echo "<h1><center>Insertion Successful!!!!</center></h1>";
          echo "<br>";   
      echo "<center><table border='2'>
      <tr><td>Roll No.</td><td>$rollno</td></tr>
      <tr><td>Name</td><td>$Sname</td></tr>
      <tr><td>Sub1</td><td>$sub1</td></tr>
      <tr><td>Sub2</td><td>$sub2</td></tr>
      <tr><td>Sub3</td><td>$sub3</td></tr>
      <tr><td>Sub4</td><td>$sub4</td></tr>
      <tr><td>Sub5</td><td>$sub5</td></tr>
      </table></center>";
    }


    ?>
    <p><center>To go back to main page <a href="index.html">Click here</a></center></p>
      </body>
</html>
