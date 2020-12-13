<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'heroku_23b9b3b190ec73b');
define('DB_USERNAME', 'be8d2047567ed9');
define('DB_PASSWORD', '800f7dca');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$connect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
# echo"Connected!!"; 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
