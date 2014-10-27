<?php
include '../getelement.php';
include '../includeme.php';
?>
<html lang="en" class="no-js">
	<head>

		<title> TekNet - Settings </title>
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
				if ($email==null){
				header( 'Location: index.php' ) ;
				}
				echo "<h1>TekNet - Account settings </h1> <span>Welcome back, $email </span>";
				?>
			</header>
			<section class="color-3">
    			<form action="save.php">
	            <input type="submit" button class="btn btn-1 btn-1a" value="Manage blocklist">
	            </form>
			<form action="#">
	            <input type="submit" button class="btn btn-1 btn-1a" value="Upgrade to premium">
	            </form>
	            <form action="deleteaccount.php">
	            <input type="submit" button class="btn btn-1 btn-1a" value="Delete account">
	            </form>
	            </section>

</body>
</html>