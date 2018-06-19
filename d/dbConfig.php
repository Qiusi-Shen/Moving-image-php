<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "cs143";
$dbPassword = "";
$dbName     = "imagedb";

$authorName = "aa";
$deviceName = "d1";
$timeName = "t1";

// the directory to store image
$targetDir = "./$authorName/";
$srcDir = "./src/";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>

