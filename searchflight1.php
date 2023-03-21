<?php require_once "dbconnection.php"?>

<!DOCTYPE html>
<html>
<head>
	<title>SEARCH FLIGHT</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family: Century Gothic;
		}
		ul{
			float: right;
			list-style-type: none;
			margin-top: 25px;
		}
		ul li{
			display: inline-block;
		}
		ul li a{
			text-decoration: none;
			color: #fff;
			padding: 5px 20px;
			border: 1px solid #fff;
			transition: 0.6s ease;
		}
		ul li a:hover{
			background-color: #fff;
			color: #000;
		}
		ul li.active a{
			background-color: #fff;
			color: #000;
		}
		.title{
			position: absolute;
			top: 28%;
			left: 50%;
			transform: translate(-50%,-50%);	
		}
		.title h1{
			color: #fff;
			font-size: 70px;
		}
		body{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(plane.jpg);
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
		table.a{
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
			border: 1px solid #fff;
			padding: 10px 30px;
			color: #fff;
			text-decoration: none;
			transition: 0.6s ease;
			font-size: 25px;
		}
		input[type=submit]{
			border: 1px solid #fff;
			padding: 10px 30px;
			text-decoration: none;
			transition: 0.6s ease;
		}
		input[type=submit]:hover{
			background-color: #fff;
			color: #000;
		}
		input[type=text], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
		input[type=date], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
		</style>
	</style>
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li class="active"><a href="#">Search Flight</a></li>
				<li><a href="passengerchoice.html">Back</a></li>
				<li><a href="homepage.html">Home</a></li>
			</ul>
		</div>
		<div class="title">
			<h1>SEARCH FLIGHT</h1>
		</div>
		<form action="searchflight.php" method="post">
			<table class='a' cellspacing="30" width=40%>
				<tr>
					<td>Source</td>
					<td>
					
					<?php
						$query=mysqli_query($con,"select * from flight");
						$rowcount=mysqli_num_rows($query);
					 ?>
					 <select name="source" required >
					 	<option value="">source</option>
					 	<?php
					 		for ($i=1; $i <=$rowcount ; $i++) { 
					 			$row=mysqli_fetch_array($query);
					 			?>
					 			<option><?php echo $row["SOURCE"]?></option>
					 			<?php
					 		}
					 	?>
					</td>
				</tr>
				<tr>
					<td>Destination</td>
					<td>
						<?php
						$query=mysqli_query($con,"select * from flight");
						$rowcount=mysqli_num_rows($query);
					 ?>
					 <select name="destination" required >
					 	<option value="">Destination</option>
					 	<?php
					 		for ($i=1; $i <=$rowcount ; $i++) { 
					 			$row=mysqli_fetch_array($query);
					 			?>
					 			<option><?php echo $row["DESTINATION"]?></option>
					 			<?php
					 		}
					 	?>
					</td>
				</tr>
				<tr>
					<td>Date</td>
					<td>
						<input type="Date" name="date" required>
					</td>
				</tr>
				<tr>
					<td>
						<input type="Submit" value="Search" name="search">
					</td>
				</tr>
			</table>
		</form>
	</header>
</body>
</html>