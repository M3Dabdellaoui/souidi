<?php
   $message="";
   $requete="";
   if(isset($_POST["valider"])){
      if(!preg_match("#jpeg|png#",$_FILES["monfichier"]["type"]))
         $message='<span class="nook">Format invalide!</span>';
      elseif($_FILES["monfichier"]["size"]>2000000)
         $message='<span class="nook">Taille trop grande!</span>';
      else{
      	$requete.='
      	                <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">'.$_POST["name"].'</h5>
                            <p class="mb-3 px-4">'.$_POST["bio"].'</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="img/'.$_FILES["monfichier"]["name"].' alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>'
      }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data" >
		<input type="text" name="name" id="name" placeholder="employee's name" />
		<input type="text" name="bio" id="bio" placeholder="employee's description" />
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
		<input type="file" name="monfichier" /><br />
		<input type="submit" name="valider" value="Uploader" />
	</form>

</body>
</html>