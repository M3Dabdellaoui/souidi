<?php include('admin/db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JUSTICE - Free Lawyer Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
    <!--  Translation -->
    <!--<script>
        Weglot.initialize({
            api_key: 'wg_988348f8d0f16e4ff3af1cc9c77a608b2'
        });
    </script> -->
</head>

<body>
<?php
    $stmt = $conn->prepare("SELECT * FROM employes where visibility=1 ORDER BY `id` DESC");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    
    $stmt = $conn->prepare("SELECT * FROM partners where visibility=1 ORDER BY `id` DESC");
    $stmt->execute();
    $partners = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $conn->prepare("SELECT * FROM news ORDER BY `id` DESC");
    $stmt->execute();
    $news = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    
?>

    <!-- navbar style start -->
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
        background-color: rgba(0, 0, 0, 0.5);
        border: solid rgba(0, 0, 0, 0.5);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, 0), inset 0 .125em .5em rgba(0, 0, 0, .15);
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
      

        .navbar {
            
            z-index: 1000;
            margin-bottom: 20px;
        }
        
    </style>
   
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                    <!-- navbar start -->
                    <nav class=" container-fluid navbar navbar-expand-lg navbar-text  navbar-light rounded" aria-label="Thirteenth navbar example">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                        <a class="navbar-brand col-lg-3 me-0" href="#"  style="color :#B49C73; font-size: 30pt;"><img src="img/new_logo.png" style="height :100px; z-index: 100"></a>
                        <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                            <li class="nav-item">
                                <a href="index.html" class="nav-item nav-link active" style="font-size: 1.25rem" >Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="nav-item nav-link" style="font-size: 1.25rem">A propos</a>
                            </li>
                            <li class="nav-item">
                                <a href="#services" class="nav-item nav-link" style="font-size: 1.25rem">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#team" class="nav-item nav-link" style="font-size: 1.25rem">Equipe</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-item nav-link " style="font-size: 1.25rem">Contact</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-item nav-link " onclick="openPopup()" style="font-size: 1.25rem">à votre écoute</a>
                            </li> -->
                        </ul>
                        <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                                <div class="d-inline-flex align-items-center p-2">
                                                <!-- <div class="dropdown"> -->
                                                
                                                <!-- <ul class="dropdown-menu" style="width : 40px;">
                                                    <li><div style="margin-left : 20px;"><img src="img/maroc.png" style="height: 30px;">Ar</div></li>
                                                    <li><div style="margin-left : 20px;"><img src="img/france.png" style="height: 30px;">Fr</a></div></li>
                                                </ul>
                                                </div> -->
                                                <a class="btn btn-sm " href="index_Ar.php" style="color : white;">
                                                    Ar <img src="img/maroc.png" style="height: 30px; margin:5px;"> 
                                                </a>
                                                <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                                    <!-- <i style="color : white;" class="fab fa-facebook-f"></i> -->
                                                    <img src="img/facebook.png" alt="twbs" width="32" height="32" class="flex-shrink-0">
                                                </a>
                                                <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                                    <!-- <i style="color : white;" class="fab fa-twitter"></i> -->
                                                    <img src="img/twitter.png" alt="twbs" width="32" height="32" class="flex-shrink-0">
                                                </a>
                                                <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                                    <!-- <i style="color : white;" class="fab fa-linkedin-f"></i> -->
                                                    <img src="img/linkedin.png" alt="twbs" width="32" height="32" class="flex-shrink-0">
                                                </a>
                                                <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                                    <!-- <i style="color : white;" class="fab fa-instagram-f"></i> -->
                                                    <img src="img/instagram.png" alt="twbs" width="32" height="32" class="flex-shrink-0">
                                                </a>
                                                
                                                       
                                </div>
                        </div>
                        </div>
                    </div>
                    </nav>
                    <!-- navbar end -->

                <div class="carousel-item position-relative " style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;font-size:50px;"><b>Bureau d'avocat</b></h1><br />
                            <h3 class="text-uppercase mb-4" style=" color :#B49C73; etter-spacing: 3px;"><i>conseil juridique, médiation, arbitrage, redaction de contrats et actes juridiques & contentieux</i></h3>

                            <h3 class="display-2 text-white mb-4">Nos clients sont au cœur de notre <br />savoir-faire.</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#appointement_start">Obtenir un rendez-vous</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Les résultats que vous méritez</h4> -->
                            <h3 class="display-2  text-white mb-4">Droit & Justice : <br /> notre arsenale juridique </h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#">Appelez-nous maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="img/fondateur.png" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <input type="checkbox" id="check1" class="check" style="display: none;">
                    <h2 class="position-relative text-center  text-primary rounded p-3 mt-4 mb-4 d-none d-lg-block" style=" background-color:unset; background-color:#37373F; width: 350px; margin-left: -205px;">37 ans d'experience en magistrature</h2>
                    <h6 class="text-uppercase">En savoir plus sur nous</h6>
                    <h1 class="mb-4">De nos différences nait la cohérence.</h1>
                    <p>Fondé par les soins du Dr. My El Hassan Souidi, avocat au barreau de Casablanca/ Marrakech, Agrée près de la cour suprême de Rabat, et arbitre inscrit à l’ordre national des arbitres.</p><br />
                    
                    <div class="content">
                        <p>
                        Issu d’un cursus universitaire juridique solide, My El Hassan Souidi est titulaire d’une licence en droit privé , suite de quoi il obtient un Master en droit privé /sciences pénales , pour enfin achever ses études universitaires par un Doctorat en droit privé à la faculté des sciences juridiques et économiques Ibn Zohr d’Agadir.
                        Lauréat de l’institut supérieur de la magistrature de Rabat , My El Hassan Souidi jouit d’un parcours professionnel judiciaire remarquable . Ayant exercé en qualité de Substitut du Procureur du Roi près du tribunal de première instance de Marrakech , également en qualité de substitut du Procureur Général du Roi près de la cour d’appel de Marrakech.<br />
                        <br />
                        Le cabinet Maître My EL Hassan Souidi, a mis en place une équipe dotée de divers talents qui œuvrent pour être à la hauteur des enjeux et des responsabilités qui lui sont confiés.<br />
                        <br />
                        Il étoffe ses services par la collaboration avec un réseau d’experts pluridisciplinaires  aux compétences variées et aux parcours complémentaires.<br />
                        </p>   
                    </div>
                    <label for="check1" class="btn btn-primary mt-2">encore plus</label>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5" id="services">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3" style="font-size:18px;">
                    <h6 class="text-uppercase">Notre pratique</h6>
                    <h1 class="mb-4">Nos domaines d’intervention </h1>
                    <p>
                    <lu>
                        <li>Conseil juridique</li>
                        <li>Les modes alternatifs de réglement des conflits De l'assisgnation à l'exécution</li>
                        <li>Rédaction de contracts & actes juridiques</li>
                        <li>Contentieux</li>
                    </lu>
                    </p>
                    <!-- <a href="" class="btn btn-primary mt-2">Plus de services</a> -->
                </div>
                <div class="col-lg-9 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div><!--à supprimer-->
                    <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4" id="modif1">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-landmark"></i>
                            </div>
                            <h5 class="mb-4 px-4">Du conseil <br >au <br >contentieux </h5>
                            <input type="checkbox" id="check2" class="check" style="display: none;">
                            <div class="content">
                                <p class="m-0">
                                    Le cabinet Souidi Avocat vous accompagne en conseil juridique ainsi qu'en contentieux dans l'ensemble des matières juridiques, pour toutes les formes de procédures et devant toutes les juridictions du royaume (civiles, pénales, commerciales, administratives etc. ….). <br />
                                    <br />
                                    A vocation généraliste, quel que soit votre statut particulier ou professionnel ; secteur privé ou public et quel que soit votre situation marocain ou étranger ; notre cabinet est votre partenaire juridique idéal tant en matière de conseil qu'en celle du contentieux.
                                </p>
                            </div>
                            <label for="check2" class="btn btn-primary mt-2">encore plus</label>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4" id="modif2">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-users"></i>
                            </div>
                            <h5 class="mb-4 px-4">Rédaction de contrats et actes juridiques</h5>
                            <input type="checkbox" id="check3" class="check" style="display: none;">
                            <div class="content">
                                <p class="m-0">
                                    Notre cabinet vous propose une rédaction sur mesure de vos contrats et actes juridiques qui, à la fois s’adapte à vos besoins et vous protège en cas de litige. <br />
                                    <br />
                                    Nous prenons en considération la particularité de chaque contrat et/ou acte juridique et nous l’établissons de manière minutieuse en toute adéquation avec vos situations. <br />
                                </p>
                            </div>
                            <label for="check3" class="btn btn-primary mt-2">encore plus</label>

                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4" id="modif3">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-hand-holding-usd"></i>
                            </div>
                            <h5 class="mb-4 px-4">Modes Alternatifs de règlement des conflits</h5>
                            <input type="checkbox" id="check4" class="check" style="display: none;">
                            <div class="content">
                                <p>
                                    Les MARC regroupent : la négociation, la médiation et l’arbitrage, qui s’appliquent aussi bien aux litiges d’affaires qu’entre particuliers, permettant ainsi de résoudre les conflits avec succès  et économie en temps et argent tout en préservant vos relations.<br />
                                    <br />
                                    Notre équipe a une veritable expertise à la pratique des MARC via ses experts spécialement formés à ces méthodes non judiciares.<br />

                                </p>
                            </div>
                            <label for="check4" class="btn btn-primary mt-2">encore plus</label>
                        </div>
                        <!--another seervice-->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-gavel"></i>
                            </div>
                            <h5 class="mb-4 px-4">conseille juridique </h5>
                            <input type="checkbox" id="check5" class="check" style="display: none;">
                            <div class="content">
                                <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p>
                            </div>
                            <label for="check5" class="btn btn-primary mt-2">encore plus</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Appointment Start -->
    <?php
    // Get the post variables
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $hour = $_POST['hour'];
        $method = $_POST['method'];
        $service = $_POST['service'];
        $state=1;

        // Check if the variables are empty
        if(empty($name) || empty($email) || empty($phone) ||empty($date) || empty($hour) || empty($method) || empty($service) )
            die("All Fields are Required");

        // Prepare the insert statement
        $stmt = $conn->prepare("INSERT INTO appointments (nom_complet, email, phone, Rdate, Rhour, method, service, state) VALUES (:nom_complet, :email, :phone, :Rdate, :Rhour, :method, :service, :state)");
        $stmt->bindParam(':nom_complet', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':Rdate', $date);
        $stmt->bindParam(':Rhour', $hour);
        $stmt->bindParam(':method', $method);
        $stmt->bindParam(':service', $service);
        $stmt->bindParam(':state', $state);
        // Execute the statement
        $stmt->execute();
        // Close the connection
        $conn = null;
    }

    ?>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);" id="appointement_start">
                            <h1 class="text-center text-white mb-4">Obtenir un rendez-vous</h1>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control border-0 p-4" placeholder="Nom Complet" required="required" />
                                </div>
                                <div class="form-group">
                                    <input  type="email" name="email" class="form-control border-0 p-4" placeholder="Votre Adresse Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control border-0 p-4" placeholder="Votre numero de telephone" required="required" />
                                </div>

                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                                <input type="text" name="date" class="form-control border-0 p-4 datetimepicker-input" placeholder="Sélectionner une date" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <input type="text" name="hour" class="form-control border-0 p-4 datetimepicker-input" placeholder="Sélectionnez l'heure" data-target="#time" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select name="method" class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>method de consultation</option>
                                        <option value="1">à distance </option>
                                        <option value="2">au bureau</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="service" class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Sélectionnez un service</option>
                                        <option value="1">Droit des affaires </option>
                                        <option value="2">Rédaction de contrats et actes juridiques</option>
                                        <option value="3">Modes Alternatifs de règlement des conflits</option>
                                    </select>
                                </div>
                                <div>
                                    <button name="submit" class="btn btn-primary btn-block border-0 py-3" type="submit">Obtenir un rendez-vous</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Features Start -->
    <div class="container-fluid py-5" id="features"> 
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div style="background:#37373F; color:white; "class="feature-text  rounded p-lg-5">
                        <h6 style="color:white;" class="text-uppercase">Pour-quoi nous choisir </h6>
                        <!--<h1 class="mb-4">Pourquoi nous choisir</h1>-->
                        <h1 style="color:white;" class="text-uppercase">Porteur d'une nouvelle vision de la profession </h1><br />
                        <br />
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h4 style="color:white;">Respect du serment de la profession </h4>
                                <input type="checkbox" id="check6" class="check" style="display: none;">
                                <div class="content">
                                    <p>
                                    Pionnier pour le respect du droit et de la justice,notre cabinet donne serment d'exercer ses fonctions comme avocat avec dignité, conscience, indépendance, probité et humanité.<br />
                                    </p>   
                                </div>
                                <label for="check6" class="btn btn-primary mt-2">encore plus</label>
                                <!--<p class="m-0">Notre cabinet est fondé sur le respect du droit et de la justice, donne serment d'exercer ses fonctions comme avocat avec dignité, conscience, indépendance, probité et humanité.</p>-->
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h4 class="text-secondary m-0">02</h4>
                            </div>
                            <div class="ml-4">
                                <h4 style="color:white;">Allégeance à la déontologie de la profession</h4>
                                <input type="checkbox" id="check7" class="check" style="display: none;">
                                <div class="content">
                                    <p>
                                    Ayant la conviction que la stricte estime de l'axiologie de la profession d'avocat est le levier majeur pour, d'une part rehausser le professionnalisme et par conséquent le degré de confiance envers cette industrie; et d'autre part maintenir la dignité et l'intégrité des professionnels de ce corps.<br />
                                    Souidi Avocat prête serment d'allégeance aux piliers de l'avocature :<br />
                                    <ul>
                                        <li><b>Loyauté</b></li>
                                        <li><b>Confidentialité</b></li>
                                        <li><b>Secret professionnel</b></li>

                                    </ul>
                                    </p>   
                                </div>
                                <label for="check7" class="btn btn-primary mt-2">encore plus</label>
                                <!-- <p class="m-0">
                                </p> -->
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h4 style="color:white;">Notre trio gagnant </h4>
                                <input type="checkbox" id="check8" class="check" style="display: none;">
                                <div class="content">
                                    <p>
                                        <lu>
                                            <li><b style="color : #B49C73;">Le Savoir :</b> Maîtrise par excellence de la matière juridique et l’art de la plaidoirie avec un esprit de <b>dévouement.</b></li>
                                            <li><b style="color : #B49C73;">Le Savoir-faire :</b> Méthodologie de travail fondée sur <b>l'efficacité</b>, <b>l'efficience</b> et la <b>diligence.</b></li>
                                            <li><b style="color : #B49C73;">Le Savoir-être :</b> Relation-client bâtie sur la <b>confiance</b>, <b>la transparence</b> et la <b>disponibilité.</b></li> 
                                        </lu>
                                    </p>   
                                </div>
                                <label for="check8" class="btn btn-primary mt-2">encore plus</label>
                                <!--<p class="m-0">Proximité, expertise, implication, transversalité, et réactivité.<br />
                                Les départements du cabinet font avant tout des relations professionnelles, des relations humaines. Ils sont organisés par pôles de compétences, qui s'impliquent totalement dans les dossiers qui leurs sont confiés en intervenant conjointement sur ceux qui sont transversales afin de répondre à vos attentes et honorer notre engagement d'être à vos côtés.-->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Action Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-action rounded" style="height: 500px;">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-white mb-4">Commençons. Appelez-nous maintenant pour une consultation </h1>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="#">Appelez-nous maintenant</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Action End -->

    <!-- Team Start -->
    <div class="container-fluid py-5" id="team">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Notre Equipe</h6>
                <h1 class="mb-4">Rencontrez Notre Equipe</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">

                    <?php
                    foreach ($results as  $employe) {
                    ?>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4" >
                            <h5 class="mb-2 px-4 text-truncate"><?= $employe['nom_complet'] ?></h5>
                            <p class="mb-3 px-4 text-truncate"  style="font-size:1rem;"><?= $employe['domaine'] ?></p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="<?= $employe['file_path'] ?>" style="height:240px;"  alt="">
                                <div class="team-social">
                                    <button class="btn btn-outline-light mx-1" data-bs-toggle="modal" data-bs-target="#team_<?=$employe['id'] ?>">Afficher</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Partners Start -->
    <div class="container-fluid py-5" id="team">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Notre Partenaires</h6>
                <h1 class="mb-4">Rencontrez Nos Partenaires</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">

                    <?php
                    foreach ($partners as  $partner) {
                    ?>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4" >
                            <h5 class="mb-2 px-4 text-truncate"><?= $partner['nom_complet'] ?></h5>
                            <p class="mb-3 px-4 text-truncate" style="font-size:1rem;"><?= $partner['domaine'] ?></p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="<?=$partner['file_path'] ?>" style="height:240px;"  alt="">
                                <div class="team-social">
                                    <button class="btn btn-outline-light mx-1" data-bs-toggle="modal" data-bs-target="#team_<?=$partner['id'] ?>">Afficher</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners End -->
    


   


<?php foreach ($partners as  $partner) { ?>
        <!-- Modal -->
        <div class="modal fade" tabindex="-1" id="team_<?=$partner['id'] ?>"  aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $partner['nom_complet'] ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <h6 class="modal-title text-center" style="font-size:1.5rem;"><?= $partner['domaine'] ?></h6>
              <div class="text-center"><img src="<?= $partner['file_path'] ?>" style="height:300px;" class="img-fluid rounded" alt="..."></div>
              <p class="mt-1 text-center"><?= $partner['descr'] ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>

<?php foreach ($results as  $employe) { ?>
        <!-- Modal -->
        <div class="modal fade" tabindex="-1" id="team_<?=$employe['id'] ?>"  aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="exampleModalLabel"><?= $employe['nom_complet'] ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <h6 class="modal-title text-center" style="font-size:1.5rem;"><?= $employe['domaine'] ?></h6>
              <div class="text-center "><img src="<?= $employe['file_path'] ?>" style="height:300px;" class="img-fluid rounded" alt="..."></div>
              <p class="mt-1 text-center"><?= $employe['descr'] ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>

        


<!--  Partners End -->




    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;" id="contact">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Notre bureau</h5>
                        <p class="m-0">123 Street, Marrakech, Maroc</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Envoyez-nous un email</h5>
                        <p class="m-0">info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Appelez-nous</h5>
                        <p class="m-0">+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>

<!------------------------------------------------------------------------------------------------------->
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="justify-content-lg-cent p-4">
                    
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-lg-cent">
                        <img src="img/souidi.jpg" style="z-index: 50">
                    </a>
                    
                    <p>Nos clients sont au cœur de notre métier.</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-lg btn-outline-primary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-outline-primary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-outline-primary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-outline-primary btn-lg-square mr-2"  href="#"><i class="fab fa-instagram"></i></a>
                        <!-- <a class="btn btn-lg btn-outline-light btn-lg-square mr-2"  href="#"><i class="fab fa-instagram"></i></a> -->
                    </div>                    
                </div>
            </div>

            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" >
                        <iframe class="center-block" src="https://www.google.com/maps/d/u/0/embed?mid=18CZtfx7l233-iGui7Du5pd4flUWeXCQ&ehbc=2E312F" width="590" height="300"></iframe>

                </div>
            </div>
            <div class="col-lg-4">

            <?php
            // Get the post variables
            if(isset($_POST['sinscrire'])){
                $client_email = $_POST['client_email'];
                if(!empty($client_email)){
                    // Prepare the insert statement
                    $client_stmt = $conn->prepare("INSERT INTO potential_clients (email) VALUES (:email)");
                    $client_stmt->bindParam(':email', $client_email);
                     // Execute the statement
                    $client_stmt->execute();
                    // Close the connection
                    $conn = null;
                }


            }

            ?>
                <div>
                    <form action="" method="POST">
                    <h4 class="font-weight-semi-bold text-primary mb-4">News</h4>
                    <p>S'inscrire pour recevoir des nouvelles.</p>
                    <div class="w-100">
                        <div class="input-group">
                            <div class="input-group-append">
                               
                                    <input type="submit" class="btn btn-primary px-4" name="sinscrire" placeholder="s'inscrire">
                                
                            </div>
                            <input type="text" name="client_email" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
<!------------------------------------------------------------------------------------------------------->

        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0" style="font-size:12px">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">Souidi Law</a>. Tous les droits sont réservés.</p>
            </div>
            <div class="col-md-6 text-center text-md-right" style="font-size:12px">
                <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
    
    <!-- Footer End -->


    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>  -->

    <!-- News POP-UP start  -->
    <input type="checkbox" id="check9" class="check" style="display: none; z-index:1000;">
    <div id="news" class="content" >
        <div id="POPUP">News</div>
        <div id="news-container" >

            <?php
                foreach ($news as  $article) {
            ?>  
                <div class="article" id="<?=$article['id'] ?>">
                    <div class="news-title" >
                            <h2><?=$article['title'] ?></h2>
                            <small><?=$article['ndate'] ?></small>
                    </div>
                    <div>
                        <p style="font-size:1rem;"> <?=$article['description'] ?> </p>
                    </div>
                </div>
            <?php }?>
            
        </div>
        
    </div>
    <label for="check9" class="btn btn-primary" style="position: fixed;bottom: 15px;right: 15px; z-index: 15px;"><img src="img/news.png" alt="twbs" width="30" height="30" class="rounded-circle flex-shrink-0"></label> 
    <!-- News POP-UP end  -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>   
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    
</body>

</html>