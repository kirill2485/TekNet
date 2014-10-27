<?php
session_start();

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>
<html>
<meta http-equiv="refresh" content="0; url=../index.php" />
</html>