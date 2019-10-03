document.addEventListener('load', manipImg());

function manipImg(){
  var images = document.querySelectorAll('.image_block img');
  var inputFile = document.querySelector('input[type=file]');
  inputFile.addEventListener("change",previewFile);
  
  // A chaque changement d'image, affichage des détails de celle-ci
  for(var i=0, imagesNb = images.length; i < imagesNb; i++){
    images[i].addEventListener('load', function(){
      if(this.currentSrc != ''){  
        affichageImgDetails(this);
      }
    })
  }

  // Affichage d'un aperçu de l'image chargée
  function previewFile() {
    var preview = document.querySelector('.imgOrigin');
    var imgModified = preview.parentNode.parentNode.querySelector('.imgModified');
    var file    = inputFile.files[0];
    var reader  = new FileReader();
    
    // Cache l'image madifiée et supprime la source
    imgModified.setAttribute('hidden', '');
    imgModified.src = '';
    // Supprime les détails de l'image "modifiée"
    imgModified.parentNode.querySelector('.image_details').innerHTML = '';
    
    // A la sélection d'une image (input), Définition et affichage de celle-ci
    reader.addEventListener("load", function () {
      // Défini la source de l'image
      preview.src = this.result;
      // Affiche l'image
      preview.removeAttribute('hidden');
    }, false);

    if (file) {
      reader.readAsDataURL(file);
    }
  }

  // Affichage des détails de l'image
  function affichageImgDetails(img){
    // Crée une image temp pour récupérer les détails de la source
    var image = new Image();
    image.src =  img.src;
    // Quand image temp chargée, affichage des détails
    image.onload = function(){
      AffDetails(img, getImgDetails(image));
    }
  }

  // Affichage html des détails de l'image
  function AffDetails(img, imageProp){
    var imageDetails = img.parentNode.querySelector('.image_details');
    imageDetails.innerHTML = "largeur = "+imageProp.width+"px , hauteur = "+imageProp.height+"px";
  }
  
  // Récupère les détails de l'image
  function getImgDetails(img){
    return {width: img.width, height: img.height};
  }

}
