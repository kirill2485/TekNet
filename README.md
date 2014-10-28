What is TekNet
======
TekNet is a unique open-source social network currently open to PAUSD Students. If you are a non-PAUSD student, feel free to use this code to create your own social network. 

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
);
 CREATE TABLE messages
(
sent text,
recieved text,
time timestamp,
SentTo text
);

note: Postnum in the status table is optional, it is a feature currently being worked on to sort posts by number.

To-Do
======
- Sort messages and status updates in order by time created from top to bottom
- Create profile page
  - Friends
  - TekCoins
  - Profile Pictures
  - Get Me Rated
- Possibility to delete users account on request
