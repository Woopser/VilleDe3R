/*let radioOui = document.getElementById('radioOui');
let radioNon = document.getElementById('radioNon');

radioOui.addEventListener('change', function(){
    if(this.checked){
        console.log("Checkbox is checked..")
    }
});
*/
console.log("yes no toaster");
let modal = document.getElementById("yesNoModal");
modal.style.display = "block";

let yes = document.getElementById("yesButton");
let non = document.getElementById("nonButton");

yes.addEventListener('click', function(){
    modal.style.display = "none";
    let matricule = document.getElementById("inputMatricule");
    matricule.value = 1234;
});

non.addEventListener('click', function(){
    modal.style.display = "none";
});