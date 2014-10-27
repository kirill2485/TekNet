<?php
session_start();
$email= $_SESSION['sessionemail'];
if(isset($SESSION["sessionemail"])){
    $email= $_SESSION['sessionemail'];
}
$name= $_SESSION['name'];

if (isset($email)){
    
}
else{
    echo "<script type='text/javascript'> location.assign('index.php'); </script>";
}
?>