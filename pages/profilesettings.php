<?php
include '../includeme.php';
include '../getelement.php';
?>
<html lang="en" class="no-js">
	<head>

		<title> TekNet - Profile Settings </title>
		<meta name="description" "content=TekNet Login" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<script src="js/modernizr.custom.js"></script>
	</head>

<body>
		<div class="container">
			<!-- Top Navigation -->
			<header>
							<?php
include 'topbar.php';
?>
				<?php $email=$_SESSION[sessionemail];
				echo "<h1>TekNet - Profile settings </h1> <span>Welcome back, $email </span>";
				?>
			</header>
			<section class="color-3">
			    Full name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name">
    <br>
    <br>
    <br>
    Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email">
    <br>
    <br>
    <br>
    <br>
    <form action="settings.php">
	    <input type="submit" button class="btn btn-1 btn-1a" value="Save profile">
	</form>

</body>
</html>