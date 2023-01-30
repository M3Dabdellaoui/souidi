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
    $title = "";
    $titleAr = "";
    $ndate= date("d/m/Y      h:i a");
    $descr = "";
    $descrAr = "";

    // Check if the $_POST variables exist and set them
    if(isset($_POST['title'])) $title = $_POST['title'];
    if(isset($_POST['titleAr'])) $titleAr = $_POST['titleAr'];
    //if(isset($_POST['ndate'])) $ndate = $_POST['ndate'];
    if(isset($_POST['descr'])) $descr = $_POST['descr'];
    if(isset($_POST['descrAr'])) $descrAr = $_POST['descrAr'];




        // Prepare the update statement without the file path
        $stmt = $conn->prepare("UPDATE news SET title = :title, titleAr = :titleAr, ndate = :ndate, description = :descr, descriptionAr = :descrAr WHERE id = :id");        
        // Bind the parameters to the statement
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':titleAr', $titleAr);
        $stmt->bindParam(':ndate', $ndate);
        $stmt->bindParam(':descr', $descr);
        $stmt->bindParam(':descrAr', $descrAr);
        $stmt->bindParam(':id', $id);
    
        // Execute the statement
        $stmt->execute();
    
        // Close the connection
        $conn = null;
    
        header("location:../news.php");

    }elseif(isset($_GET['id'])){ 
  // Check if the id exists
  $id=$_GET['id'];
$stmt = $conn->prepare("SELECT COUNT(*) FROM news WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$num_rows = $stmt->fetchColumn();

if($num_rows == 0) {
    die("No data found for id: " . $id);
}

// Prepare the select statement
$stmt = $conn->prepare("SELECT * FROM news WHERE id = :id");
$stmt->bindParam(':id', $id);

// Execute the statement
$stmt->execute();


// Fetch the result as an associative array
$result = $stmt->fetch(PDO::FETCH_ASSOC);


    }else{
        echo 'error';
    } ?>