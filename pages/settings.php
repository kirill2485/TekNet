<?php
include '../includeme.php';
?>
<html lang="en" class="no-js">
	<head>
		<title> TekNet - Settings </title>
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
				echo "<h1>TekNet - Settings  </h1> <span>Welcome back, $email </span>";
				?>
			</header>
			<section class="color-3">
			<form action="profilesettings.php">
	            <input type="submit" button class="btn btn-1 btn-1a" value="Profile settings">
	            </form>
	       	<form action="accountsettings.php">
	            <input type="submit" button class="btn btn-1 btn-1a" value="Account settings">
	            </form>
</body>
</html>