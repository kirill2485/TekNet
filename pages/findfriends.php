<?php
include '../getelement.php';
include '../includeme.php';
include '../backendstuff/phplogin.php';
?>
<html lang="en" class="no-js">
	<head>

		<title> TekNet - FriendFinder </title>
</head>

<body>
		<div class="container">
			<!-- Top Navigation -->
			<header>
				<?php $email=$_SESSION[sessionemail];
				if ($email==null){
				header( 'Location: index.php' ) ;
				}
				echo "<h1>Welcome to TekNet FriendFinder</h1>";
				?>
			</header>
			<section class="color-2">
				<?php
				$result = $con->query("SELECT name FROM registeredusers");
				$numrows=$result->num_rows;
				echo $numrows , " users registered <br>";
				$curnum=0;
				while($numrows>$curnum){
					$curnum= $curnum+1;
					$listname=$result->fetch_row();
					echo $listname[0], "<a href=http://www.theteknet.com/pages/userprofile.php?name=", $submit[0], "> Profile</a><br>";
				}
				?>