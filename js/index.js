const menu = document.getElementById("floating-menu")
const projectDescription = document.getElementsByClassName("project-desc");
const skillDescription = document.getElementsByClassName("skill-desc");

menu.style.display = 'none';

for (let i = 0; i < projectDescription.length; i = i + 1 ) {
    projectDescription[i].style.display = 'none';
}

for (let i = 0; i < skillDescription.length; i = i + 1 ) {
    arrayChildrenDesc = skillDescription[i].children;
    for (let i = 0; i < arrayChildrenDesc.length; i = i + 1) {
        arrayChildrenDesc[i].style.display = 'none';
    }
}

window.addEventListener("resize", () => {
    if (menu.style.display != 'none') {
        menu.style.display = 'none'
    }

    for (let i = 0; i < projectDescription.length; i = i + 1 ) {
        projectDescription[i].style.display = 'none';
    }

    for (let i = 0; i < skillDescription.length; i = i + 1 ) {
        arrayChildrenDesc = skillDescription[i].children;
        for (let i = 0; i < arrayChildrenDesc.length; i = i + 1) {
            arrayChildrenDesc[i].style.display = 'none';
        }
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

function showSkillDesc (number) {
    for (let i = 0; i < skillDescription.length; i = i + 1 ) {
        if (i == number) {
            arrayChildrenDesc = skillDescription[i].children;
            for (let i = 0; i < arrayChildrenDesc.length; i = i + 1) {
                arrayChildrenDesc[i].style.display = 'block';
            }
        } else {
            arrayChildrenDesc = skillDescription[i].children;
            for (let i = 0; i < arrayChildrenDesc.length; i = i + 1) {
                arrayChildrenDesc[i].style.display = 'none';
            }
        }
    }
}

function hideSkillDesc () {
    for (let i = 0; i < skillDescription.length; i = i + 1 ) {
        arrayChildrenDesc = skillDescription[i].children;
        for (let i = 0; i < arrayChildrenDesc.length; i = i + 1) {
            arrayChildrenDesc[i].style.display = 'none';
        }
    }   
}