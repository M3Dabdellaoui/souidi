<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
   if(date("H")<18)
      $bienvenue="Bonjour et bienvenue dans votre espace personnel";
   else
      $bienvenue="Bonsoir et bienvenue dans votre espace personnel";
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
        <a type="button" class="btn btn-primary" href="deconnexion.php">D??connexion</a>
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
                  <h6 class="mb-0">G??rer les employ??s</h6>
                  <p class="mb-0 opacity-75">Ajouter, Supprimer ou modifier les coordonn??es d'un emply??es.</p>
                </div>
              </div>
            </a>
            <a href="partners.php" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
              <img src="../img/partner.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0">G??rer les partenaires</h6>
                  <p class="mb-0 opacity-75">Ajouter, Supprimer, ou ajouter des actualit??s.</p>
                </div>
              </div>
            </a>
            <a href="news.php" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
              <img src="../img/news.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0">Actualit??s</h6>
                  <p class="mb-0 opacity-75">Ajouter, Supprimer, ou ajouter des actualit??s.</p>
                </div>
              </div>
            </a>
            <a href="links.php" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
              <img src="../img/link.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0">Lien de t??l??chargement</h6>
                  <p class="mb-0 opacity-75">Ce lien se change chaque 24h.</p>
                </div>
              </div>
            </a>
            <a href="file.manager.php" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
              <img src="../img/file_manager.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0">Gestion de fichiers</h6>
                  <p class="mb-0 opacity-75">g??rer les fichiers des clients.</p>
                </div>
              </div>
            </a>
            <a href="calendar.php" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
              <img src="../img/calendar.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0">Gestion des rendez-vous</h6>
                  <p class="mb-0 opacity-75">consulter les rendez-vous avec clients.</p>
                </div>
              </div>
            </a>
            <a href="potential_clients.php" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
              <img src="../img/email.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0">Clients Potentiel</h6>
                  <p class="mb-0 opacity-75">T??lecharger la liste des emails des clients potentiel</p>
                </div>
              </div>
            </a>
          </div>        
      </div>
      <div class="col-md-7 col-lg-8">
        <h1><?php echo $bienvenue?></h1>
        [ <a href="deconnexion.php">Se d??connecter</a> ]
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
