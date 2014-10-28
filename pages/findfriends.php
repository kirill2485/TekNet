<?php
include '../getelement.php';
include '../includeme.php';
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
				echo "Welcome to TekNet FriendFinder";
				?>