<?php
$contact = json_decode(file_get_contents('json/contact.json'), true);
$projects = json_decode(file_get_contents('json/projects.json'), true);
$technologies = json_decode(file_get_contents('json/technologies.json'), true);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- DevIcons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,300,0,-25" />

    <title>Giovanni Billa - Portifolio</title>
</head>
<body>
    <header>
        <nav>
            <p>
                Giovanni Billa
            </p>
            <span id="burger-menu" class="material-symbols-rounded" onclick="showMenu()">
                menu
            </span>
            <ul>
                <a href="<?= $contact['github'] ?>" target="_blank" rel="external" alt="Github Link">
                    <li>
                        <ion-icon name="logo-github"></ion-icon>
                    </li>
                </a>
                <a href="<?= $contact['linkedin'] ?>" target="_blank" rel="external" alt="Linkedin Link">
                    <li>
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </li>
                </a>
                <a href="<?= $contact['wpp'] ?>" target="_blank" rel="external" alt="Whatsapp Link">
                    <li>
                        <ion-icon name="logo-whatsapp"></ion-icon>
                    </li>
                </a>
            </ul>
        </nav>
        <menu id="floating-menu">
            <ul>
                <a onclick="showMenu()" href="#initial">
                    <li>
                        Início
                    </li>
                </a>
                <a onclick="showMenu()" href="#about">
                    <li>
                        Sobre
                    </li>
                </a>
                <a onclick="showMenu()" href="#projects">
                    <li>
                        Projetos
                    </li>
                </a>
                <a onclick="showMenu()" href="#skills">
                    <li>
                        Habilidades
                    </li>
                </a>
            </ul>
        </menu>
    </header>
    <main>
        <section id="initial">
            <div>
                <picture>
                    <source media="(max-width: 750px)" srcset="images/photo-p.png" type="image/png">
                    <source media="(max-width: 1050px)" srcset="images/photo-m.png" type="image/png">
                    <img src="images/photo-g.png" alt="Foto Autor">
                </picture>
                <h1>Giovanni Billa</h1>
                <h2>Desenvolvedor de Software | Analista de Sistemas TI</h2>
            </div>
            <div>
                <a href="documents/GIOVANNI_BILLA_CV.pdf" target="_blank" class="button" id="download-cv">Download CV</a>
                <a href="<?= $contact['wpp'] ?>" target="_blank" rel="external" class="button" id="contact">Contato</a>
                <a href="<?= $contact['linkedin'] ?>" target="_blank" rel="external" class="button" id="linkedin">LinkedIn</a>
                <a href="<?= $contact['github'] ?>" target="_blank" rel="external" class="button" id="github">GitHub</a>
                <a href="mailto:<?= $contact['email'] ?>" class="button" id="email">Email</a>
            </div>
        </section>
        <section id="about">
            <div id="background-track">
                &nbsp;
            </div>
            <h1>Sobre</h1>
            <article>
                <h2>Artigo</h2>
                <p>
                    Apaixonado por lógica e <strong>desenvolvimento de sistemas</strong>, envolvido com tecnologia no geral dede 2013. Com experiencia em diversos tipos de atuações, focado em trabalho de equipe e colaboração sempre!
                </p>
                <p> 
                    Desejo contribuir com projetos <strong>back-end</strong> me tornando relevante, me envolvo facilmente em projetos, sempre comprometido e altamente adaptável.
                </p>
            </article>
        </section>
        <section id="projects">
            <h1>Projetos</h1>
            <div id="project-container">
                <?php foreach ($projects as $key => $value) : ?>
                <div class="project-box">
                    <div class="projects" style="background-image: url(<?= $value['thumbnail'] ?>);" onmouseover="showProjectDesc(<?= $key ?>)" onmouseleave="hideProjectDesc()">
                        <div class="project-desc"><?= $value['description'] ?></div>
                    </div>
                    <div class="projects-link">
                        <h3><?= $value['name'] ?></h3>
                        <a href="<?= $value['codeLink'] ?>" target="_blank" rel="external">&lt;/Codigo&gt;</ion-icon></a>
                        <a href="<?= $value['projectLink'] ?>" target="_blank" rel="external">&lt;/Projeto&gt;</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section id="skills">
            <h1>Habilidades</h1>
            <h2>Hard Skills</h2>
            <div id="hard-skills">
                <ul id="technologies">
                    <?php foreach ($technologies as $key => $value) : ?>
                    <li onmouseover="showSkillDesc(<?= $key ?>)" onmouseleave="hideSkillDesc()"><i class="<?= $value['icon']?>"></i></li>
                    <?php endforeach; ?>
                </ul>
                <?php foreach ($technologies as $key => $value) : ?>
                <div class="skill-desc">
                    <h2><?= $value['name']?></h2>
                    <p><?= $value['description']?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <h2>Soft Skills</h2>
            <div>
                <p>
                    Boa <strong>Comunicação</strong> e sou capaz de <strong>Trabalhar em equipe</strong>.
                </p>
                <p>
                    Sou <strong>Resiliente</strong> e altamente <strong>Adaptavel</strong>.
                </p>
            </div>
        </section>
    </main>
    <footer>
        <p>
            <strong>Giovanni Billa</strong>
        </p>
        <ul>
            <a href="<?= $contact['github'] ?>" target="_blank" rel="external" alt="Github Link">
                <li>
                    <ion-icon name="logo-github"></ion-icon>
                </li>
            </a>
            <a href="<?= $contact['linkedin'] ?>" target="_blank" rel="external" alt="Linkedin Link">
                <li>
                    <ion-icon name="logo-linkedin"></ion-icon>
                </li>
            </a>
            <a href="<?= $contact['wpp'] ?>" target="_blank" rel="external" alt="Whatsapp Link">
                <li>
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </li>
            </a>
        </ul>
    </footer>
    <script src="js/index.js"></script>
    <!-- Ionicons -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>