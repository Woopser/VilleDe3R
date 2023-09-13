// Navbar Hambuger Menu
async function toggleMenu() {
    var x = document.getElementById("nav-links");
    var y = document.getElementById("nav-hamburger");
    y.classList.toggle("change");
    if (x.style.display === "flex") {
        x.style.animationName = "slide-out";
        await delay(500);
        x.style.display = "none";
    } 
    else {
        x.style.animationName = "slide-in";
        x.style.display = "flex";
    }
}

function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}