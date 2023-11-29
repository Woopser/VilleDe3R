// Vérification du lieu de la fonction
let inputFonct = document.getElementById("fonct"); // prend le input du lieu
let erreurFonct = document.getElementById("erreurFonction"); // prend le p pour marquer les erreurs
inputFonct.addEventListener("keyup", function(){ // regarde a chaque fois qu'une touche ce le lève pour regarder si le contenu est null
    if(inputFonct.value == ""){ // contenu null dit que se n'est pas correcte l'erreur
        erreurFonct.textContent = "Erreur : veuillez rentrer une fonction"
    }
    else{
        erreurFonct.textContent = ""; // ne met rien dans le cas contraire
    }
});


// Vérification du lieu de la fonction
let inputSect = document.getElementById("secteur"); // prend le input du lieu
let erreurSecte = document.getElementById("erreurSecte"); // prend le p pour marquer les erreurs
inputSect.addEventListener("keyup", function(){ // regarde a chaque fois qu'une touche ce le lève pour regarder si le contenu est null
    if(inputSect.value == ""){ // contenu null dit que se n'est pas correcte l'erreur
        erreurSecte.textContent = "Erreur : veuillez rentrer un secteur d'activité"
    }
    else{
        erreurSecte.textContent = ""; // ne met rien dans le cas contraire
    }
});

// Vérification de la date de la situation
let inputDateSit = document.getElementById("dateSit"); // prend le input de la date
let erreurDateSit = document.getElementById("erreurDateSit"); // prend le p pour marquer les erreurs
inputDateSit.addEventListener("change", function(){
    // test
    // console.log(inputDateAccident.value);console.log(new Date(inputDateAccident.value));console.log(new Date());
    let dateInput = new Date(inputDateSit.value);let dateNow = new Date(); // variables
    if(dateInput > dateNow){
        erreurDateSit.textContent = "Erreur : la date ne peut pas être plus tard que maintenant"; // si la date rentré est plus tard que la date de maintenant retourne une erreur
    }
    else if(dateInput <= dateNow){
        erreurDateSit.textContent = ""; // ne met rien dans le cas contraire
    }
});

// Vérification du lieu de la situation
let inputLieu = document.getElementById("Lieu"); // prend le input du lieu
let erreurLieu = document.getElementById("erreurLieu"); // prend le p pour marquer les erreurs
inputLieu.addEventListener("keyup", function(){ // regarde a chaque fois qu'une touche ce le lève pour regarder si le contenu est null
    if(inputLieu.value == ""){ // contenu null dit que se n'est pas correcte l'erreur
        erreurLieu.textContent = "Erreur : veuillez rentrer un lieu"
    }
    else{
        erreurLieu.textContent = ""; // ne met rien dans le cas contraire
    }
});


// Vérification du lieu de la fonction
let inputDesc = document.getElementById("description"); // prend le input du lieu
let erreurDesc = document.getElementById("erreurDesc"); // prend le p pour marquer les erreurs
inputDesc.addEventListener("keyup", function(){ // regarde a chaque fois qu'une touche ce le lève pour regarder si le contenu est null
    if(inputDesc.value == ""){ // contenu null dit que se n'est pas correcte l'erreur
        erreurDesc.textContent = "Erreur : veuillez rentrer une description"
    }
    else{
        erreurDesc.textContent = ""; // ne met rien dans le cas contraire
    }
});

// Vérification du lieu de la fonction
let inputCorr = document.getElementById("correction"); // prend le input du lieu
let erreurCorr = document.getElementById("erreurCorr"); // prend le p pour marquer les erreurs
inputCorr.addEventListener("keyup", function(){ // regarde a chaque fois qu'une touche ce le lève pour regarder si le contenu est null
    if(inputCorr.value == ""){ // contenu null dit que se n'est pas correcte l'erreur
        erreurCorr.textContent = "Erreur : veuillez rentrer une correction"
    }
    else{
        erreurCorr.textContent = ""; // ne met rien dans le cas contraire
    }
});