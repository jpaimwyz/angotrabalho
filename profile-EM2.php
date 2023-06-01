<?php
include_once 'php/verificacao.php';
verificacao();
$logado = $_SESSION['email'];

?>
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
    <!-- ----------------CABEÇALHO------------------ -->
    <header>
        <a href="index.php" class="logo">
            <img src="img/AngoTrabalho.png" alt="logo">
        </a>
        <!-- PERFIL---------------------------- -->
        <nav class="profile">
            <img src="img/nophoto.jpeg" alt="user-pic" class="user-pic" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="img/nophoto.jpeg">
                        <?php  echo "<h4>$logado</h4>"?>
                    </div>
                    <hr>
                    <a href="config-EM.php?" class="sub-menu-link">
                        <i class="fa-solid fa-user icon"></i>
                        <p>Editar Perfil</p>
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
                    <a href="php/logout.php" class="sub-menu-link">
                        <i class="fa-solid fa-arrow-right-from-bracket icon"></i>
                        <p>Terminar Sessão</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- CONTAINER ------------- -->
        <div class="container">
            <div class="profile-main">
                <div class="profile-container2">
                    <div class="profile-container-inner">
                        <img src="img/nophoto.jpeg" class="profile-pic">
                        <?php  echo "<h1>$logado</h1>"?>
                        <strong></strong>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ab ullam asperiores quos sunt magni perferendis? Odit eos sed animi pariatur sint soluta nihil qui architecto, quis quos. Beatae.</p>
                    </div>
                </div>
                <div class="profile-description">
                    <h2>Sobre</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, qui ab ullam asperiores quos sunt magni perferendis? Odit eos sed animi pariatur sint soluta nihil qui architecto, quis quos. Beatae.</p>
                    <a href="#" class="see-more-link">Veja mais...</a>
                </div>
                <!-- <div class="profile-description">
                    <h2>Vagas mais populares</h2>
                    <div class="profile-desc-row">
                    <h3>Job Role</h3>
                    <strong>Info about the companny</strong>
                    <strong>2012 - Present &middot; 1.4 years</strong>
                    <p>Desc Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, a sed id, deserunt aspernatur quisquam aliquam perspiciatis corporis ab velit quod unde soluta in molestias eligendi accusamus vero reiciendis libero.</p>
                    
                    </div>
                    <hr>
                    <a href="#" class="experience-link">Show all 7 experiences <i></i></a>
                </div> -->
                <div class="profile-description">
                    <h2>Gerenciamento de Vagas</h2>
                    <div class="profile-desc-row">
                        <div class="manage">
                            <a href="manage-post.php" class="create-btn">Gerenciar Vagas</a>
                            <a href="create-post.php" class="create-btn">Criar Vagas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ----------------RODAPÉ---------------- -->
    <?php
    include_once 'php/pages/footer.php';
    ?>
    <script src="js/script.js"></script>
    <!-- FontAwesome JS -->
    <script src="js/all.min.js"></script>
</body>
</html>