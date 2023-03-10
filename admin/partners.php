<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
?>

<?php include('db.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Panneau administratif</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
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

    
    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
  </head>
  <body class="bg-light">

    <!-- header start  -->
    <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="./admin.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="../img/new_logo.png" alt="twbs" height="80px" class="flex-shrink-0">
      </a>
      <div class="col-md-3 text-end">
        <a type="button" class="btn btn-primary" href="deconnexion.php">Déconnexion</a>
      </div>
    </header>
  </div>
  <!-- header end -->
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../img/admin.png" alt=""  height="200">
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
                  <p class="mb-0 opacity-75">Télecharger la liste des emails des clients potentiel</p>
                </div>
              </div>
            </a>
          </div>
          
            

            <!-- Modal (add) start -->
            <div class="modal fade" id="addPartner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="api/add_partner.php" method="post"  enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">Nom complet</label>
                        <input required type="text" class="form-control" name="nom_complet">
                    </div>
                    <div class="mb-3" dir="rtl">
                        <label class="form-label">الاسم الكامل</label>
                        <input required dir="rtl" type="text" class="form-control" name="nom_completAr">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Domaine d'activité</label>
                        <input required type="text" class="form-control" name="domaine">
                    </div>
                    <div class="mb-3" dir="rtl">
                        <label class="form-label">مجال الممارسة</label>
                        <input required type="text" class="form-control" name="domaineAr">
                    </div>
                    <div class="mb-3">
                    <div class="form-floating">
                        <textarea required class="form-control" name="desc" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>
                    </div>
                    <div class="mb-3" dir="rtl">
                    <div class="form-floating">
                        <textarea required class="form-control" name="descAr" placeholder="Description" id="floatingTextarea3" style="height: 100px"></textarea>
                        <label for="floatingTextarea3">وصف</label>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Photo</label>
                        <input required class="form-control" name="file" type="file" id="formFile">
                    </div>

                    
                    </div>
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </form>
                </div>
                </div>
              </div>
          </div>
        </div>
                <!-- Modal (add) end -->
            
        

            
            
       
        

        
      
      <div class="col-md-7 col-lg-8">
      <button class="btn btn-sm btn-outline-secondary float-end" data-bs-toggle="modal" data-bs-target="#addPartner"><img src="../img/add_sign.png" alt="twbs" width="30" height="30" class="rounded-circle flex-shrink-0">Ajouter un partenaire</button>
        <h4 class="mb-3"> <img src="../img/partnerss.png" alt="twbs" height="100" class="flex-shrink-0"> Gérer les partenaires</h4>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nom complet</th>
                <th scope="col">Practice Area</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                <th scope="col">Etat</th>

                </tr>
            </thead>
                    <tbody>
                        <?php
                        //Recuperer le nombre d'enregistrement
                        $tcount = $conn->prepare("select count(id) as cpt from partners");
                        $tcount->execute();
                        $count = $tcount->fetchAll(PDO::FETCH_ASSOC);

                        // pagination
                        @$page=$_GET["page"];
                        if(empty($page)) $page=1;
                        $nbr_elements_par_page=5;
                        $nbr_de_pages=ceil($count[0]["cpt"]/$nbr_elements_par_page);
                        $debut=($page-1)*$nbr_elements_par_page;

                        //recuperation des données de la base
                        $stmt = $conn->prepare("SELECT * FROM partners ORDER BY `id` DESC limit $debut,$nbr_elements_par_page");
                        $stmt->execute();
                        $p_results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        
                        foreach ($p_results as  $partner) {
                                    $balise='';
                                    $etat='';
                                    if ( $partner['visibility']== '1' ){
                                        $etat.='<p style="color : green;" >active</p>';
                                        $balise.='<a href="api/hide_partner.php?id='.$partner['id'].'"><img src="../img/hide.png" alt="twbs" width="32" height="32" class="action flex-shrink-0"></a>';
                                    } elseif ( $partner['visibility']== '0' ) { 
                                        $etat.='<p style="color : red;">hidden</p>';
                                        $balise.='<a href="api/reveal_partner.php?id='.$partner['id'].'"><img src="../img/reveal.png" alt="twbs" width="32" height="32" class="action flex-shrink-0"></a>';
                                    }
                        ?>
                        
                        <tr>
                            <td><?= $partner['nom_complet'] ?></td>
                            <td><?= substr($partner['domaine'],0,20). "..."?></td>
                            <td ><?=substr($partner['descr'],0,20)." ..." ?></td>
                            <td>
                                <a data-bs-toggle="modal" data-bs-target="#editpartner<?=$partner['id']?>"><img src="../img/modify.png" alt="twbs" width="32" height="32" class="action flex-shrink-0"></a>
                                <script language="javascript">
                                  function deleteItem(id) {
                                    if (confirm("êtes-vous sûr de vouloir supprimer ce partenaire?")) {
                                      var xhr = new XMLHttpRequest();
                                      xhr.open("GET", "http://localhost/project-web/admin/api/delete_partner.php?id=" + id, true);
                                      xhr.onreadystatechange = function() {
                                        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                                          alert("Employé supprimé avec succès.");
                                          window.location="http://localhost/project-web/admin/partners.php";
                                          
                                        } 
                                        // else {
                                        //   alert("Une erreur s'est produite lors de la suppression de l'employé.");
                                        // }
                                      };
                                      xhr.send();
                                    } else {
                                      alert("Vous avez refusé de continuer.");
                                    }
                                  }
                                </script>
                                <a onClick="deleteItem(<?= $partner['id'] ?>)"><img src="../img/delete.png" alt="twbs" width="32" height="32" class="action flex-shrink-0"></a>
                                      <!-- edit MODAL START-->
                                      <div class="modal fade" id="editpartner<?=$partner['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                          <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter un membre de l'équipe</h1>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                          <form action='api/edit_partner.php' method="post"  enctype="multipart/form-data">
                                              <input type="hidden" name="id" value="<?= $partner['id'] ?>">
                                              <div class="mb-3">
                                                  <label for="" class="form-label">Nom complet</label>
                                                  <input required type="text" class="form-control" value="<?= $partner['nom_complet'] ?>" name="nom_complet">
                                              </div>
                                              <div class="mb-3" dir="rtl">
                                                  <label class="form-label">الاسم الكامل</label>
                                                  <input required dir="rtl" type="text" class="form-control" value="<?= $partner['nom_completAr'] ?>" name="nom_completAr">
                                              </div>
                                              <div class="mb-3">
                                                  <label for="" class="form-label">Domaine d'activité</label>
                                                  <input required type="text" value="<?= $partner['domaine'] ?>" class="form-control" name="domaine">
                                              </div>
                                              <div class="mb-3" dir="rtl">
                                                  <label class="form-label">مجال الممارسة</label>
                                                  <input required type="text" value="<?= $partner['domaineAr'] ?>" class="form-control" name="domaineAr">
                                              </div>
                                              <div class="mb-3">
                                              <div class="form-floating">
                                                  <textarea required class="form-control" name="descr" placeholder="description" id="floatingTextarea2" style="height: 100px"><?= $partner['descr'] ?></textarea>
                                                  <label for="floatingTextarea2">descrription</label>
                                              </div>
                                              </div>
                                              <div class="mb-3" dir="rtl">
                                              <div class="form-floating">
                                                  <textarea required class="form-control" name="descrAr" placeholder="description" id="floatingTextarea3" style="height: 100px"><?= $partner['descrAr'] ?></textarea>
                                                  <label for="floatingTextarea3">وصف</label>
                                              </div>

                                              <div class="mb-3">
                                                  <label for="formFile" class="form-label">Photo</label>
                                                  <input  class="form-control" name="file" type="file" id="formFile">
                                              </div>
                                              </div>
                                              <button type="submit" class="btn btn-primary">Sauveguarder</button>
                                          </form>
                                          </div>
                                          </div>
                                      </div>
                                      </div>
                                      
                                      <!-- edit MODAL end-->


                                <?= $balise ?>
                            </td>
                            <td>
                                <?= $etat ?>                                    
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>

            <!-- list des pages start -->
            <div id="pagination">
              <?php
                for($i=1;$i<=$nbr_de_pages;$i++){
                  if($page!=$i)
                    echo "<a class='page-list' href='?page=$i'style=''>$i</a>";
                  else
                    echo "<a class='page-list-active' href='?page=$i'style=''>$i</a>";
                }
              ?>
            </div>
            <!-- list des pages start -->

      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy;  Souidi</p>
  </footer>
</div>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>
