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
	<link rel="stylesheet" href="css/filter.css">
	<link href="js/aos/aos.css" rel="stylesheet">
	<!-- CSS only -->
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
			.sidenav {
				padding-top: 15px;
			}

			.sidenav a {
				font-size: 18px;
			}
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

		.src-row {
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: center;

		}

		.tags {
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: center;
			margin-top: 5vh;
			margin-bottom: 5vh;
		}

		.btn {
			border: 1px solid #78757d;
			border-radius: 5px;
			background-color: white;
			color: black;
			/* padding: 10px 28px; */
			font-size: 14px;
			cursor: pointer;
			margin-left: 1vw;
			margin-right: 1vw;
		}

		/* Gray */
		.default {
			border-color: grey;
			color: black;
		}

		.default:hover {
			background: #6db6b9e6;
		}
	</style>
<script>
//   AOS.init();
</script>
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

		<div class="src-row" data-aos="fade-down">
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
		<div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul class="filter-button-group">
              <li data-filter="*" class="filter-active">
			 All
			  </li>
              <li data-filter=".filter-software-engineering">
			Software Engineering
			</li>
              <li data-filter=".filter-data-structure-and-algorithm">DSA</li>
			  </li>
              <li data-filter=".filter-programming-language">Programming Languages</li>
			  </li>
              <li data-filter=".filter-networking">Networking</li>
			  </li>
              <li data-filter=".filter-web-developement">Web Dev</li>
			  <li data-filter=".filter-mathamathics">Mathamathics</li>
            </ul>
          </div>
        </div>


		<h2 style="text-align: center; font-weight:bold">𝐿𝐼𝒮𝒯 𝒪𝐹 𝐵𝒪𝒪𝒦𝒮</h2>
		<div class="wrapper-flex portfolio-container">
			<?php

			// general utility functions 
			function setImgPath($catt)
			{
				$cat = trim($catt);
				// $cat = 
				$newcat = strtolower(str_replace(" ", "-", $cat));
				// set image folder path here 

				$url = '/images/category-img/' . $newcat . '.jpg';
				if ($newcat != "") {
					return $url;
				} else return '/images/category-img/software-engineering.jpg';
			}
			function setCategory($catt)
			{
				$cat = str_replace(" ", "-", $catt);
				$cat = strtolower($cat);
				return $cat;
			}

			if (isset($_POST['submit'])) {
				$q = mysqli_query($db, "SELECT * from books where name like '%$_POST[search]%' ");


				if (mysqli_num_rows($q) == 0) {
					echo "Sorry! No book found. Try searching again.";
				} else {

					while ($row = mysqli_fetch_assoc($q)) {
			?>

						<div class="card book filter-<?php echo setCategory($row['category']); ?>" style=" position: relative;" data-aos="fade-up">
							<?php
							$temp_tag_color = $row['quantity'] ==  '0' ? 'red' : 'green';
							?>

							<div class="image">
								<img src=".<?php echo setImgPath($row['category']); ?>" alt="<?php echo $row['category']; ?> Image" style=" position: relative;">
								<div class="blink tag" style="background-color:<?php echo $temp_tag_color; ?>;">
									<p class="count"><?php echo $row['quantity']; ?></p>
								</div>
								<div class="tag-foot">
									<p>Copy</p>
								</div>
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
					}
				}
			}
			/*if button is not pressed.*/ else {
				$res = mysqli_query($db, "SELECT * FROM `books` ORDER BY `books`.`name` ASC;");


				// for card class for filter

				while ($row = mysqli_fetch_assoc($res)) {


					?>


					<div class="card filter-<?php echo setCategory($row['category']); ?>" style=" position: relative;" data-aos="zoom-in-up">
						<?php
						$temp_tag_color = $row['quantity'] ==  '0' ? 'red' : 'green';
						?>

						<div class="image">
							<img src=".<?php echo setImgPath($row['category']); ?>" alt="<?php echo $row['category']; ?> Image" style=" position: relative;">
							<div class="blink tag" style="background-color:<?php echo $temp_tag_color; ?>;">
								<p class="count"><?php echo $row['quantity']; ?></p>
							</div>
							<div class="tag-foot">
								<p>Copy</p>
							</div>
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

	<script src="./js/jquery/jquery.min.js"></script>
  <script src="./js/aos/aos.js"></script>
  <script src="./js/common.js"></script>
  <script src="./js/isotope-layout/isotope.pkgd.min.js"></script>
</body>

</html>