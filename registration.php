<?php
  include "connection.php";
  include "navbar.php";
 ?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
</head>
<body>

<section>
  <div class="reg_img">

    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> 𝐂𝐒𝐄 𝐁𝐎𝐎𝐊 𝐁𝐀𝐍𝐊</h1>
        <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1>

      <form name="Registration" action="reg_back.php" method="POST">
        
        <div class="login">
          <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
          <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>

          <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
          <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>

          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
      </form>
     
    </div>
  </div>
</section>

<?php
 if(isset($_POST['submit'])){
 $first= $_POST['first'];  
 $last= $_POST['last'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $roll= $_POST['roll'];
 
 $emailid=$_POST['email'];
 $phone=$_POST['contact'];
 

 $category=1;
 
 
    
    // $nam = dataFilter($_POST['Name']);
    // $mobile = dataFilter($_POST['mobile']);
    // $name = dataFilter($_POST['Username']);
    // $emailid = dataFilter($_POST['Email']);
    // $password =	dataFilter(password_hash($_POST['Password'], PASSWORD_BCRYPT));
    // $category = dataFilter($_POST['category']);
	// $address = dataFilter($_POST['adr']);
}	
	
// $length = strlen($phone);

// if($length != 10)
// {
// 	$_SESSION['message'] = "Invalid Mobile Number !!!";
// //	header("location: error.php");
// 	die();
// }

if($category==1){
 $query1="INSERT INTO `student`(`first`, `last`, `username`,`password`,`roll`,`email`,`contact` ) VALUES ('$first','$last','$username','$password','$emailid',$phone')";
 $req1=mysqli_query($db,$query1);
 echo("<script>alert('U Have Successfully Registered')</script>");
 // echo("<script>window.location='login.php'</script>");
 }
// else{
// 	$query1="INSERT INTO `buyinfo`(`Name`, `Username`, `Phone_no`, `aadhar`, `email`, `password`, `address`) VALUES ('$nam','$name','$phone','$aadhar','$emailid','$password','$address')";
// 	$req1=mysqli_query($connection,$query1);
// 	echo("<script>alert('U Have Successfully Registered')</script>");
// 	echo("<script>window.location='blogin.php'</script>");
//  }
?>
    

</body>
</html>