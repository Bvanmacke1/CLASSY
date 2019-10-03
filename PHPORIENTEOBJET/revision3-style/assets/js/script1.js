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
    console.log('changeStyle');
    const refColor = refInteractivContainer.style.color;
    console.log('refColor');


    switch (refColor) {
        case "red":
            console.log("couleur est définie à rouge");
            refInteractivContainer.style.color = "green";
            break;

        case "green":
            refInteractivContainer.style.color = "purple";
            break;

        case "purple":
            refInteractivContainer.style.color = "yellow";
            break;

        case "yellow":
            refInteractivContainer.style.color = "pink";
            break;

        case "pink":
            refInteractivContainer.style.color = "red";
            break;

        case "":
        default:
            console.log('Color non définie');
            refInteractivContainer.style.color = "red";
            break;

    }
}

