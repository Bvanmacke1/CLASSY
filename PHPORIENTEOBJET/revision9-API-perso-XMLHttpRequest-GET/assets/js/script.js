
'use strict'



document.addEventListener('DOMContentLoaded', () => {

    init();

})



let refBtn, refInteractivContainer;



function init() {

    console.log("I'm ready to play !");



    // Référence au bouton :

    refBtn = document.querySelector('#btn-click');

    console.log(refBtn);



    // Référence au container interactif :

    refInteractivContainer = document.querySelector('#interactiv-container');



    // Affectation d'un écouteur :

    refBtn.addEventListener('click', clickHandler);

}



function clickHandler(evt) {

    console.log('clickHandler');



    evt.preventDefault(); // Annule le comportement par default de mon element



    const myHref = this.getAttribute("href");



    // Requète :

    const xhr = new XMLHttpRequest();

    xhr.open("GET", myHref + '?consoleList=true');

    xhr.setRequestHeader("Accept", "application/json");



    //Envois :

    xhr.send(null);

    xhr.onload = loadHandler;

}



function loadHandler(evt) {



    //    console.log('IT\'S DONE DUDE !!');

    const consoleListe = JSON.parse(this.responseText);

//    console.log(consoleListe);

    let newHtml = '<ul>';

    consoleListe.forEach(element => {

//        console.log(element.console);

        newHtml += '<li>'+element.console+'</li>';

    });

    newHtml += '</ul>';

    // Affichage :

    refInteractivContainer.innerHTML = newHtml;



}