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
    refInteractivContainer.innerHTML = "Did you ever find Bugs Bunny attractive ?";

    changeStyle();

}

function changeStyle() {
    // change le style css
    const refColor = refInteractivContainer.style.color;

    switch (refColor) {
        case "red":
            greenStyle();
            break;
        case "green":
            purpleStyle();
            break;
        case "purple":
            yellowStyle();
            break;
        case "yellow":
            pinkStyle();
            break;
        case "pink":
            redStyle();
            break;
        case "":
        default:
            console.log('Color non définie');
            refInteractivContainer.style.color = "red";
            break;

    }
}

function greenStyle() {
    refInteractivContainer.style.color = "green";
    refInteractivContainer.style.backgroundColor = "darkgreen";
}
function purpleStyle() {
    refInteractivContainer.style.color = "purple";
    refInteractivContainer.style.lineHeight= "2em";
}
function yellowStyle() {
    refInteractivContainer.style.color = "yellow";
    refInteractivContainer.style.padding = "1em";
}
function pinkStyle() {
    refInteractivContainer.style.color = "pink";
    refInteractivContainer.style.display ="inline";
}
function redStyle() {
    //refInteractivContainer.style.color = "red";
    refInteractivContainer.style.css = {
     'color' : 'yelow'
    };
}