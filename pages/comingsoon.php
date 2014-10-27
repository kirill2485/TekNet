<?php
include '../getelement.php';
include '../includeme.php';
?>
<html lang="en" class="no-js">
	<head>
		<title> TekNet - Coming soons </title>
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

				echo "<h1>TekNet - Coming soon  </h1> <span>Welcome back, $email </span>";
				?>
			</header>
			<section class="color-5">
			Comming soon
			<br>
			<br>
			<br>
			Messages will be availible by 11/4/2014. You can try out a VERY EARLY alpha version on <a href="messages.php">theteknet.com/pages/messages.php</a>
			<br>
			<br>
			Friends will be availible by 11/7/2014.
			<br>
			<br>
			Delete Account and Update Profile will be availible on 11/8/2014
			</section>
</body>
</html>