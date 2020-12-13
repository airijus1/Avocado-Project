
<?php
$url = parse_url(getenv("mysql://be8d2047567ed9:800f7dca@eu-cdbr-west-03.cleardb.net/heroku_23b9b3b190ec73b?reconnect=true"));

$server = $url[""];
$username = $url[""];
$password = $url[""];
$db = substr($url[""], 1);

$conn = new mysqli($server, $username, $password, $db);
?>
