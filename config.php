<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'remotemysql.com');
define('DB_USERNAME', 'tsx9wh5BQr');
define('DB_PASSWORD', 'L2dB22IZoc');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$connect = new mysqli('DB_SERVER', 'DB_USERNAME', 'DB_PASSWORD', 'DB_NAME');
# echo"Connected!!"; 
// Check connection
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

