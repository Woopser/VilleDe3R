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
    } 
    else {
        x.style.animationName = "slide-in";
        x.style.display = "flex";
        z.style.filter = "brightness(0.5)";
        z.style.backdropFilter = "brightness(0.5)";
    }
}

function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}