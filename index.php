<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>
		CSE BOOK BANK
	</title>
	<link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./images/favicon">
	<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
		/*  */




		.topnav {
			overflow: hidden;
			background-color: #333;
			position: relative;
		}

		/* Hide the links inside the navigation menu (except for logo/home) */
		.topnav #myLinks {
			display: none;
		}

		/* Style navigation menu links */
		.topnav a {
			color: white;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
			display: block;
		}

		/* Style the hamburger menu */
		.topnav a.icon {
			background: black;
			display: block;
			position: absolute;
			right: 0;
			top: 0;
		}

		/* Add a grey background color on mouse-over */
		.topnav a:hover {
			background-color: #ddd;
			color: black;
		}

		/* Style the active link (or home/logo) */
		.active {
			background-color: #04AA6D;
			color: white;
		}
	</style>
	<!-- nav -->
	<script>
		function myFunction() {
			var x = document.getElementById("myLinks");
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
		}
	</script>
</head>


<body>
	<div style=" background-color:red; width:100vw; height: auto">
		<div class="wrapper">
			<!-- Top Navigation Menu -->
			<section class="navigation">
				<div class="nav-container">
					<div class="brand">
						<a href="#!">
							<div class="logo">
								<img src="images/9.png">
							</div>
						</a>
					</div>

					<?php
					if (isset($_SESSION['login_user'])) {
					?>
						<nav>
							<ul>
								<li><a href="index.php">HOME</a></li>
								<li><a href="books.php">BOOKS</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
								<li><a href="feedback.php">FEEDBACK</a></li>
							</ul>
						</nav>
					<?php
					} else {
					?>
						<nav>
							<ul>
								<li><a href="index.php">HOME</a></li>
								<li><a href="books.php">BOOKS</a></li>
								<li>
									<a href="#!">Category</a>
									<ul class="navbar-dropdown">
										<li>
											<a href="#!">Programming Languages</a>
										</li>
										<li>
											<a href="#!">Data Science</a>
										</li>
										<li>
											<a href="#!">Web Dev</a>
										</li>
									</ul>
								</li>
								<li><a href="student_login.php">LOGIN</a></li>
								<li><a href="registration.php">SIGN-UP</a></li>
								<li><a href="feedback.php">FEEDBACK</a></li>

							</ul>
						</nav>
					<?php
					}

					?>

				</div>
			</section>





			<section>
				<div class="sec_img">
					<br><br><br>
					<div class="box">
						<br><br><br><br>
						<h1 style="text-align: center; font-size: 5vw;" class="heading">Welcome to CSE BooK BanK</h1><br><br>
						<h3 style="text-align: center;font-size: 2vw;"> Quotes --- Books are ...typerwriter</h3><br>
						<!-- <h1 style="text-align: center;font-size: 25px;"> </h1><br> -->
					</div>
				</div>
			</section>

		</div>
	</div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script>
	(function($) {
		$(function() {

			//  open and close nav 
			$('#navbar-toggle').click(function() {
				$('nav ul').slideToggle();
			});


			// Hamburger toggle
			$('#navbar-toggle').on('click', function() {
				this.classList.toggle('active');
			});


			// If a link has a dropdown, add sub menu toggle.
			$('nav ul li a:not(:only-child)').click(function(e) {
				$(this).siblings('.navbar-dropdown').slideToggle("slow");

				// Close dropdown when select another dropdown
				$('.navbar-dropdown').not($(this).siblings()).hide("slow");
				e.stopPropagation();
			});


			// Click outside the dropdown will remove the dropdown class
			$('html').click(function() {
				$('.navbar-dropdown').hide();
			});
		});
	})(jQuery);
</script>

</html>