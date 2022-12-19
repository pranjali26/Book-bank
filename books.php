<?php
include "connection.php";
include "navbar.php";
?>


<!DOCTYPE html>
<html>

<head>
	<title>Books</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./images/favicon">
	<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="stylesheet" href="css/book_card.css">
	
  <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
	<style type="text/css">
		.srch {
			padding-left: 100px;

		}

		body {
			font-family: "Lato", sans-serif;
			transition: background-color .5s;
		}

		.sidenav {
			height: 100%;
			margin-top: 50px;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: #222;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
		}

		.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 25px;
			color: #818181;
			display: block;
			transition: 0.3s;
		}

		.sidenav a:hover {
			color: white;
		}

		.sidenav .closebtn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}

		#main {
			transition: margin-left .5s;
			padding: 16px;
		}

		@media screen and (max-height: 450px) {
			.sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
		}

		.img-circle {
			margin-left: 20px;
		}

		.h:hover {
			color: white;
			width: 300px;
			height: 50px;
			background-color: #00544c;
		}
		.src-row{
	    display: flex;
	    flex-direction: row;
	    align-items: center;
	    justify-content: center;

       }
	   .wrapper{
		max-height: 100px;
		border:1px solid #6db6b9e6;
		display:flex;
		overflow-x: auto;
		
	   }
	   .wrapper::-webkit-scrollbar{
		width: 200px; 
		overflow-x: scroll;
        padding: 4px;
      
      
        overflow-x: auto;
        overflow-y: hidden;
        white-space: nowrap;
		


		

	
		
	   }
	   .wrapper .item{
		min-width:110px;
		height:110px;
		line-height: 110px;
		text-align:center;
		background-color: #6db6b9e6;
		margin-right:2px;
	   }
	</style>

</head>

<body>
	<!--_________________sidenav_______________-->

<!-- JavaScript Bundle with Popper -->

	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

		<div style="color: white; margin-left: 60px; font-size: 20px;">

			<?php
			if (isset($_SESSION['login_user'])) {
				echo "<img class='img-circle profile_img' height=120 width=120 src='images/p.png'>";
				echo "</br></br>";

				echo "Welcome " . $_SESSION['login_user'];
			}
			?>
		</div><br><br>


		<div class="h"> <a href="books.php">Books</a></div>
		<div class="h"> <a href="request.php">Book Request</a></div>
		<div class="h"> <a href="issue_info.php">Issue Information</a></div>
	</div>

	<div id="main">

		<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>


		<script>
			function openNav() {
				document.getElementById("mySidenav").style.width = "300px";
				document.getElementById("main").style.marginLeft = "300px";
				document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			}

			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("main").style.marginLeft = "0";
				document.body.style.backgroundColor = "white";
			}
		</script>
		<!--___________________search bar________________________-->

		<div class="src-row">
	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="search books.." required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
		</form>
	</div>
		<!--___________________request book__________________-->
		<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="bid" placeholder="Enter Book ID" required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit1" class="btn btn-default">Request
				</button>
		</form>
	</div>
	</div>
		<!-- data filter for sorting -->
		<!-- <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-web-dev">Upcoming</li>
              <li data-filter=".filter-app-dev">Past</li>
            </ul>
          </div>
        </div> -->
		<!-- custom scroll -->
		<div class="wrapper">
			<div class="item">box-1</div>
			<div class="item">box-2</div>
			<div class="item" src="">box-3</div>
			<div class="item">box-4</div>
			<div class="item">box-5</div>
			<div class="item">box-6</div>
			<div class="item">box-7</div>
			<div class="item">box-8</div>
			<div class="item">box-9</div>
			<div class="item">box-10</div>
			<div class="item">box-6</div>
			<div class="item">box-7</div>
			<div class="item">box-8</div>
			<div class="item">box-9</div>
			<div class="item">box-10</div>
			<div class="item">box-8</div>
			<div class="item">box-9</div>
			<div class="item">box-10</div>
			<div class="item">box-6</div>
			<div class="item">box-7</div>
		

		</div>
		
		<h2>𝐿𝐼𝒮𝒯 𝒪𝐹 𝐵𝒪𝒪𝒦𝒮</h2>
		<div class="wrapper-flex">
		<?php

		if (isset($_POST['submit'])) {
			$q = mysqli_query($db, "SELECT * from books where name like '%$_POST[search]%' ");

			if (mysqli_num_rows($q) == 0) {
				echo "Sorry! No book found. Try searching again.";
			} else {

				// echo "<table class='table table-bordered table-hover' >";
				// echo "<tr style='background-color: #6db6b9e6;'>";
				// //Table header
				// echo "<th>";
				// echo "ID";
				// echo "</th>";
				// echo "<th>";
				// echo "Book-Name";
				// echo "</th>";
				// echo "<th>";
				// echo "Authors Name";
				// echo "</th>";
				// echo "<th>";
				// echo "Status";
				// echo "</th>";
				// echo "<th>";
				// echo "Quantity";
				// echo "</th>";
				// echo "<th>";
				// echo "category";
				// echo "</th>";
				// echo "</tr>";

				while ($row = mysqli_fetch_assoc($q)) {
				
				// 	echo "<tr>";
				// 	echo "<td>";
				// 	echo $row['bid'];
				// 	echo "</td>";
				// 	echo "<td>";
				// 	echo $row['name'];
				// 	echo "</td>";
				// 	echo "<td>";
				// 	echo $row['authors'];
				// 	echo "</td>";
				// 	echo "<td>";
				// 	echo $row['status'];
				// 	echo "</td>";
				// 	echo "<td>";
				// 	echo $row['quantity'];
				// 	echo "</td>";
				// 	echo "<td>";
				// 	echo $row['category'];
				// 	echo "</td>";

				// 	echo "</tr>";
				}
				// echo "</table>";
			}
		}
		/*if button is not pressed.*/ else {
			$res = mysqli_query($db, "SELECT * FROM `books` ORDER BY `books`.`name` ASC;");

			// echo "<table class='table table-bordered table-hover' >";
			// echo "<tr style='background-color: #6db6b9e6;'>";
			// //Table header
			// echo "<th>";
			// echo "ID";
			// echo "</th>";
			// echo "<th>";
			// echo "Book-Name";
			// echo "</th>";
			// echo "<th>";
			// echo "Authors Name";
			// echo "</th>";

			// echo "<th>";
			// echo "Status";
			// echo "</th>";
			// echo "<th>";
			// echo "Quantity";
			// echo "</th>";
			// echo "<th>";
			// echo "category";
			// echo "</th>";
			// echo "</tr>";

			// for card class for filter
			function setCategory($catt)
			{
				$cat = str_replace(" ", "-", $catt);
				$cat = strtolower($cat);
				return $cat;
			}
			while ($row = mysqli_fetch_assoc($res)) {



		?>


				<div class="card <?php echo setCategory($row['category']); ?>">

					<div class="image">
						<img src="images/category/Datascience.jpg">
					</div>
					<div class="title">
						<h1>
							<?php echo $row['name']; ?>
						</h1>
					</div>
					<div class="des">
						<p> By - <?php echo $row['authors']; ?> </p>
						<?php if ($row['quantity'] == "0") {
							echo ("<p class='blink-0'>Book not present currently.. See similar</p>");
						} else {
							echo ("<marquee class='blink-1'  scrollamount=''>Book is avaliable!</marquee>");
						}  ?>

					<p><b>Book Id-<?php echo $row['bid']; ?></b> </p>
						<button onclick="location.href='./issue_info.php'">Get it Now!</button>
					</div>
				</div>

			<?php
			
            // 	$temp_class = $row['category'];
			// 	echo "<tr class = '$temp_class'>";
			// 	echo "<td>";
			// 	echo $row['bid'];
			// 	echo "</td>";
			// 	echo "<td>";
			// 	echo $row['name'];
			// 	echo "</td>";
			// 	echo "<td>";
			// 	echo $row['authors'];
			// 	echo "</td>";

			// 	echo "<td>";
			// 	echo $row['status'];
			// 	echo "</td>";
			// 	echo "<td>";
			// 	echo $row['quantity'];
			// 	echo "</td>";
			// 	echo "<td>";
			// 	echo $row['category'];
			// 	echo "</td>";

			// 	echo "</tr>";
			}
			// echo "</table>";
		}

		if (isset($_POST['submit1'])) {
			if (isset($_SESSION['login_user'])) {
				mysqli_query($db, "INSERT INTO issue_book Values('$_SESSION[login_user]', '$_POST[bid]', '', '', '');");
			?>
				<script type="text/javascript">
					window.location = "request.php"
				</script>
			<?php
			} else {
			?>
				<script type="text/javascript">
					alert("You must login to Request a book");
				</script>
		<?php
			}
		}

		?>
		</div>
	</div>
</body>

</html>