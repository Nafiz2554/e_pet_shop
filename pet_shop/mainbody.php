<!DOCTYPE html>
<html>

<head>
	<style>
		body {
			background: linear-gradient(rgb(182 248 255 / 32%),rgb(161 234 237)),url(./img/back.jpg);
			background-size: 100%;

		}

		#pet ul li {
			box-shadow:-1px 2px 6px #041a4c;
			width: 300px;
			height: 350px;
			background: linear-gradient(230deg lightgreen skyblue);
			float: left;
			margin-top: 30px;
			margin-left: 62px;
			list-style-type: none;
			border: 1px solid #000;
			border-radius: 50px;
		}

		#pet ul li a {
			text-decoration: none;
			color: #000;
		}

		#pet1 ul li {
			box-shadow:-1px 2px 6px #041a4c;
			width: 300px;
			height: 350px;
			background: linear-gradient(230deg lightgreen skyblue);
			float: left;
			margin-top: 30px;
			margin-left: 62px;
			list-style-type: none;
			border: 1px solid #000;
			border-radius: 50px;
		}

		#pet1 ul li a {
			text-decoration: none;
			color: #000;
		}
	</style>
</head>

<body>
	<?php
	include("db.php");
	$query = $con->prepare("select *from petdetails where pet_type='rabbit' order by 1 desc LIMIT 0,4");
	$query->execute();
	echo "<div id='pet'>
    <h1 style='text-shadow:3px 3px 3px #000000;padding-left:10px;padding-top:25px;margin-left:60px;margin-top:20px;width:92%; color:crimson;font-weight:bolder;text-align:center;height:40px;line-height:40px;font-size:35px;border-radius:4px;'>RaBbiTs</h1>";
	while ($row = $query->fetch()) :

		echo "<ul>
				<li><a href='viewdetails.php?id=" . $row['pet_id'] . "'>
					<h1 style='text-align:center;'>" . $row['pet_name'] . "</h1>
					<img src='petphotos/" . $row['pet_img1'] . "' style='width:260px;height:250px;margin-left:20px;border-radius:4px;'>
					<h1 style='text-align:center;font-size:20px;font-weight:normal;margin-top:10px;'>Rate (Tk.  " . $row['pet_rate'] . ")</h1>
				</a></li>
			</ul>";

	endwhile;



	echo "</div><br>";
	$query = $con->prepare("select *from petdetails where pet_type='bird' order by 1 desc LIMIT 0,4");
	$query->execute();
	echo "<div id='pet1'>
    <h1 style='text-shadow:3px 3px 3px #000000;padding-left:10px;padding-top:25px;margin-left:60px;margin-top:400px;width:92%;color:crimson;font-weight:bolder;text-align:center;height:40px;line-height:40px;font-size:35px;border-radius:4px;'>BiRdS</h1>";
	while ($row = $query->fetch()) :

		echo "<ul>
				<li><a href='viewdetails.php?id=" . $row['pet_id'] . "'>
					<h1 style='text-align:center;'>" . $row['pet_name'] . "</h1>
					<img src='petphotos/" . $row['pet_img1'] . "' style='width:260px;height:250px;margin-left:20px;border-radius:4px;'>
					<h1 style='text-align:center;font-size:20px;font-weight:normal;margin-top:10px;'>Rate (Tk.  " . $row['pet_rate'] . ")</h1>
				</a></li>
			</ul>";

	endwhile;



	echo "</div>";

	$query = $con->prepare("select *from petdetails where pet_type='dog' order by 1 desc LIMIT 0,4");
	$query->execute();
	echo "<div id='pet1'>
    <h1 style='text-shadow:3px 3px 3px #000000;padding-left:10px;padding-top:25px;margin-left:60px;margin-top:440px;width:92%;color:crimson;font-weight:bolder;text-align:center;height:40px;line-height:40px;font-size:35px;border-radius:4px;'>DoGs</h1>";
	while ($row = $query->fetch()) :

		echo "<ul>
				<li><a href='viewdetails.php?id=" . $row['pet_id'] . "'>
					<h1 style='text-align:center;'>" . $row['pet_name'] . "</h1>
					<img src='petphotos/" . $row['pet_img1'] . "' style='width:260px;height:250px;margin-left:20px;border-radius:4px;'>
					<h1 style='text-align:center;font-size:20px;font-weight:normal;margin-top:10px;'>Rate (Tk.  " . $row['pet_rate'] . ")</h1>
				</a></li>
			</ul>";

	endwhile;



	echo "</div>";

	$query = $con->prepare("select *from petdetails where pet_type='cat' order by 1 desc LIMIT 0,4");
	$query->execute();
	echo "<div id='pet1'>
    <h1 style='text-shadow:3px 3px 3px #000000;padding-left:10px;padding-top:25px;margin-left:60px;margin-top:440px;width:92%;color:crimson;font-weight:bolder;text-align:center;height:40px;line-height:40px;font-size:35px;border-radius:4px;'>CaTs</h1>";
	while ($row = $query->fetch()) :

		echo "<ul>
				<li><a href='viewdetails.php?id=" . $row['pet_id'] . "'>
					<h1 style='text-align:center;'>" . $row['pet_name'] . "</h1>
					<img src='petphotos/" . $row['pet_img1'] . "' style='width:260px;height:250px;margin-left:20px;border-radius:4px;'>
					<h1 style='text-align:center;font-size:20px;font-weight:normal;margin-top:10px;'>Rate (.  " . $row['pet_rate'] . ")</h1>
				</a></li>
			</ul>";

	endwhile;



	echo "</div>";

	?>
</body>

</html>