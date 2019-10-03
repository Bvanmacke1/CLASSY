'use strict'

document.addEventListener('DOMContentLoaded',() => {
    init();

})

let refBtn, refInteractivContainer;

function init(){
    console.log ("I'm ready to play !");
    // référence au bouton :
    refBtn = document.querySelector('#btn-click');
    console.log(refBtn);
    // affectation d'un écouteur :
    refBtn.addEventListener('click', clickHandler);
    refInteractivContainer=document.querySelector('#interactiv-container');
}
function clickHandler(evt){
    console.log('clickHandler');
    evt.preventDefault(); // annule le comportement par defaut de mon element
    // changer le texte quand on click
    refInteractivContainer.innerHTML = "Did you ever find Bugs Bunny attractive ?";

    /*
    // vérif si j'ai la class "clicked" :
    // console log pour etre sur que la cible est moi-meme
    console.log(this.classList);
    console.log(this.classList.contains("btn"));

    if(this.classList.contains("clicked")){
        console.log('Il a déja été cliqué ! > donc je la retire');
        this.classList.remove("clicked");
    }else{
        console.log ('ne contient pas la class clicked > donc je l\'ajoute');
        this.classList.add("clicked"); 

        
    } */
    this.classList.toggle("clicked");

    


}

