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

    console.log(this.getAttribute("href"));

    const myHref = this.getAttribute("href");
    const myArrayFromHref = myHref.split('/');
    console.log(myArrayFromHref[(myArrayFromHref.length - 1)]);
    refInteractivContainer.innerHTML =myArrayFromHref[(myArrayFromHref.length - 1)]
    
}

