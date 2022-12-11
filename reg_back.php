<?php
  include("./connection.php");
  include "navbar.php";

if(isset($_POST['submit'])){
 $first= $_POST['first'];  
 $last= $_POST['last'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $roll= $_POST['roll'];
 $emailid=$_POST['email'];
 $phone=$_POST['contact'];
 $category=1;
 
}	
	

$query0="SELECT * FROM `student` WHERE `roll` = '$roll'";
$row = @mysqli_fetch_array(@mysqli_query($db, $query0));
 if ($username == $row['username'] or $roll == $row['roll']) {
  echo "<div class='alert alert-error'>User Already <b>Present</b> ⚠️ with this Roll Number or Username. Please retry or CONTACT ADMIN at admin@CSE-BOOK-BANK 📧</div>";
  echo ("<script>
  alert('')
  setTimeout(function(){ window.location='registration.php' }, 10000);
  </script>");
  
 }
else{
  $query1="INSERT INTO `student`(`first`, `last`, `username`,`password`,`roll`,`email`,`contact` ) VALUES ('$first','$last','$username','$password','$roll','$emailid', '$phone')";
  if ($db->query($query1) === TRUE) {
   echo("<div class='alert alert-success'>You have Successfully Registered On CSE Book Bank! <br>
   <a href='student_login.php'> Please login here <br><a> </div>");
 
   echo ("<script>
  setTimeout(function(){ window.location='student_login.php' }, 10000);
  </script>");
   } else {
     echo "Error: " . $query1 . "<br>" . $db->error;
   }
}

?>