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
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style - Ar.css" rel="stylesheet">
    <link href="css/additional_ar_style.css" rel="stylesheet">

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
</head>

<body class="rtl">
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
                        <a class="navbar-brand col-lg-3 me-0" href="#"  style="color :#B49C73; font-size: 30pt;"><img src="img/logo_Ar.png" style="height :100px; z-index: 100"></a>
                        <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                            <li class="nav-item">
                                <a href="index.html" class="nav-item nav-link active">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="nav-item nav-link">A propos de nous</a>
                            </li>
                            <li class="nav-item">
                                <a href="#services" class="nav-item nav-link">Nos pratiques</a>
                            </li>
                            <li class="nav-item">
                                <a href="#team" class="nav-item nav-link">Nos avocats</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-item nav-link ">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-item nav-link " onclick="openPopup()">à votre écoute</a>
                            </li>
                        </ul>
                        <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                                <div class="d-inline-flex align-items-center p-2">
                                                <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                                    <i style="color : white;" class="fab fa-facebook-f"></i>
                                                </a>
                                                <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                                    <i style="color : white;" class="fab fa-twitter"></i>
                                                </a>
                                                <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                                    <i style="color : white;" class="fab fa-linkedin-in"></i>
                                                </a>
                                                <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                                    <i style="color : white;" class="fab fa-instagram"></i>
                                                </a>
                                </div>
                        </div>
                        </div>
                    </div>
                    </nav>
                    <!-- navbar end -->

                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;"><b>Bureau d'avocat</b></h1><br />
                            <h4 class="text-uppercase mb-4" style=" color :#B49C73; etter-spacing: 3px;"><i>conseil juridique, médiation, arbitrage & contentieux</i></h4>

                            <h3 class="display-2 text-capitalize text-white mb-4">Nos clients sont au cœur de notre métier</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#appointement_start">Obtenir un rendez-vous</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Les résultats que vous méritez</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Droit et Justice sont nos matières premières</h3>
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
    <div class="container-fluid py-5" id="style-n" id="about">
        <div class="container py-5">
            <div class="row">

                <div class="col-lg-7 mt-4 mt-lg-0">
                    <!--<h2 class="position-relative text-center bg-white text-primary rounded p-3 mt-4 mb-4 d-none d-lg-block" style="width: 350px; margin-left: -205px;">25 Years Experience</h2>-->
                    <h6 class="text-uppercase">En savoir plus sur nous</h6>
                    <h1 class="mb-4">De nos différences nait la cohérence.</h1>
                    <p>Fondé par les soins du Dr. My El Hassan Souidi, avocat au barreau de Casablanca/ Marrakech, Agrée près de la cour suprême de Rabat, et arbitre inscrit à l’ordre national des arbitres.<br />
                    <br/>
                    Issu d’un cursus universitaire juridique solide, My El Hassan Souidi est titulaire d’une licence en droit privé , suite de quoi il obtient un Master en droit privé /sciences pénales , pour enfin achever ses études universitaires par un Doctorat en droit privé à la faculté des sciences juridiques et économiques Ibn Zohr d’Agadir.
                    Lauréat de l’institut supérieur de la magistrature de Rabat , My El Hassan Souidi jouit d’un parcours professionnel judiciaire remarquable . Ayant exercé en qualité de Substitut du Procureur du Roi près du tribunal de première instance de Marrakech , également en qualité de substitut du Procureur Général du Roi près de la cour d’appel de Marrakech.<br />
                    <br />
                    Le cabinet Maître My EL Hassan Souidi, a mis en place une équipe dotée de divers talents qui œuvrent pour être à la hauteur des enjeux et des responsabilités qui lui sont confiés.<br />
                    <br />
                    Il étoffe ses services par la collaboration avec un réseau d’experts pluridisciplinaires  aux compétences variées et aux parcours complémentaires.<br />
                    </p>
                    <a href="" class="btn btn-primary mt-2">encore plus</a>
                </div>

                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="img/about.jpg" alt="">
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5" id="services">
        <div class="container py-5">
            <div class="row">

                <div class="col-lg-9 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div><!--à supprimer-->
                    <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4" id="modif1">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-landmark"></i>
                            </div>
                            <h5 class="mb-4 px-4">Droit des affaires </h5>
                            <p class="m-0">
                                Le cabinet accompagne les acteurs économiques à tous stades de leur vie sociale et également dans les divers contentieux pouvant survenir à cette occasion.<br />
                                <br />
                                <lu>
                                    <li>
                                    Droit des sociétés : est l’ensemble des règles techniques juridiques et fiscales sur lesquelles repose l’organisation d’une entreprise et son développement.</li>
                                    <li>
                                    (Opérations et capital, droit des contrats, contentieux commercial et résolution de conflits, droit pénal des affaires......)</li>
                                    <li>
                                    Droit commercial : est la branche du droit qui, régit spécifiquement les activités de production, de distribution, et de services.
                                    (Activité commerciale, baux commerciaux, fonds de commerce, responsabilités......)</li>
                                </lu>

                            </p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4" id="modif2">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-users"></i>
                            </div>
                            <h5 class="mb-4 px-4">Rédaction de contrats et actes juridiques</h5>
                            <p class="m-0">
                                Notre cabinet vous propose une rédaction sur mesure de contrats et actes juridiques qui , à la fois s’adaptent à vos besoins et vous protègent en cas de litige.<br />
                                <br />
                                Nous prenons en consideration la particularité de chaque contrat et/ou acte juridique et nous l’établissons de manière pratique et opérationnelle en toute sécurité.<br />
                                


                            </p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4" id="modif3">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-hand-holding-usd"></i>
                            </div>
                            <h5 class="mb-4 px-4">Modes Alternatifs de règlement des conflits</h5>
                            <p class="m-0">
                                Les MARC regroupent : la négociation, la médiation et l’arbitrage, qui s’appliquent aussi bien aux litiges d’affaires qu’entre particuliers, permettant ainsi de résoudre les conflits avec succès  et économie en temps et argent tout en préservant vos relations.<br />
                                <br />
                                Notre équipe a une veritable expertise à la pratique des MARC via ses experts spécialement formés à ces méthodes non judiciares.<br />

                            </p>
                        </div>
                        <!--another seervice-->
                        <!--<div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-gavel"></i>
                            </div>
                            <h5 class="mb-4 px-4">Criminal Law</h5>
                            <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p>
                        </div>-->
                    </div>
                </div>

                <div class="col-lg-3">
                    <h6 class="text-uppercase">Notre pratique</h6>
                    <h1 class="mb-4">Nos domaines d’intervention </h1>
                    <p>
                    <lu>
                        <li>Conseil juridique</li>
                        <li>Les modes alternatifs de réglement des conflits De l'assisgnation à l'exécution</li>
                        <li>Avocat plaidant / postulant</li>
                    </lu>
                    </p>
                    <a href="" class="btn btn-primary mt-2">Plus de services</a>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);" id="appointement_start">
                            <h1 class="text-center text-white mb-4">Obtenir un rendez-vous</h1>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Nom Complet" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="number" min="10" min="12" class="form-control border-0 p-4" placeholder="Email : example@domain.com" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="" class="form-control border-0 p-4" placeholder="Votre numero de telephone: +212 000 000 000" required="required" />
                                </div>

                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                                <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Sélectionner une date" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Sélectionnez l'heure" data-target="#time" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>method de consultation</option>
                                        <option value="1">à distance </option>
                                        <option value="2">au bureau</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Sélectionnez un service</option>
                                        <option value="1">Droit des affaires </option>
                                        <option value="2">Rédaction de contrats et actes juridiques</option>
                                        <option value="3">Modes Alternatifs de règlement des conflits</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Obtenir un rendez-vous</button>
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
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div style="background:#37373F; color:white; " class="feature-text rounded p-lg-5">
                        <h6 style="color:white;" class="text-uppercase">Notre déontologie </h6>
                        <!--<h1 style="color:white;" class="mb-4">Pourquoi nous choisir</h1>-->
                        <h1 style="color:white;" class="text-uppercase">Porteur d'une nouvelle vision de la profession </h1><br />
                        <br />
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5 style="color:white; ">Respect du serment de la profession </h5>
                                <!--<p class="m-0">Notre cabinet est fondé sur le respect du droit et de la justice, donne serment d'exercer ses fonctions comme avocat avec dignité, conscience, indépendance, probité et humanité.</p>-->
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5 style="color:white;">Principes et valeurs</h5>
                                <p class="m-0">
                                </p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 style="color:white;" class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5 style="color:white;">Ce qui nous anime </h5>
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
    <div class="container-fluid py-5"  id="team">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Nos Experts</h6>
                <h1 class="mb-4">Rencontrez Nos Experts</h1>
            </div>
            <div class="row" style="direction: ltr !important;">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/team-5.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
<!-- not available yet
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-5">
                <h6 class="text-uppercase">Testimonial</h6>
                <h1 class="mb-5">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
--> 
    <!-- Testimonial End -->
    


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
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

                    <a href="index_Ar.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-lg-cent">
                        <img src="img/logo_Ar.png" style="z-index: 100">
                    </a>

                    <p>Nos clients sont au cœur de notre métier.</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2"  href="#"><i class="fab fa-instagram"></i></a>
                    </div>                    
                </div>
            </div>

            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" >
                        <iframe class="center-block" src="https://www.google.com/maps/d/u/0/embed?mid=18CZtfx7l233-iGui7Du5pd4flUWeXCQ&ehbc=2E312F" width="590" height="300"></iframe>

                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <h4 class="font-weight-semi-bold text-primary mb-4">News</h4>
                    <p>S'inscrire pour recevoir des nouvelles.</p>
                    <div class="w-100">
                        <div class="input-group">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">S'inscrire</button>
                            </div>
                            <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">

                        </div>
                    </div>
                </div>
            </div>
        </div>
<!------------------------------------------------------------------------------------------------------->





<!--         <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5" style="width:20px;">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n2 display-4 text-primary text-uppercase">Justice</h1>
                </a>
                <p>Nos clients sont au cœur de notre métier.</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2"  href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div style="max-width: 40%; margin-right: 10%" id="map" class = "container">
                <iframe class="center-block" src="https://www.google.com/maps/d/u/0/embed?mid=18CZtfx7l233-iGui7Du5pd4flUWeXCQ&ehbc=2E312F" width="590" height="300"></iframe>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">News</h4>
                <p>S'inscrire pour recevoir des nouvelles.</p>
                <div class="w-100">
                    <div class="input-group">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">S'inscrire</button>
                        </div>
                        <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">

                    </div>
                </div>


            </div>
        </div> -->


        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">

            <div class="col-md-6 text-center text-md-right">
                <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">Your Site Name</a>. Tous les droits sont réservés.</p>
            </div>

        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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