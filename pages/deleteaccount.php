<?php
include '../getelement.php';
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
				<?php $email=$_SESSION[sessionemail];
				if ($email==null){
				header( 'Location: index.php' ) ;
				}
				echo "<h1>TekNet - Account settings </h1> <span>Welcome back, $email </span>";
				?>
			</header>
			<section class="color-3">
			<font color="red"><h1>You are about to delete your account. All of your account, including your friends list, your posts, your pictures, and your Pegs will be deleted. Are you sure you want to continue?</h1></font>
			<form action="#">
	            <input type="submit" button class="btn btn-1 btn-1a" value="Yes, delete my account">
	            </form>
	            <form action="settings.php">
	            <input type="submit" button class="btn btn-1 btn-1a" value="No, I'll keep my account">
	            </form>
	            </section>
	            <section>

</body>
</html>