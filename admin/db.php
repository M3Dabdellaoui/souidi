<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stage";
$options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, $options);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}