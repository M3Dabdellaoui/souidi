<?php

session_start();
if($_SESSION["autoriser"]!="oui"){
   header("location:login.php");
   exit();
}


// Get the file name from the query string
$file = $_GET['file'];

// Set the path to the file
$path = '../upload/' . $file;

// Check if the file exists
if (!file_exists($path)) {
    die('The file does not exist.');
}

// Set the appropriate headers for a download
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($path).'"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($path));

// Read the file and output it to the browser
readfile($path);

exit;

?>
s