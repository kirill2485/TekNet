<?php
include '../getelement.php';
include '../includeme.php';
?>
<html lang="en" class="no-js">
	<head>
		<title> TekNet - Navigation </title>
		<meta name="description" "content=TekNet Login" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>

<body>
		<div class="container">
			<!-- Top Navigation -->

			<header>
			<link rel="stylesheet" type="text/css" href="css/menu.css">
			<?php
include 'topbar.php';
?>
				<?php $email=$_SESSION[sessionemail];
				if ($email==null){
				header( 'Location: index.php' ) ;
				}
				echo "<h1>TekNet - Navigation  </h1> <span>Welcome back, $email </span>";
				?>
			</header>
			<section class="color-5">
			<form action="../index.php">
	            <input type="submit" button class="btn btn-1 btn-1a" value="Home">
	            </form>
	       	<form action="comingsoon.php">
	            <input type="submit" button class="btn btn-1 btn-1a" value="Messages">
	            </form>
	       <form action="comingsoon.php">
	            <input type="submit" button class="btn btn-1 btn-1a" value="Friends">
	            </form>
	       	<form action="settings.php">
	            <input type="submit" button class="btn btn-1 btn-1a" value="Settings">
	            </form>
	       <form action="logout.php">
	            <input type="submit" button class="btn btn-1 btn-1a" value="Logout">
	            </form>
</body>
</html>