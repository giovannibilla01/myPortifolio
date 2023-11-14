const menu = document.getElementById("floating-menu")
menu.style.display = 'none';

window.addEventListener("resize", () => {
    if (menu.style.display != 'none') {
        menu.style.display = 'none'
    }
});

function showMenu () {
    if (menu.style.display == 'none') {
        menu.style.display = 'block'
    } else {
        menu.style.display = 'none'
    }
}