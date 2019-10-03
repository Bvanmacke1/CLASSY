'use strict'

document.addEventListener('DOMContentLoaded', () => {
    init();

})

let refBtn, refInteractivContainer, refContainerColor;

function init() {
    console.log("I'm ready to play !");
    // référence au bouton :
    refBtn = document.querySelector('#btn-click');
    console.log(refBtn);
    // affectation d'un écouteur :
    refBtn.addEventListener('click', clickHandler);
    refInteractivContainer = document.querySelector('#interactiv-container');
}
function clickHandler(evt) {
    console.log('clickHandler');
    evt.preventDefault(); // annule le comportement par defaut de mon element
    // changer le texte quand on click

     const myHref = this.getAttribute("href");

     // requete
     const xhr = new XMLHttpRequest();
     xhr.open("GET", myHref);
     xhr.setRequestHeader("Accept", "text/plain");
     xhr.send(null);
     xhr.onload = loadHandler;
}
     // refInteractivContainer.innerHTML =  myHref;

     function loadHandler(evt){
         console.log(this);
         console.log(this.responseText);

         const maReponseTexte = this.responseText;

         refInteractivContainer.innerHTML = maReponseTexte;
     }


