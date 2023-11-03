/*let radioOui = document.getElementById('radioOui');
let radioNon = document.getElementById('radioNon');

radioOui.addEventListener('change', function(){
    if(this.checked){
        console.log("Checkbox is checked..")
    }
});
// Cherche les elements utiliser dedans le html
let modal = document.getElementById("yesNoModal");
modal.style.display = "block"; //fait apparaitre le l'option oui ou non
let yes = document.getElementById("yesButton");
let non = document.getElementById("nonButton");
//lorsque la personne click oui il fait remplir le matricule automatiquement
yes.addEventListener('click', function(){
    modal.style.display = "none";
    let matricule = document.getElementById("matriculeP");
    let matriculeInput = document.getElementById("inputMatricule");
    matriculeInput.value = matricule.textContent;
});
//Dans le cas de non cela de ne fait rien
non.addEventListener('click', function(){
    modal.style.display = "none";
});*/
// code pour les radios buttons de temoins ====================================================================
// chercher les element utiliser dedans le html
let temoin = document.getElementById("Temoin");
let radioOui = document.getElementById("Oui");
let radioNon = document.getElementById("Non");
let inputTemoin = document.getElementById("inputTemoin");
//rajoute un evenement au radio button de oui pour que quand on le check sa fait apparaitre l'input
radioOui.addEventListener('change', function(){
    if(this.checked){
        temoin.style.display = "contents";
    }
});
//rajoute un evenement au radio button de non pour que quand on le check sa fait dispparaitre l'input
radioNon.addEventListener('change',function(){
    if(this.checked){
        temoin.style.display = "none";
        inputTemoin.value = "";
    }
});
// Vérifiaction JAVASCRIPT ===================================================================================================================================================
// Vérification du lieu de l'accident
let inputLieu = document.getElementById("lieu"); // prend le input du lieu
let erreurLieu = document.getElementById("erreurLieu"); // prend le p pour marquer les erreurs
inputLieu.addEventListener("keyup", function(){ // regarde a chaque fois qu'une touche ce le lève pour regarder si le contenu est null
    if(inputLieu.value == ""){ // contenu null dit que se n'est pas correcte l'erreur
        erreurLieu.textContent = "Erreur : veuillez rentrer un lieu"
    }
    else{
        erreurLieu.textContent = ""; // ne met rien dans le cas contraire
    }
})
// Vérification de la date de l'accident
let inputDateAccident = document.getElementById("dateAccident"); // prend le input de la date
let erreurDateAccident = document.getElementById("erreurDateAccident"); // prend le p pour marquer les erreurs
inputDateAccident.addEventListener("change", function(){
    // test
    // console.log(inputDateAccident.value);console.log(new Date(inputDateAccident.value));console.log(new Date());
    let dateInput = new Date(inputDateAccident.value);let dateNow = new Date(); // variables
    if(dateInput > dateNow){
        erreurDateAccident.textContent = "Erreur : la date ne peut pas être plus tard que maintenant"; // si la date rentré est plus tard que la date de maintenant retourne une erreur
    }
    else if(dateInput <= dateNow){
        erreurDateAccident.textContent = ""; // ne met rien dans le cas contraire
    }
});
// Vérifiaction  de la description de l'accident
let inputDescription = document.getElementById("description"); // prend le input de la description
let erreurDescription = document.getElementById("erreurDescription"); // prend le p pour marquer les erreurs
inputDescription.addEventListener("keyup", function(){
    if(inputDescription.value == ""){ // contenu null dit que se n'est pas correcte l'erreur
        erreurDescription.textContent = "Erreur : veuillez rentrer un description";
    }
    else{
        erreurLieu.textContent = ""; // ne met rien dans le cas contraire
    }
});
// Vérification de la nature
let inputNature = document.getElementById("nature"); // Prend le input de nature
let erreurNature = document.getElementById("erreurNature"); // Prend le p de nature pour marquer l'erreur
inputNature.addEventListener("keyup", function(){
    if(inputNature.value == ""){ // Lorsqu'il y a rien de marquer dedans le input marque une erreur
        erreurNature.textContent = " Erreur : veillez rentrer la nature";
    }
    else{ // Dans le cas contraire met rien
        erreurNature.textContent = "";
    }
});
// Vérification description blessure
let inputBlessure = document.getElementById("descriptionBlessure"); // Prend le input de description blessure
let erreurBlessure = document.getElementById("erreurBlessure"); // Prend le p de description blessure pour marquer les erreurs
inputBlessure.addEventListener("keyup", function(){
    if(inputBlessure.value == ""){ // Lorsqu'il y a rien de marquer dedans le input marque une erreur
        erreurBlessure.textContent = "Erreur : Veillez rentrer une description de la blessure"
    }
    else{ // Dans le cas contraire met rien
        erreurBlessure.textContent = "";
    }
});
// Vérification comment
let inputComment = document.getElementById("comment"); // Prend le input de comment s'est produit l'accident
let erreurComment = document.getElementById("comment"); // Prend le p de comment s'est produit l'accident pour marquer les erreurs
inputComment.addEventListener("keyup", function(){
    if(inputComment.value == ""){ // Lorsqu'il y a rien de marquer dedans le input marque une erreur
        erreurComment.textContent = "Erreur : Veillez rentrer comment l'accident s'est produit";
    }
    else{ // Dans le cas contraire met rien
        erreurComment.textContent = "";
    }
});
// Vérification premier soin
let inputPremierSoin = document.getElementById("premierSoin"); // Prend le input de premier soin
let erreurPremierSoin = document.getElementById("erreurPremier"); // Prend le p de premier pour marquer les erreurs
inputPremierSoin.addEventListener("keyup", function(){
    if(inputPremierSoin.value == ""){
        erreurPremierSoin.textContent = "Erreur : Veillez rentrer les premiers soins effectués";
    }
    else{
        erreurPremierSoin.textContent = "";
    }
});
// Vérification secouriste
let inputSecouriste = document.getElementById("secouriste"); // Prend le input de secouriste
let erreurSecouriste = document.getElementById("erreurSecouriste"); // Prend le p de secouriste pour marquer les erreurs
inputSecouriste.addEventListener("keyup", function(){
    if(inputSecouriste.value == ""){ // Lorsqu'il y rien marquer dedans le input marque une erreur
        erreurSecouriste.textContent = "Erreur : Veillez rentrer le secouriste";
    }
    else{ // Dans le cas conrtaire
        erreurSecouriste.textContent = ""
    }
});