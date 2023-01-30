<?php

session_start();
if($_SESSION["autoriser"]!="oui"){
   header("location:login.php");
   exit();
}



// Get the file name from the query string
$file = $_GET['file'];
$file_id = $_GET['id'];

// Set the path to the file
$path = '../upload/' . $file;

// Check if the file exists
if (!file_exists($path)) {
    die('The file does not exist.');
}


// Delete the file
unlink($path);

// Print a message to confirm that the file has been deleted
echo 'File with ID ' . $file_id . ' has been deleted.';

exit;

?>
s