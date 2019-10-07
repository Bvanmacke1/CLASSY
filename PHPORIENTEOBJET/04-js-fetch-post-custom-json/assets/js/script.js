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
    /*
    const game_name = encodeURIComponent(document.querySelector('#game_name').value);
    const game_owner = encodeURIComponent(document.querySelector('#game_owner').value);
    const game_console = encodeURIComponent(document.querySelector('#game_console').value);
    const game_comment = encodeURIComponent(document.querySelector('#game_comment').value);
    */
   const game_name = document.querySelector('#game_name').value;
   const game_owner = document.querySelector('#game_owner').value;
   const game_console = document.querySelector('#game_console').value;
   const game_comment = document.querySelector('#game_comment').value;

    const gameObject = {   
            game_name:game_name,
            game_owner:game_owner,
            game_console:game_console,
            game_comment:game_comment
        }
    
    inserInDataBase(apiUrl, gameObject);
}
            const inserInDataBase = async function(apiUrl, data){
                let response = await fetch(apiUrl, {
                    method : 'POST',
                    headers : { 
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body : JSON.stringify(data)
                }) ;
                
                let responseData = await response.json();
                if(response.ok){
                    console.log(responseData);
                    // Affichage :
                    dataContainer.innerHTML = responseData.succes;
                }else{
                    // gestion des Erreurs
                    console.error(response.status);
                    dataContainer.innerHTML = 'nous avons un problème...';
                }
                
            }