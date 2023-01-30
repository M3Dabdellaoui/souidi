<?php
  include('db.php');

   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
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
      .text-wrap {
        position: relative;
        background-color: #eee;
        padding: 2em;
      }

      textarea {
        min-width: 41vw;
        max-width: 80vw;
        min-height: 100px;
        max-height: 80vh;
        padding: 0.8em 1em;
        font-size: 1em;
        
      }
      textarea::-webkit-scrollbar {
          width: 4px;
      }
      textarea::-webkit-scrollbar-track {
          background: #f1f1f1; 
      }
      textarea::-webkit-scrollbar-thumb {
          background: #888; 
      }
      textarea::-webkit-scrollbar-thumb:hover {
          background: #555; 
      }

      .clipboard.icon {
        position: absolute;
          top: 2.3em;
          right: 2.5em;
        margin-top: 4px;
        margin-left: 4px;
        width: 11px;
        height: 13px;
        border: solid 1px #333333;
        border-top: none;
        border-radius: 1px; 
        cursor: pointer;
      }
      .clipboard.icon:before {
        top: -1px;
        left: 2px;
        width: 5px;
        height: 1px;
        border: solid 1px #333333;
        border-radius: 1px; 
      }
      .clipboard.icon:after {
        width: 3px;
        height: 1px;
        background-color: #333333;
        box-shadow: 8px 0 0 0 #333333; 
      }

      .icon:before, .icon:after {
        content: '';
        position: absolute;
        display: block;
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
            <a href="file.manager.php" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
              <img src="../img/file_manager.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0">Gestion de fichiers</h6>
                  <p class="mb-0 opacity-75">gérer les fichiers des clients.</p>
                </div>
              </div>
            </a>
          </div>        
      </div>
      <!-- UPLOAD LINK start -->
      <div class="col-md-7 col-lg-8">
        <h1><img src="../img/link.png" alt="twbs" height="60" class="rounded-circle flex-shrink-0"> Lien Secret</h1><br />
        <?php
            // set the salt 
            $salt = "mysecret"; 
            // get today's date
            $date = date("Y-m-d"); 
            // generate the hash
            $hash = hash("sha256", $date . $salt);
            $link="http://localhost/project-web/upload.php?token=".$hash;      
        ?>
        <div class="text-wrap">
          <textarea id="textA" readonly> <?=$link?> </textarea>
          <div id="copyToClipboard-a" class="clipboard icon"></div>
        </div>
      </div>
      <script>
        //copy link to clipboard
        document.getElementById('copyToClipboard-a').addEventListener('click', function() {
  
          var text = document.getElementById('textA');
          text.select();
          document.execCommand('copy');

        })
      </script>
      <!-- UPLOAD LINK end -->
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Souidi law</p>
    
      <!-- <a class="list-inline-item"><a href="#">Se deconnecter</a>     -->
  </footer>
</div>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>
