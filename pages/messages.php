<?php
include '../includeme.php';
include '../getelement.php';
include '../backendstuff/phplogin.php';
$searchinput=$_SESSION['searchinput'];
?>
<html lang="en" class="no-js">

<body>
		<div class="container">
			<!-- Top Navigation -->

			<header>
			<?php
include 'topbar.php';
$newMessage= $_GET["searchbox"];
?>
				<?php $email=$_SESSION[sessionemail];
				if ($email==null){
				header( 'Location: index.php' ) ;
				}
				echo "<h1>TekNet - Messages  </h1> <span>Welcome back, $email </span>";
				?>
			</header>
			<section class="color-5">
<form method="post">
Send to: &nbsp  <input type="text" name="to" value="<?php echo $searchinput ?>">
<br>
Message: &nbsp<textarea name="message"></textarea>
<br>
<input type="submit" button class="btn btn-1 btn-1a" value="Submit">
</form>
<?php
$result = $con->query("SELECT * FROM messages WHERE SentTo='$email'");
$row=$result->fetch_assoc();
$message= $_POST["message"];
$to = $_POST["to"];
if ($message==null){
    echo "You have to type in your message";
}
elseif($to==null){
    echo "You have to specify who you are sending the message to";
}
else{
if ($con->query("INSERT INTO messages(sent, SentTo, time, received) VALUES('$message', '$to', now(), '$name')") === TRUE) {
    echo "Message sent";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
?>

<br>
<br>
<?php
$result = $con->query("SELECT sent FROM messages WHERE SentTo='$name'");
//ToDo $sentby= $con_query("SELECT");
$rownum=$result->num_rows;
echo "You have ", $rownum, " messages in total <br>";
$curnum;
while($curnum<$rownum){
$curnum=$curnum+1;
$row=$result->fetch_row();
echo $row[0];
echo "<br>";
}

$column = array();

while($result = mysql_fetch_array($info)){
    $column[] = $row[0];
}
echo $column[0];
?>

