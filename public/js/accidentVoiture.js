// Vérification de l'unite impliquer
let inputUnit = document.getElementById("numUnit"); // prend le input du lieu
let erreurUnit = document.getElementById("erreurUnit"); // prend le p pour marquer les erreurs
inputUnit.addEventListener("keyup", function(){ // regarde a chaque fois qu'une touche ce le lève pour regarder si le contenu est null
    if(inputUnit.value == ""){ // contenu null dit que se n'est pas correcte l'erreur
        erreurUnit.textContent = "Erreur : veuillez rentrer un numéro d'unité"
    }
    else{
        erreurUnit.textContent = ""; // ne met rien dans le cas contraire
    }
});


// Vérification de l'unite impliquer
inputUnit.addEventListener("keyup", function(){ // regarde a chaque fois qu'une touche ce le lève pour regarder si le contenu est null
    if(inputUnit.value.length != 7){ // contenu null dit que se n'est pas correcte l'erreur
        erreurUnit.textContent = "Erreur : le numéro d'unité doit avoir 7 caractères"
    }
    else{
        erreurUnit.textContent = ""; // ne met rien dans le cas contraire
    }
});

// Vérification de l'unite impliquer
let inputMatri = document.getElementById("Matri"); // prend le input du lieu
let erreurMatri = document.getElementById("erreurMatri"); // prend le p pour marquer les erreurs
inputMatri.addEventListener("keyup", function(){ // regarde a chaque fois qu'une touche ce le lève pour regarder si le contenu est null
    if(inputMatri.value == ""){ // contenu null dit que se n'est pas correcte l'erreur
        erreurMatri.textContent = "Erreur : veuillez entrer la matricule de l'employé"
    }
    else{
        erreurMatri.textContent = ""; // ne met rien dans le cas contraire
    }
});


// Vérification de l'unite impliquer
inputMatri.addEventListener("keyup", function(){ // regarde a chaque fois qu'une touche ce le lève pour regarder si le contenu est null
    if(inputMatri.value.length != 7){ // contenu null dit que se n'est pas correcte l'erreur
        erreurMatri.textContent = "Erreur : le numéro d'unité doit avoir 7 caractères"
    }
    else{
        erreurMatri.textContent = ""; // ne met rien dans le cas contraire
    }
});

// Vérification de l'unite impliquer
let inputPerm = document.getElementById("numPerm"); // prend le input du lieu
let erreurPerm = document.getElementById("erreurPerm"); // prend le p pour marquer les erreurs
inputPerm.addEventListener("keyup", function(){ // regarde a chaque fois qu'une touche ce le lève pour regarder si le contenu est null
    if(inputPerm.value == ""){ // contenu null dit que se n'est pas correcte l'erreur
        erreurPerm.textContent = "Erreur : veuillez entrer le numéro de permis de conduire"
    }
    else{
        erreurPerm.textContent = ""; // ne met rien dans le cas contraire
    }
});