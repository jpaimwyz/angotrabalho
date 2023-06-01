<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AngoTrabalho | Seu portal de recrutamento e seleção</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login-register-manage.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <!-- ---------------CABEÇALHO------------------------- -->
    <header>
        <a href="index-candidatos.php" class="logo">
            <img src="img/AngoTrabalho.png" alt="logo">
        </a>
        <!-- -----------PERFIL---------------------------- -->
        <nav class="profile">
            <img src="img/user.png" alt="user-pic" class="user-pic" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="img/user.png">
                        <h4>Nome do Usuário</h2>
                       <!--  <a href="#">Veja seu perfil</a> -->
                    </div>
                    <hr>
                    <a href="config-CA.php" class="sub-menu-link">
                        <i class="fa-solid fa-user icon"></i>
                        <p> Editar Perfil</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="404.php" class="sub-menu-link">
                        <i class="fa-solid fa-gear icon"></i>
                        <p>Configurações e Privacidade</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="404.php" class="sub-menu-link">
                        <i class="fa-solid fa-circle-info icon"></i>
                        <p>Ajuda e Suporte</p>
                        <i class="fa-solid fa-arrow-right icon"></i>
                    </a>
                    <a href="php/logout" class="sub-menu-link">
                        <i class="fa-solid fa-arrow-right-from-bracket icon"></i>
                        <p>Terminar Sessão</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- ----------CONTÉUDO PRINCIPAL------------------------ -->
    
    <main>
        <div class="container">
            <div class="profile-main">
                <div class="profile-container2">
                    <div class="profile-container-inner">
                        <img src="img/user.png" class="profile-pic">
                        <h1>Nome do Usuário</h1>
                        <strong>Uma pequena frase sobre ele</strong>
                        <p>Localização, se definido. </p>
                    </div>
                </div>
                <div class="profile-description">
                    <h2>Sobre</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates voluptatem harum hic assumenda autem deleniti commodi optio molestias vitae similique nobis error distinctio, dicta aliquam. Excepturi autem accusamus reiciendis velit.</p>
                    <a href="#" class="see-more-link">Ver mais...</a>
                </div>
                <div class="profile-description">
                    <h2>Experiência</h2>
                    <div class="profile-desc-row">
                        <img src="img/user.png" alt="" width="40" height="40">
                        <div>
                            <h3>Job Role</h3>
                            <strong>Info about the companny</strong>
                            <strong>2012 - Present &middot; 1.4 years</strong>
                            <p>Desc Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, a sed id, deserunt aspernatur quisquam aliquam perspiciatis corporis ab velit quod unde soluta in molestias eligendi accusamus vero reiciendis libero.</p>
                            <hr>
                        </div>
                    </div>
                    <div class="profile-desc-row">
                        <img src="img/user.png" alt="" width="40" height="40">
                        <div>
                            <h3>Job Role</h3>
                            <strong>Info about the companny</strong>
                            <strong>2012 - Present &middot; 1.4 years</strong>
                            <p>Desc Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, a sed id, deserunt aspernatur quisquam aliquam perspiciatis corporis ab velit quod unde soluta in molestias eligendi accusamus vero reiciendis libero.</p>
                        </div>
                    </div>
                    <hr>
                    <a href="" class="experience-link">Ver todos <i></i></a>
                </div>
                <div class="profile-description">
                    <h2>Educcação</h2>
                    <div class="profile-desc-row">
                        <img src="img/user.png" alt="" width="40" height="40">
                        <div>
                            <h3>Nome da school</h3>
                            <strong>Info about the course made</strong> 
                            <strong>2012 - Present &middot; 1.4 years Time Tuition</strong>
                            <p>Desc Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, a sed id, deserunt aspernatur quisquam aliquam perspiciatis corporis ab velit quod unde soluta in molestias eligendi accusamus vero reiciendis libero.</p>
                            <hr>
                        </div>
                    </div>
                    <div class="profile-desc-row">
                        <img src="img/user.png" alt="" width="40" height="40">
                        <div>
                            <h3>Nome da school</h3>
                            <strong>Info about the course made</strong> 
                            <strong>2012 - Present &middot; 1.4 years Time Tuition</strong>
                            <p>Desc Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, a sed id, deserunt aspernatur quisquam aliquam perspiciatis corporis ab velit quod unde soluta in molestias eligendi accusamus vero reiciendis libero.</p>
                            <hr>
                        </div>
                    </div>
                    <div class="profile-desc-row">
                        <img src="img/user.png" alt="" width="40" height="40">
                        <div>
                            <h3>Nome da school</h3>
                            <strong>Info about the course made</strong> 
                            <strong>2012 - Present &middot; 1.4 years Time Tuition</strong>
                            <p>Desc Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, a sed id, deserunt aspernatur quisquam aliquam perspiciatis corporis ab velit quod unde soluta in molestias eligendi accusamus vero reiciendis libero.</p>
                        </div>
                    </div>
                    <hr>
                    <a href="" class="experience-link">Show all 7 experiences <i></i></a>
                </div>
                <div class="profile-description">
                    <h2>Habilidades</h2>
                    <a href="" class="skills-btn">Leadership</a>
                    <a href="" class="skills-btn">Lorem, ipsum.</a>
                    <a href="" class="skills-btn">Aaaaa</a>
                    <a href="" class="skills-btn">DW</a>
                    <a href="" class="skills-btn">WEB</a>
                </div>
                <div class="profile-description">
                    <h2>Línguas</h2>
                    <a href="#" class="lang-btn">PT</a>
                    <a href="#" class="lang-btn">ENG</a>
                </div>
            </div>
        </div>
    </main>
    <?php
    include_once 'php/pages/footer.php';
    ?>
    <script src="js/script.js"></script>
    <!-- FontAwesome JS -->
    <script src="js/all.min.js"></script>
</body>
</html>