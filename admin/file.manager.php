<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
   if(date("H")<18){
      $bienvenue="Bonjour et bienvenue dans votre espace personnel";
   }else{
      $bienvenue="Bonsoir et bienvenue dans votre espace personnel";
   }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Panneau administratif</title>

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
      .page-list{
        display:inline-block; 
        text-align: center; 
        border:solid;  
        margin : 10px;
        padding : 5px; 
        height:40px; 
        width:40px;
      }

      .page-list:hover{
      display:inline-block; 
      text-align: center; 
      color: white;
      background-color:#0d6efd;
      border:solid #0d6efd;  
      margin : 10px; 
      padding : 5px; 
      height:40px; 
      width:40px;
      transition-duration:0.3s;
      }
      .page-list-active{
      display:inline-block; 
      text-align: center; 
      color: white;
      background-color:#0d6efd;
      border:solid #0d6efd;  
      margin : 10px; 
      padding : 5px; 
      height:40px; 
      width:40px;
      transition-duration:0.3s;
      }
      .action:hover{
        background-color:rgba(0,0,0,0.2);
        border-radius:10px;
        transition-duration:0.2s;
        
      }
    </style>

    
   
  </head>
  
  <body class="bg-light">
  <!-- header start  -->
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="./admin.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="../img/new_logo.png" alt="twbs" height="80px" class="flex-shrink-0">
      </a>
      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <a type="button" class="btn btn-primary" href="deconnexion.php">Déconnexion</a>
      </div>
    </header>
  </div>
  <!-- header end -->
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../img/admin.png" alt="" height="200px">
      <h2>Panneau administratif</h2>
      <p class="lead">Hello Master! Welcome to your space</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Rubriques</span>
          </h4>
          <div class="list-group">
            <a href="employes.php" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
              <img src="../img/add.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0">Gérer les employés</h6>
                  <p class="mb-0 opacity-75">Ajouter, Supprimer ou modifier les coordonnées d'un emplyées.</p>
                </div>
              </div>
            </a>
            <a href="partners.php" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
              <img src="../img/partner.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0">Gérer les partenaires</h6>
                  <p class="mb-0 opacity-75">Ajouter, Supprimer ou modifier les coordonnées d'un partenaire.</p>
                </div>
              </div>
            </a>
            <a href="news.php" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
              <img src="../img/news.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0">Actualités</h6>
                  <p class="mb-0 opacity-75">Ajouter, Supprimer, ou ajouter des actualités.</p>
                </div>
              </div>
            </a>
            <a href="links.php" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
              <img src="../img/link.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0">Lien de téléchargement</h6>
                  <p class="mb-0 opacity-75">Ce lien se change chaque 24h.</p>
                </div>
              </div>
            </a>
          </div>        
      </div>
      <div class="col-md-7 col-lg-8">
      <h4 class="mb-3">Gérer les employés</h4>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">file name</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $dir = "upload/";
            
            // how many files exists in the directory
            $files = scandir($dir);
            
            $file_count = count($files) - 2; // subtract 2 for . and ..
            
            // pagination
            @$page = $_GET["page"];
            if(empty($page)) $page = 1;
            $nbr_elements_par_page = 5;
            $nbr_de_pages = ceil($file_count / $nbr_elements_par_page);
            $debut = 2 + ($page - 1) * $nbr_elements_par_page ;
            
            // Loop through the directory
            $files = array_slice(scandir($dir), $debut, 5); // slice array starting from index 2
            foreach ($files as $file) {
                $id=uniqid();
                if (!is_dir($file)) {
                    // Print the file name and a link to download it
                    echo "<tr>";
                    echo "   <td>". $file." </td>";
                    echo "   <td><a href='api/download.php?file=".$file."'><img src='../img/download.png' alt='twbs' width='32' height='32' class='action flex-shrink-0'></a>";
                    echo "   <a href='api/delete_file.php?file=".$file."&id=".$id."'><img src='../img/delete.png' alt='twbs' width='32' height='32' class='action flex-shrink-0'></a></td>";
                    echo "</tr>";
                  
                }
            }
            
        ?>
        <tbody>
        </table>
        <!-- list des pages start -->
        <div id="pagination">
            <?php
                for($i = 1; $i <= $nbr_de_pages; $i++) {
                    if($page != $i)
                        echo "<a class='page-list' href='?page=$i'style=''>$i</a>";
                    else
                        echo "<a class='page-list-active' href='?page=$i'style=''>$i</a>";
                }
            ?>
</div>
<!-- list des pages end -->
        </div>
        <!-- list des pages end -->
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Souidi law</p>
    
      <!-- <a class="list-inline-item"><a href="#">Se deconnecter</a>     -->
  </footer>
</div>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>