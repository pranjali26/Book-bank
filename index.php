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
	<link rel="stylesheet" type="text/css" href="./css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
											<a href="#!">Web Devlopement</a>
										</li>
										<li>
											<a href="#!">Machine Learning</a>
										</li>
										<li>
											<a href="#!">App Devlopement</a>
										</li>
										<li>
											<a href="#!">Networking</a>
										</li>
										<li>
											<a href="#!">Mathamathics</a>
										</li>
										<li>
											<a href="#!">System Design</a>
										</li>
										<li>
											<a href="#!">Software Engineering</a>
										</li>
										<li>
											<a href="#!">Software Engineering</a>
										</li>
										<li>
											<a href="#!">Data structure and Algorithm</a>
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
						<h1 style="text-align: center; font-size: 5vw;" class="heading">Welcome to CSE BooK Bank</h1><br><br>
						<h3 style="text-align: center;font-size: 2.5vw;"> Quotes --- Books are ...typerwriter</h3><br>
						<div class="explore-button">
							<h3 class="explore"><a href="books.php">Explore Now</a></h3>
						</div>
					</div>
				</div>
			</section>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#273036" fill-opacity="1" d="M0,32L120,69.3C240,107,480,181,720,192C960,203,1200,149,1320,122.7L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
</svg>
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