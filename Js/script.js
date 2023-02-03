/*Vertical Navbar Function*/

const hamburgerMenu = document.getElementById("hamburger-menu");
const vNavbar = document.getElementById("vertical-navbar");

document.onclick = function(e) {
    if(e.target.id !== 'vertical-navbar' && e.target.id !== 'hamburger-menu') {
        hamburgerMenu.classList.remove("active");
        vNavbar.classList.remove("active");
    }
}

hamburgerMenu.onclick = function() {
    hamburgerMenu.classList.toggle("active");
    vNavbar.classList.toggle("active");
}

/*End Vertical Navbar*/

