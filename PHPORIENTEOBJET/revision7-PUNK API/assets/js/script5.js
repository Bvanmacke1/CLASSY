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
    const myNewHref = myHref + '/'+Math.floor(getRandomAbitrary(1,50));
    refInteractivContainer.innerHTML = myHref;
    // requete
    const xhr = new XMLHttpRequest();
    xhr.open("GET", myNewHref);
    xhr.setRequestHeader("Accept", "application/jsdata");
    xhr.send(null);
    xhr.onload = loadHandler;
}
// refInteractivContainer.innerHTML =  myHref;

function loadHandler(evt) {

    const data = JSON.parse(this.responseText);
    console.log(data);
    
    console.log(data[0].name);
    console.log(data[0].description);
    console.log(data[0].image_url);

    const monNom = data[0].name;
    const maDescription = data[0].description;
    const monImage = data[0].image_url;

     // preparation du HTML à inserer
    let newHtml = "";
    newHtml += '<h2>' + monNom + '<h2>';
    newHtml += '<p>' + maDescription + '<p>';
    newHtml += '<img src="' + monImage + '" alt="' + name + '">';

    // Insertion

    refInteractivContainer.innerHTML = newHtml;
    
}

function getRandomAbitrary(min, max) {
    return Math.random() * (max - min) + min;
}



