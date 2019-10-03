<?php 

if (extension_loaded('gd') && function_exists('gd_info')) {
    $flashText = "La librairie PHP GD est installée sur le serveur Web";
    $flashLevel = "info";
}
else {
    $flashText = "La librairie PHP GD n'est pas installée sur le serveur Web";
    $flashLevel = "warning";
}

// phpinfo(INFO_MODULES); 

// Définition des dimensions par défaut
$largeurDestination = 200; 
$hauteurDestination = 150;

// Miniature
if(isset($_FILES['imageOrigin']['size']) && $_FILES['imageOrigin']['size'] > 0){
  // Vérifie l'extension de l'image chargée
  switch(exif_imagetype($_FILES['imageOrigin']['tmp_name'])){
    case 2:
      $imgType = 2; // JPEG
      break;
    case 3:
      $imgType = 3; // PNG
      break;
    default :
      $flashText = "L'image n'est pas de format JPG ou PNG";
      $flashLevel = "alert";
      break;
  }
  
  if($flashLevel !== 'alert'){
    // Suppression des fichiers du répertoire image-traitee
    $files = glob('image-traitee/*'); // Récupère tous les nom de fichiers
    foreach($files as $file){ // Boucle sur tous les fichiers
      if(is_file($file))
        unlink($file); // supprime le fichier
    }
    // Récupération du chemin de l'image importée
    $fichierSource = $_FILES['imageOrigin']['tmp_name'];
    $imgNom = $_FILES['imageOrigin']['name'];
    copy($fichierSource, "image-traitee\\$imgNom");
    // Création de l'image de destination (miniature)
    $largeurDestination = $_POST['minWidth'] ? intval($_POST['minWidth']) : $largeurDestination; 
    $hauteurDestination = $_POST['minHeight'] ? intval($_POST['minHeight']) : $hauteurDestination;
    switch($imgType){
      case 2:  // JPEG
        $imageTemp = imagecreatetruecolor($largeurDestination, $hauteurDestination)
              or die ("Erreur lors de la création de l'image");
        // Lecture de l'image importée
        $source = imagecreatefromjpeg($fichierSource);
        break;
      case 3: // PNG
        // $imageTemp = @imagecreate($largeurDestination, $hauteurDestination)
        //       or die ("Erreur lors de la création de l'image");
        $imageTemp = imagecreatetruecolor($largeurDestination, $hauteurDestination);      
        imagesavealpha($imageTemp, true);
        $color = imagecolorallocatealpha($imageTemp, 0, 0, 0, 127);
        imagefill($imageTemp, 0, 0, $color);
        // Lecture de l'image importée
        $source = imagecreatefrompng($fichierSource);
        break;
    } 
    
    // Récupération des dimensions de l'image importée
    $largeurSource = imagesx($source); 
    $hauteurSource = imagesy($source); 
  
    // Copie de l'image importée dans l'image temporaire aux dimensions miniature: redimensionnement
    imagecopyresampled($imageTemp, $source, 0, 0, 0, 0, $largeurDestination, $hauteurDestination, $largeurSource, $hauteurSource); 
    
    $miniature = "image-mini\mini_$imgNom";
    switch($imgType){
      case 2:  // JPEG
        imageJpeg ($imageTemp, $miniature);
        break;
      case 3: // PNG
        imagePng ($imageTemp, $miniature);
        break;
    } 
        
      // echo "Image miniature générée: <img src='$miniature' />";
  }

}

 ?>
 
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Manipulation d'image</title>
     <link rel="stylesheet" href="asset/css/style.css">
   </head>
   <body>
     <h1>Manipulation d'image</h1>
     <h4 class="flash <?php echo $flashLevel; ?>"><?php echo $flashText; ?></h4>
     <form enctype="multipart/form-data" method="POST" action="index.php">
       <input type="file" name="imageOrigin" required>
       <label for="minWidth">Largeur :</label>
       <input type="num" name="minWidth" placeholder="valeur en pixel" value="<?php echo $largeurDestination ?>">
       <label for="minHeight">Hauteur :</label>
       <input type="num" name="minHeight" placeholder="valeur en pixel" value="<?php echo $hauteurDestination ?>">
       <input type="submit" value="Modifier">
     </form>
       
     <div class="block">
       <div class="image_block">
         <h6>Image d'origine</h6>
         <p class="image_details"></p>
         <img class="imgOrigin" <?= (isset($imgNom)) ? "src='image-traitee\\$imgNom'" : 'hidden' ?> height="200" alt="Aperçu de l’image d'origine...">
       </div>
       <div class="image_block">       
         <h6>Image modifiée</h6>
         <p class="image_details"></p>
         <img class="imgModified" <?php echo (isset($miniature)) ? "src='$miniature'" : 'hidden' ?> alt="Aperçu de l’image modifiée...">
       </div>
     </div>
     
     
     
     <script type="text/javascript" src="asset/js/manip-img.js"></script>
   </body>
 </html>
