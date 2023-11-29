
// Vérification de la date de l'audit
let inputDateAudit = document.getElementById("dateAudit"); // prend le input de la date
let erreurDateAudit = document.getElementById("erreurDateAudit"); // prend le p pour marquer les erreurs
inputDateAudit.addEventListener("change", function(){
    // test
    // console.log(inputDateAccident.value);console.log(new Date(inputDateAccident.value));console.log(new Date());
    let dateInput = new Date(inputDateAudit.value);let dateNow = new Date(); // variables
    if(dateInput > dateNow){
        erreurDateAudit.textContent = "Erreur : la date ne peut pas être plus tard que maintenant"; // si la date rentré est plus tard que la date de maintenant retourne une erreur
    }
    else if(dateInput <= dateNow){
        erreurDateAudit.textContent = ""; // ne met rien dans le cas contraire
    }
});


// Vérification du lieu de l'audits
let inputLieu = document.getElementById("lieu"); // prend le input du lieu
let erreurLieu = document.getElementById("erreurLieu"); // prend le p pour marquer les erreurs
inputLieu.addEventListener("keyup", function(){ // regarde a chaque fois qu'une touche ce le lève pour regarder si le contenu est null
    if(inputLieu.value == ""){ // contenu null dit que se n'est pas correcte l'erreur
        erreurLieu.textContent = "Erreur : veuillez rentrer un lieu"
    }
    else{
        erreurLieu.textContent = ""; // ne met rien dans le cas contraire
    }
});