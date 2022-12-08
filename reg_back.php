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

// if($category==1){
 $query1="INSERT INTO `student`(`first`, `last`, `username`,`password`,`roll`,`email`,`contact` ) VALUES ('$first','$last','$username','$password','$roll','$emailid', '$phone')";
 if ($db->query($query1) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query1 . "<br>" . $db->error;
  }
 // $req1=mysqli_query($db,$query1);
 // echo("<script>alert('U Have Successfully Registered')</script>");
 // echo("<script>alert($req1)</script>");
//  if(mysqli_num_rows($req1)){
//     $data=mysqli_fetch_assoc($res1);
//     // if(strcmp($data['password'],$password)==0){
//     //     // $_SESSION['Name']=$data['Name'];
//     //     // $_SESSION['Username']=$data['Username'];
//     //     // $_SESSION['Phone_no']=$data['Phone_no'];
//     //     // $_SESSION['aadhar']=$data['aadhar'];
//     //     // $_SESSION['address']=$data['address'];
//     //     // $_SESSION['logged_in'] = true;
//     //     echo("<script> window.location='ahome.php'</script>");
//     }else{
    
//         echo("<script>alert('coudnt create')</script>");
//         //echo("<script> window.location='blogin.php'</script>");
        
//     }


?>