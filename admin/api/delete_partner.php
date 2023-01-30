<?php 
include('../db.php');

//session
session_start();
if($_SESSION["autoriser"]!="oui"){
   header("location:login.php");
   exit();
}

    $id = $_GET['id'];
   
    $stmt = $conn->prepare("DELETE from partners WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    ob_start();
    header("location:../partners.php?page="."$page");
    ob_end_flush();
    ?>
