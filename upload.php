<?php
$msg='';
// set the salt 
$salt = "mysecret"; 
// get today's date
$date = date("Y-m-d"); 
// generate the hash
@$hash = hash("sha256", $date . $salt);
// compare the generated hash with the provided hash
if ($hash === @$_GET['token']) { 
    $msg.='valid token';
    // continue with script execution
} else {
    $msg.='unvalid token';
    // redirect to index.php
    header("Location:./index.php");
    exit; 
} 
include('admin/db.php');
?>


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
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
    <script>
        Weglot.initialize({
            api_key: 'wg_988348f8d0f16e4ff3af1cc9c77a608b2'
        });
    </script>
</head>

<body>
    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
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
                                <a href="index.php" class="nav-item nav-link">Accueil</a>
                            </li>
                            <!-- <li class="nav-item">
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
                            </li> -->
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
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Envoyez vos fichiers ici. </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- UPLOAD Start -->

        <?php
            @$mssg="";
            if(isset($_POST["submit"])){
                if($_FILES["monfichier"]["type"]=="application/pdf"){
                    if(!file_exists("UPLOAD/".$_POST["file_name"]))
                        {
                            mkdir("UPLOAD/".$_POST["file_name"],0600,false);
                        }
                    if(move_uploaded_file($_FILES["monfichier"]["tmp_name"],"UPLOAD/".$_POST["file_name"]."/".$_FILES["monfichier"]["name"]))
                    {
                        chmod("UPLOAD/".$_POST["file_name"]."/".$_FILES["monfichier"]["name"],0600);
                        @$mssg.="<li>file successfully uploaded </li>";
                    }
                    else{
                     @$mssg.="<li>Error Occured!! </li>";
                    }   
                }
                else{
                     @$mssg.="<li>Error Occured!! </li>";
                }
            }
        ?>



    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <h1 class="text-center text-white mb-4">Upload your file here</h1>
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 id="none" class="text-center text-white mb-4"></h1>

                            <div class="rounded p-5 my-5" >
                                        
                                        <form id="fo" action="" method="POST" enctype="multipart/form-data">
                                              <input name="monfichier" id="upload_zone" type="file" />
                                              <p>Drag your files here or click in this area.</p>
                                              <div class="form-group">
                                                    <input name="file_name" type="text" class="form-control border-0 p-4" placeholder="Nom Complet" required="required" />
                                              </div>                                              <input name="submit" id="upload_button" value="submit" type="submit" />
                                              <div id="error_mssg">
                                                <?php echo $mssg ?>
                                              </div>
                                              
                                        </form>
                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                $('form input').change(function () {
                                                    $('form p').text(this.files.length + " file(s) selected");
                                              });
                                            });
                                        </script>
                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- UPLOAD End -->


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

        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="justify-content-lg-cent p-4">
                    
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-lg-cent">
                        <img src="img/souidi.jpg" style="z-index: 100">
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




        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">Souidi Law</a>. Tous les droits sont réservés.</p>
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