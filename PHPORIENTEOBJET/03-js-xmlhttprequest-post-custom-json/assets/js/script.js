'use strict'

document.addEventListener('DOMContentLoaded', () => {
    prepareGet();
})

let btnRef, dataContainer, apiUrl;

// Initialisation 
function prepareGet() {
    // Récupération du bouton et du conteneur de datas
    btnRef = document.querySelector("#send-new-game");
    dataContainer = document.querySelector("#data-from-get");

    // Affectation de l'écouteur d'évènement submit du formulaire
    btnRef.addEventListener('submit', submitHandler);
};

function submitHandler(e) {
    e.preventDefault();

    // Mise à jour de apiUrl :
    apiUrl = this.getAttribute("action");
    console.log(apiUrl);

    
    // Récupère et encode les valeurs à envoyer
    const game_name = encodeURIComponent(document.querySelector('#game_name').value);
    const game_owner = encodeURIComponent(document.querySelector('#game_owner').value);
    const game_console = encodeURIComponent(document.querySelector('#game_console').value);
    const game_comment = encodeURIComponent(document.querySelector('#game_comment').value);
    
    const gameObject = "game_name="+game_name+"&game_owner="+game_owner+"&game_console="+game_console+"&game_comment="+game_comment;
    
    // Prepare la requête
    const xhr = new XMLHttpRequest();
    xhr.open("POST", apiUrl);
    xhr.setRequestHeader("Accept", "application/json");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    //Envois :
    xhr.send(gameObject);
    
    // Gère la réponse de la requête
    xhr.onload = loadHandler;
    console.log(gameObject);
}

function loadHandler(evt) {
    console.log('IT\'S DONE DUDE !!');
    const response = JSON.parse(this.responseText);
    console.log(response.succes);
    
    // Affichage :
    dataContainer.innerHTML = response.succes;
}