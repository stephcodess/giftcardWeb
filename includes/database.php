<?php

$dbhost = 'localhost'; // Unlikely to require changing
$dbname = 'FJXchange'; // Modify these...
$dbuser = 'root'; // ...variables according
$dbpass = ''; // ...to your installation
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die('unable to connect: ');

if ($conn){
    echo "connected";
}else{
    echo "error";
}
?>