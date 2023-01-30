<?php

include('../db.php');

// Get the post variables
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }


// Get the post variables
$nom_complet = $_POST['nom_complet'];
$nom_completAr = $_POST['nom_completAr'];
$domaine = $_POST['domaine'];
$domaineAr = $_POST['domaineAr'];
$desc = $_POST['desc'];
$descAr = $_POST['descAr'];

// Check if the variables are empty
if(empty($nom_complet) || empty($nom_completAr) || empty($domaine) || empty($domaineAr) || empty($desc) || empty($descAr) )
    die("All Fields are Required");

// File path configuration
$upload_path = '../../img/';
$file_path = $upload_path . $_FILES['file']['name'];
$file_type = pathinfo($file_path, PATHINFO_EXTENSION);
// File extension
$file_ext = explode('.', $_FILES['file']['name']);
$file_ext = strtolower(end($file_ext));

$file_name = "img/team/".uniqid().".".$file_ext;

// Allowed file types
$allowed_types = array('jpg', 'png', 'jpeg');

// Check if the upload field is not empty
if (!empty($_FILES['file']['name'])) {
    // Check if the file type is allowed
    if(in_array($file_type, $allowed_types)){
        // Upload the file
        if (move_uploaded_file($_FILES['file']['tmp_name'], "../../".$file_name)) {
            // Prepare the insert statement
            $stmt = $conn->prepare("INSERT INTO employes (nom_complet, nom_completAr, domaine, domaineAr, descr, descrAr, file_path) VALUES (:nom_complet, :nom_completAr, :domaine, :domaineAr, :desc, :descAr, :file_path)");
            $stmt->bindParam(':nom_complet', $nom_complet);
            $stmt->bindParam(':nom_completAr', $nom_completAr);
            $stmt->bindParam(':domaine', $domaine);
            $stmt->bindParam(':domaineAr', $domaineAr);
            $stmt->bindParam(':desc', $desc);
            $stmt->bindParam(':descAr', $descAr);
            $stmt->bindParam(':file_path',$file_name);
            
            // Execute the statement
            $stmt->execute();
            header("location:../employes.php");


        } else {
            echo "Failed to upload the file.";
            header("location:../employes.php");

        }
    } else {
        echo "File type not allowed.";
        header("location:../employes.php");

    }
} else {
    // Prepare the insert statement without the file path field
    $stmt = $conn->prepare("INSERT INTO employes (nom_complet, nom_completAr, domaine, domaineAr, descr, descrAr) VALUES (:nom_complet, :nom_completAr, :domaine, :domaineAr, :desc, :descAr)");
    $stmt->bindParam(':nom_complet', $nom_complet);
    $stmt->bindParam(':nom_completAr', $nom_completAr);
    $stmt->bindParam(':domaine', $domaine);
    $stmt->bindParam(':domaineAr', $domaineAr);
    $stmt->bindParam(':desc', $desc);
    $stmt->bindParam(':descAr', $descAr);
            
    // Execute the statement
    $stmt->execute();
    header("location:../employes.php");


}

// Close the connection
$conn = null;

