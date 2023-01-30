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

        $name = "img/partners/".uniqid().".".$file_ext;

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
    $stmt = $conn->prepare("UPDATE partners SET nom_complet = :nom_complet, nom_completAr = :nom_completAr, domaine = :domaine, domaineAr = :domaineAr, descr = :descr, descrAr = :descrAr, file_path = :file_path WHERE id = :id");
    
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

                    header("location:../partners.php");

    
                    echo "Record has been updated successfully and the file has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
        }
    } else {
        // Prepare the update statement without the file path
        $stmt = $conn->prepare("UPDATE partners SET nom_complet = :nom_complet, nom_completAr = :nom_completAr, domaine = :domaine, domaineAr = :domaineAr, descr = :descr, descrAr = :descrAr WHERE id = :id");        // Bind the parameters to the statement
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
    
        header("location:../partners.php");

    }}elseif(isset($_GET['id'])){ ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Modifier les données des partenaires</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <?php
  // Check if the id exists
  $id=$_GET['id'];
$stmt = $conn->prepare("SELECT COUNT(*) FROM partners WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$num_rows = $stmt->fetchColumn();

if($num_rows == 0) {
    die("No data found for id: " . $id);
}

// Prepare the select statement
$stmt = $conn->prepare("SELECT * FROM partners WHERE id = :id");
$stmt->bindParam(':id', $id);

// Execute the statement
$stmt->execute();

// Fetch the p_result as an associative array
$p_result = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<main class="form-signin w-100 m-auto">
                <form action="" method="post"  enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $p_result['id'] ?>">
                    <div class="mb-3">
                        <label for="" class="form-label">Nom complet</label>
                        <input required type="text" class="form-control" value="<?= $p_result['nom_complet'] ?>" name="nom_complet">
                    </div>
                    <div class="mb-3" dir="rtl">
                        <label class="form-label">الاسم الكامل</label>
                        <input required dir="rtl" type="text" class="form-control" value="<?= $p_result['nom_completAr'] ?>" name="nom_completAr">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Domaine d'activité</label>
                        <input required type="text" value="<?= $p_result['domaine'] ?>" class="form-control" name="domaine">
                    </div>
                    <div class="mb-3" dir="rtl">
                        <label class="form-label">مجال الممارسة</label>
                        <input required type="text" value="<?= $p_result['domaineAr'] ?>" class="form-control" name="domaineAr">
                    </div>
                    <div class="mb-3">
                    <div class="form-floating">
                        <textarea required class="form-control" name="descr" placeholder="description" id="floatingTextarea2" style="height: 100px"><?= $p_result['descr'] ?></textarea>
                        <label for="floatingTextarea2">descrription</label>
                    </div>
                    </div>
                    <div class="mb-3" dir="rtl">
                    <div class="form-floating">
                        <textarea required class="form-control" name="descrAr" placeholder="description" id="floatingTextarea3" style="height: 100px"><?= $p_result['descrAr'] ?></textarea>
                        <label for="floatingTextarea3">وصف</label>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Photo</label>
                        <input  class="form-control" name="file" type="file" id="formFile">
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sauveguarder</button>
                </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    
  </body>
</html>
<?php 
}else{
    echo 'error';
    
} ?>