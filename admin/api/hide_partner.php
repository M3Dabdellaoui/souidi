<?php 
include('../db.php');

//session
session_start();
if($_SESSION["autoriser"]!="oui"){
   header("location:login.php");
   exit();
}

    $id = $_GET['id'];
    $stmt = $conn->prepare("UPDATE partners SET visibility = 0 WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("location:../partners.php");
?>