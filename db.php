<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "ncrud";

$db_connection = new mysqli($host, $userName, $password, $dbName) or die("MySQL Error");
if ($db_connection->connect_error) {
    die("Connection failed: " . $db_connection->connect_error);
}
