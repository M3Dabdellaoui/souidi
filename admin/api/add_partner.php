<?php

include('../db.php');

// session
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:../login.php");
      exit();
   }


// Get the post variables
$nom_complet = $_POST['nom_complet'];
$nom_completAr = $_POST['nom_completAr'];
$domaine = $_POST['domaine'];
$domaineAr = $_POST['domaineAr'];
$desc = $_POST['desc'];
$descAr = $_POST['descAr'];
$visibility= 1;


// Check if the variables are empty
if(empty($nom_complet) || empty($nom_completAr) || empty($domaine) || empty($domaineAr) || empty($desc) || empty($descAr) )
    die("All Fields are Required");
    header("location:../partners.php");


// File path configuration
$upload_path = '../../img/';
$file_path = $upload_path . $_FILES['file']['name'];
$file_type = pathinfo($file_path, PATHINFO_EXTENSION);

// File extension
$file_ext = explode('.', $_FILES['file']['name']);
$file_ext = strtolower(end($file_ext));

$file_name = "img/partners/".uniqid().".".$file_ext;

// Allowed file types
$allowed_types = array('jpg', 'png', 'jpeg');

// Check if the upload field is not empty
if (!empty($_FILES['file']['name'])) {
    // Check if the file type is allowed
    if(in_array($file_type, $allowed_types)){
        // Upload the file
        if (move_uploaded_file($_FILES['file']['tmp_name'], "../../".$file_name)) {
            // Prepare the insert statement
            $stmt = $conn->prepare("INSERT INTO partners (nom_complet, nom_completAr, domaine, domaineAr, descr, descrAr, file_path, visibility) VALUES (:nom_complet, :nom_completAr, :domaine, :domaineAr, :desc, :descAr, :file_path, :visibility)");
            $stmt->bindParam(':nom_complet', $nom_complet);
            $stmt->bindParam(':nom_completAr', $nom_completAr);
            $stmt->bindParam(':domaine', $domaine);
            $stmt->bindParam(':domaineAr', $domaineAr);
            $stmt->bindParam(':desc', $desc);
            $stmt->bindParam(':descAr', $descAr);
            $stmt->bindParam(':file_path', $file_name);
            $stmt->bindParam(':visibility', $visibility);
            
            // Execute the statement
            $stmt->execute();
            header("location:../partners.php");

        } else {
            echo "Failed to upload the file.";
        }
    } else {
        echo "File type not allowed.";
    }
} else {
    // Prepare the insert statement without the file path field
    $stmt = $conn->prepare("INSERT INTO partners (nom_complet, nom_completAr, domaine, domaineAr, descr, descrAr, visibility) VALUES (:nom_complet, :nom_completAr, :domaine, :domaineAr, :desc, :descAr, :visibility)");
    $stmt->bindParam(':nom_complet', $nom_complet);
    $stmt->bindParam(':nom_completAr', $nom_completAr);
    $stmt->bindParam(':domaine', $domaine);
    $stmt->bindParam(':domaineAr', $domaineAr);
    $stmt->bindParam(':desc', $desc);
    $stmt->bindParam(':descAr', $descAr);
    $stmt->bindParam(':visibility', $visibility);
            
    // Execute the statement
    $stmt->execute();
    header("location:../partners.php");


}

// Close the connection
$conn = null;

