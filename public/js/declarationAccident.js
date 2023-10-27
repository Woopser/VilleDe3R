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
let inputLieu = document.getElementById("lieu");
let erreurLieu = document.getElementById("erreurLieu");

inputLieu.addEventListener("keyup", function(){
    
    
    if(inputLieu.value == ""){
        erreurLieu.textContent = "Erreur : veuillez rentrer un lieu"
    }
    else{
        erreurLieu.textContent = "";
    }
})