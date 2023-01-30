<?php include('../db.php') ?>

<?php
// session
session_start();
if($_SESSION["autoriser"]!="oui"){
   header("location:login.php");
   exit();
}

if(!empty($_POST)){
    $id = $_POST['id'];
    // Initialize variables
    $nom_complet = "";
    $nom_completAr = "";
    $domaine = "";
    $domaineAr = "";
    $descr = "";
    $descrAr = "";
    $file_path = "";

    // Check if the $_POST variables exist and set them
    if(isset($_POST['nom_complet'])) $nom_complet = $_POST['nom_complet'];
    if(isset($_POST['nom_completAr'])) $nom_completAr = $_POST['nom_completAr'];
    if(isset($_POST['domaine'])) $domaine = $_POST['domaine'];
    if(isset($_POST['domaineAr'])) $domaineAr = $_POST['domaineAr'];
    if(isset($_POST['descr'])) $descr = $_POST['descr'];
    if(isset($_POST['descrAr'])) $descrAr = $_POST['descrAr'];

    // Check if the file input is not empty
    if(!empty($_FILES['file']['name'])) {
        // File details
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_error = $_FILES['file']['error'];
        
        
        // File extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        $name = "img/team/".uniqid().".".$file_ext;

        // Allowed file types
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        // Check if the file extension is allowed
        if(in_array($file_ext, $allowed)) {
            // Check for any errors
            if($file_error === 0) {
                // File path
                $file_path = '../../'.$name;

                // Move the file from the temporary location to the desired location
if(move_uploaded_file($file_tmp, $file_path)) {
    // Prepare the update statement
    $stmt = $conn->prepare("UPDATE employes SET nom_complet = :nom_complet, nom_completAr = :nom_completAr, domaine = :domaine, domaineAr = :domaineAr, descr = :descr, descrAr = :descrAr, file_path = :file_path WHERE id = :id");
    
                    // Bind the parameters to the statement
                    $stmt->bindParam(':nom_complet', $nom_complet);
                    $stmt->bindParam(':nom_completAr', $nom_completAr);
                    $stmt->bindParam(':domaine', $domaine);
                    $stmt->bindParam(':domaineAr', $domaineAr);
                    $stmt->bindParam(':descr', $descr);
                    $stmt->bindParam(':descrAr', $descrAr);
                    $stmt->bindParam(':file_path', $name);
                    $stmt->bindParam(':id', $id);
    
                    // Execute the statement
                    $stmt->execute();
    
                    // Close the connection
                    $conn = null;
                    
                    header("location:../employes.php");

                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
        }
    } else {
        // Prepare the update statement without the file path
        $stmt = $conn->prepare("UPDATE employes SET nom_complet = :nom_complet, nom_completAr = :nom_completAr, domaine = :domaine, domaineAr = :domaineAr, descr = :descr, descrAr = :descrAr WHERE id = :id");        // Bind the parameters to the statement
        $stmt->bindParam(':nom_complet', $nom_complet);
        $stmt->bindParam(':nom_completAr', $nom_completAr);
        $stmt->bindParam(':domaine', $domaine);
        $stmt->bindParam(':domaineAr', $domaineAr);
        $stmt->bindParam(':descr', $descr);
        $stmt->bindParam(':descrAr', $descrAr);
        $stmt->bindParam(':id', $id);
    
        // Execute the statement
        $stmt->execute();
    
        // Close the connection
        $conn = null;
    
        header("location:../employes.php");
    }}elseif(isset($_GET['id'])){ 

        // Check if the id exists
        $id=$_GET['id'];
        $stmt = $conn->prepare("SELECT COUNT(*) FROM employes WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $num_rows = $stmt->fetchColumn();

        if($num_rows == 0) {
            die("No data found for id: " . $id);
        }

        // Prepare the select statement
        $stmt = $conn->prepare("SELECT * FROM employes WHERE id = :id");
        $stmt->bindParam(':id', $id);

        // Execute the statement
        $stmt->execute();


        // Fetch the result as an associative array
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

            }else{
                echo 'error';
            } ?>  