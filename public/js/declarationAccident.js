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
    if(inputLieu.value == ""){ // contenu null dit que se n,est pas correcte l'erreur
        erreurLieu.textContent = "Erreur : veuillez rentrer un lieu"
    }
    else{
        erreurLieu.textContent = ""; // ne met rie dans le cas contraire
    }
})
// Vérification de la date de l'accident
let inputDateAccident = document.getElementById("dateAccident"); // prend le input de la date
let erreurDateAccident = document.getElementById("erreurDateAccident"); // prend le p pour marquer les erreurs
inputDateAccident.addEventListener("change", function(){
    console.log(inputDateAccident.value);
    console.log(Date.now());
});