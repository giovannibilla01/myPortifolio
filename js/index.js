const menu = document.getElementById("floating-menu")
const projectDescription = document.getElementsByClassName("project-desc");

menu.style.display = 'none';

for (let i = 0; i < projectDescription.length; i = i + 1 ) {
    projectDescription[i].style.display = 'none';
}

window.addEventListener("resize", () => {
    if (menu.style.display != 'none') {
        menu.style.display = 'none'
    }

    for (let i = 0; i < projectDescription.length; i = i + 1 ) {
        projectDescription[i].style.display = 'none';
    }
});

function showMenu () {
    if (menu.style.display == 'none') {
        menu.style.display = 'block'
    } else {
        menu.style.display = 'none'
    }
}

function showProjectDesc (number) {
    for (let i = 0; i < projectDescription.length; i = i + 1 ) {
        if (i == number) {
            projectDescription[i].style.display = 'block';
        } else {
            projectDescription[i].style.display = 'none';
        }
    }
}

function hideProjectDesc () {
    for (let i = 0; i < projectDescription.length; i = i + 1 ) {
        projectDescription[i].style.display = 'none';
    }   
}