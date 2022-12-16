<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <style type="text/css">
        /* .wrapper */
        /* { */
        /* width: 300px; */
        /* margin: 0 auto; */
        /* color: white; */
        /* } */
        body {
            /* background-color: #f9f9fa */
            
            /* background-color: skyblue; For browsers that do not support gradients */
              /* background-image: linear-gradient( skyblue,white); */
        }

        .padding {
            /* padding: 20rem !important */
            margin-left:200px ;
            margin-top: 59px;
        }

        .user-card-full {
            overflow: hidden;
        }

        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
            box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
            border: none;
            margin-bottom: 30px;
        }

        .m-r-0 {
            margin-right: 0px;
        }

        .m-l-0 {
            margin-left: 0px;
        }

        .user-card-full .user-profile {
            border-radius: 5px 0 0 5px;
        }

        .bg-c-lite-green {
            background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
            background: linear-gradient(to right, #ee5a6f, #f29263);
        }

        .user-profile {
            padding: 20px 0;
        }

        .card-block {
            padding: 1.25rem;
        }

        .m-b-25 {
            margin-bottom: 25px;
        }

        .img-radius {
            border-radius: 5px;
        }



        h6 {
            font-size: 14px;
           
        }

        .card .card-block p {
            line-height: 25px;
        }

        @media only screen and (min-width: 1400px) {
            p {
                font-size: 14px;
            }
        }

        .card-block {
            padding: 1.25rem;
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0;
        }

        .m-b-20 {
            margin-bottom: 20px;
        }

        .p-b-5 {
            padding-bottom: 5px !important;
        }

        .card .card-block p {
            line-height: 25px;
        }

        .m-b-10 {
            margin-bottom: 10px;
        }

        .text-muted {
            color: #919aa3 !important;
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0;
        }

        .f-w-600 {
            font-weight: 600;
        }

        .m-b-20 {
            margin-bottom: 20px;
        }

        .m-t-40 {
            margin-top: 20px;
        }

        .p-b-5 {
            padding-bottom: 5px !important;
        }

        .m-b-10 {
            margin-bottom: 10px;
        }

        .m-t-40 {
            margin-top: 20px;
        }

        .user-card-full .social-link li {
            display: inline-block;
        }

        .user-card-full .social-link li a {
            font-size: 20px;
            margin: 0 10px 0 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        h2{
            margin-bottom: 5px;
            padding-top: 2px;
        }
        
    </style>
</head>




<?php

$q = mysqli_query($db, "SELECT * FROM admin where username='$_SESSION[login_user]' ;");

// $row=mysqli_fetch_assoc($q);

?>

<h2 style="text-align: center;" >Profile</h2>

<?php
$row = mysqli_fetch_assoc($q);

?>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                </div>
                                <h6 class="f-w-600"><?php echo $row['first'];
                                                    echo $row['last']; ?> </h6>
                                <p>Admin</p>
                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">username</p>
                                        <h6 class="text-muted f-w-400"><?php echo $row['username']; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">password</p>
                                        <h6 class="text-muted f-w-400">********</h6>
                                    </div>

                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">email</p>
                                        <h6 class="text-muted f-w-400"><?php echo $row['email']; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400"><?php echo $row['contact']; ?></h6>
                                    </div>
                                </div>

                              
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>