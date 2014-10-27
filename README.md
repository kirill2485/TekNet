Instructions for running TekNet
======
Make a file in /backend and call it "phplogin.php"
Fill in the file as your SQL DB name:
<?php
    $host = "hostname";
    $user = "user";
    $pwd = "password";
    $db = "database";
    $con=new mysqli($host,$user,$pwd,$db);
 ?>
 
 Run the following SQL commands: 
 CREATE TABLE registeredusers
(
email text,
password text,
name text
);
 CREATE TABLE status
(
message text,
name text,
date datetime,
postnum (int 11) 
#note: postnum is optional, it is a feature currently being worked on to sort posts by number,
);
 CREATE TABLE messages
(
sent text,
recieved text,
time timestamp,
SentTo text
);



To-Do
======
- Sort messages and status updates in order by time created from top to bottom
- Create profile page
  - Friends
  - TekCoins