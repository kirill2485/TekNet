<?php
include '../getelement.php';
include '../includeme.php';
include '../backendstuff/phplogin.php';
?>
<body>
		<div class="container">
			<!-- Top Navigation -->

			<header>
			<link rel="stylesheet" type="text/css" href="css/menu.css">
<?php $email=$_SESSION[sessionemail];
	if ($email==null){
		header( 'Location: index.php' ) ;
	}
	echo "<h1>TekNet - Profile search  </h1> <span>Welcome back, $email </span>";
?>
</header>
<section class="color-1">
	Welcome to TekNet's profile search. Please note that this page is still experimental and most functionality is unavailible. Search must match full name of user exactly. If you need support, contact support@theteknet.com.
	<br>
	<br>
		<form method="get">
			Search for a name: <input type="text" name="searchbox">
<?php
	$searchinput=$_GET["searchbox"];
	$result=mysqli_query($con, "SELECT name FROM registeredusers WHERE name='$searchinput'");
	$searchresult=$result->fetch_row();
	$numrows=$result->num_rows;
	if ($numrows>1){
	echo "<br> Results found: ", $numrows, $searchresult[0];
	$searchresult=$result->fetch_row();
	}
	if ($numrows>1){
	echo "<br> Results found: ", $numrows,"<br>", $searchresult[0];
	}
	if ($numrows==1){
	echo "<br> 1 Results found: <br>", $searchresult[0], ": <a href='messages.php'> Message</a>";
	$_SESSION['searchinput']=$searchinput;
	}
	else{
		echo "No results found";
	}
	?>

</section>
