<?php 
include('../db.php');

//session
session_start();
if($_SESSION["autoriser"]!="oui"){
   header("location:../login.php");
   exit();
}

    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE from appointments  WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("location:../calendar.php");
    ?>
