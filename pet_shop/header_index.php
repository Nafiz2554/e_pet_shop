<!DOCTYPE html>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		* {
			margin: 0%;
		}

		nav {
			width: 100%;
			position: sticky !important;
			left: 0;
			top: 0;
			box-shadow: 0px 5px 8px rgba(0, 0, 0, .5);
			z-index: 10;

		}

		a {

			text-decoration: unset;
			font-weight: bold;

		}

		.car img {


			animation: drive infinite 7s;

		}

		@keyframes drive {
			from {
				transform: translateX(0)
			}

			to {
				transform: translateX(525px)
			}
		}

		.dropdown-menu {
			padding-left: 39px;
		}

		.navbar-brand:hover {
			color: rgb(115, 249, 253) !important;
			font-size: x-large;

		}

		.nav-link {
			color: #02637E !important;
			border-bottom: 1px solid transparent;
			font-size: larger;
			text-shadow: 5px 5px 5px lightgrey;
		}

		.nav-link:hover {
			color: crimson !important;
			font-weight: 600;
			font-size: 23px;
			text-shadow: 0px 5px 5px grey;
		}
	</style>
</head>

<body>
	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img style="width: 75%; padding-left:20px;" src="https://img.icons8.com/cotton/64/000000/dog-jump--v3.png" />
			</a>

			<a class="navbar-brand" href="#">

				<form method="post">
					<input type="text" name="search1" placeholder="search pet name" required style="margin-left:20px;text-align:center;margin-top:0px;width:250px;height:40px;border-radius:21px;border:1px solid #425298;font-size:18px;">
					<input type="submit" name="search" value="Go" style="position:relative;margin-top:-40px;font-size:20px;font-weight:bold;width:70px;height:40px;border-radius:20rem;border:1px solid #425298;color:#425298; background: linear-gradient(27deg, #07f3e8, #829597); box-shadow: 2px 2px 3px grey; display: -webkit-box; padding-left:21px;">
					<?php

					if (isset($_POST['search'])) {
						$keyword = $_POST['search1'];
						header("location:search.php?keyword=$keyword");
					}


					?>
				</form>
			</a>



			<a class="navbar-brand" href="#">
				<div class="car"><img src="https://img.icons8.com/ios/50/000000/tow-truck-with-trailers.png" /></div>
			</a>


			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="./index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#projects">Projects</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./contact.php">Contact</a>
					</li>
					<?php
					include("db.php");
					if (!isset($_COOKIE['usernameget'])) {
						echo "<li class='nav-item dropdown'>";
						echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>";
						echo "Login/Registration";
						echo "</a>";
						echo "<ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
						echo "<li><a class='dropdown-item' href='#'>";
						echo "<li><a href='login_pet.php'>Login</a></li>";

						echo "</a></li>";
						echo "<li><a class='dropdown-item' href='#'>";

						echo "<li><a href='newuser.php'>Registration</a></li>";

						echo "</a></li>";

						echo "	</ul>";
						echo "</li>";
					} else {
						$query = $con->prepare("select *from newuser where username='" . $_COOKIE['usernameget'] . "'");
						$query->execute();

						$row = $query->fetch();

						$query21 = $con->prepare("select *from addcart where  user_id='" . $row['id'] . "' order by 1 desc");
						$query21->execute();
						$rcount = $query21->rowCount();

						echo "<li class='nav-item'>";
						echo "<a class='nav-link' href='./carttable.php'>Cart";

						echo "(<b style='color:red;'>$rcount</b>)";

						echo "</a>";
						echo "</li>";

						echo "<li class='nav-item'>";
						echo "<a class='nav-link' href='./myaccount.php'>Account</a>";
						echo "</li>";
						echo "<li class='nav-item'>";
						echo "<a class='nav-link' href='./logout.php'>Logout</a>";
						echo "</li>";
					}
					?>


				</ul>

			</div>

		</div>
	</nav>




	<div id="header">
		<?php
		if (isset($_COOKIE['usernameget'])) {
			echo "<h2 style='border-radius:4px;font-weight:bold; color:darkcyan;text-align:center;margin-top:35px;text-shadow: 2px 3px 4px grey;'>Hi, Welcome " . $_COOKIE['usernameget'] . "</h2>";
		} ?>


	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>