<?php 



$servername = "localhost";
$username = "bloodona_mood704";
$password = "chaitanya1234";
$dbname = "bloodona_mood704";

// Create connection
$conn = mysql_connect($servername, $username, $password);
$con2=mysql_select_db($dbname, $conn);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
} 

?>