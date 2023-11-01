// Navbar Hambuger Menu
async function toggleMenu() {
    var x = document.getElementById("nav-links");
    var y = document.getElementById("nav-hamburger");
    var z = document.getElementById("nav-filter");
    y.classList.toggle("change");
    if (x.style.display === "flex") {
        x.style.animationName = "slide-out";
        await delay(400);
        x.style.display = "none";
        z.style.filter = "none";
        z.style.backdropFilter = "none";
        z.style.zIndex = "-1";
    } 
    else {
        x.style.animationName = "slide-in";
        x.style.display = "flex";
        z.style.filter = "brightness(0.5)";
        z.style.backdropFilter = "brightness(0.5)";
        z.style.zIndex = "3";
    }
}

function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// Modal
var modal = document.getElementById("modal-form");
var filter = document.getElementById("nav-filter");
var btn = document.getElementsByClassName("boutonMenu")[0];
async function toggleModal() {
    if (modal.style.display !== "flex") {
        modal.style.animationName = "slide-down";
        modal.style.display = "flex";
        filter.style.filter = "brightness(0.5)";
        filter.style.backdropFilter = "brightness(0.5)";
        filter.style.zIndex = "3";
    }
}
// Ferme le modal si on clique en dehors
window.onclick = async function(event) {
    if(modal.style.display === "flex"){
        if (event.target === filter) {
            modal.style.animationName = "slide-up";
            await delay(400);
            modal.style.display = "none";
            filter.style.filter = "none";
            filter.style.backdropFilter = "none";
            filter.style.zIndex = "-1";
        }
    }
}