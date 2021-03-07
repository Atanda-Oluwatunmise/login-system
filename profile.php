<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Website Title</h1>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
        <h2>Profile Page</h2>
		<h4>Welcome</h4>
		
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>First Name:</td>
						<td><?=$_SESSION['First_Name'];?></td>
					</tr>
					<tr>
						<td>Surname:</td>
						<td><?=$_SESSION['Surname'];?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$_SESSION['email'];?></td>
					</tr>
					<tr>
						<td>Website:</td>
						<td><?=$_SESSION['website'];?></td>
					</tr>
				</table>
			</div>
</div>

</body>
    </html>