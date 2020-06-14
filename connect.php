<?php
function OpenCon()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "institute";


$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . connect_error());
}

}

?> 
