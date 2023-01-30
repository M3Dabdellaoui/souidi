<?php

include('../db.php');

// Get the post variables
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }

// Get the post variables
$title = $_POST['title'];
$titleAr = $_POST['titleAr'];
// $ndate = $_POST['ndate'];
$ndate = date("d/m/Y h:i a");
$desc = $_POST['desc'];
$descAr = $_POST['descAr'];

// Check if the variables are empty
if(empty($title) || empty($titleAr) || empty($ndate) || empty($desc) || empty($descAr) )
    die("All Fields are Required");

// Prepare the insert statement
$stmt = $conn->prepare("INSERT INTO news (title, titleAr, ndate, description, descriptionAr) VALUES (:title, :titleAr, :ndate, :desc, :descAr)");
$stmt->bindParam(':title', $title);
$stmt->bindParam(':titleAr', $titleAr);
$stmt->bindParam(':ndate', $ndate);
$stmt->bindParam(':desc', $desc);
$stmt->bindParam(':descAr', $descAr);

// Execute the statement
$stmt->execute();
header("location:../news.php");


// Close the connection
$conn = null;

