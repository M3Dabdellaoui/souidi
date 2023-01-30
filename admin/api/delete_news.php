<?php 
include('../db.php');

//session
session_start();
if($_SESSION["autoriser"]!="oui"){
   header("location:login.php");
   exit();
}

    $id = $_GET['id'];
    $page = $_GET['page'];
    $stmt = $conn->prepare("DELETE from news  WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("location:../news.php?page=".$page);
    ?>
