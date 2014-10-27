<?php
session_start();
include 'getelement.php';

?>
<html lang="en" class="no-js">
	<head>
		<meta name="description" "content=TekNet Login" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="../css/default.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" />
		<link rel="stylesheet" type="text/css" href="../css/menu.css">
		<script src="../js/modernizr.custom.js"></script>
	</head>

<body>
		<div class="container">
			<!-- Top Navigation -->
			<header>
							<?php
include '../elementsOnPage/topbar.php';
?>
				<?php $email=$_SESSION[sessionemail];
				if ($email==null){
				header( 'Location: ../index.php' ) ;
				}
?>
</header>
</body>
</html>