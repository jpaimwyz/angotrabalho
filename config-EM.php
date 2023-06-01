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
        <!-- <nav class="profile">
            <img src="img/user.png" alt="user-pic" class="user-pic" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="img/user.png">
                        <h4>Nome do Usuário</h2>
                    </div>
                    <hr>
                    <a href="profile-EM.html" class="sub-menu-link">
                        <i class="fa-solid fa-user icon"></i>
                        <p>Edit Profile</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="" class="sub-menu-link">
                        <i class="fa-solid fa-gear icon"></i>
                        <p>Settings & Privacy</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="" class="sub-menu-link">
                        <i class="fa-solid fa-circle-info icon"></i>
                        <p>Help & Support</p>
                        <i class="fa-solid fa-arrow-right icon"></i>
                    </a>
                    <a href="" class="sub-menu-link">
                        <i class="fa-solid fa-arrow-right-from-bracket icon"></i>
                        <p>Logout</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </nav> -->
    </header>
    <main>
        <!-- CONTAINER LADO ESQUERDO -------------- -->
        <div class="profile-container">
            <!-- NAVEGAÇÃO LATERAL -->
            <nav class="sidebar-container">
                <div class="sidebar">
                    <div class="user-info dash-profile">
                        <img src="img/nophoto.jpeg">
                        <?php  echo "<h4>$logado</h4>"?>
                    </div>
                    <div class="sidebar-content">
                        <ul class="lists">
                        <li class="list">
                        <a href="profile-EM2.php" class="nav-link">
                            <i class="fa-solid fa-user icon"></i>
                            <span class="link">Perfil</span>
                        </a>
                        </li>
                        <li class="list">
                        <a href="" class="nav-link">
                            <i class="fa-solid fa-house icon"></i>
                            <span class="link">Informações Pessoais</span>
                        </a>
                        </li>
                        <li class="list">
                        <a href="#pass" class="nav-link">
                            <i class="fa-solid fa-lock icon"></i>
                            <span class="link">Palavra-Passe</span>
                        </a>
                        </li>
                        <li class="list">
                        <a href="404.php" class="nav-link">
                            <i class="fa-solid fa-circle-info icon"></i>
                            <span class="link">Ajuda e Suporte</span>
                        </a>
                        </li>
                        <li class="list">
                        <a href="php/logout.php" class="nav-link">
                            <i class="fa-solid fa-right-from-bracket icon"></i>
                            <span class="link">Terminar Sessão</span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>
                <!-- Conteúdo Principal -->
                <div class="main-profile">
                    <div class="mp-row">
                        <span class="secao">Informações Pessoais</span>
                        <div class="input-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" name="nome" id="nome" class="attbr" placeholder="Seu nome">
                        </div>
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="attbr" placeholder="seuemail@gmail.com">
                        </div>
                        <div class="input-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="attbr" placeholder="912 345 678">
                        </div>
                        <!-- <div class="input-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" id="endereco" class="attbr" placeholder="Sua localização">
                        </div> -->
                        <div class="input-group">
                            <label for="sobre">Sobre</label>
                            <textarea name="sobre" id="sobre" cols="30" rows="20" class="attbr textarea" placeholder="Escreva sobre você, seus interesses e o que quer partilhar com o mundo"></textarea>
                        </div>
                        <div class="input-group">
                            <button class="save">Salvar Alterações</button>
                        </div>
                    </div>
                    <div class="mp-row">
                        <span class="secao" id="pass">Palavra-Passe</span>
                        <div class="input-group">
                            <label for="senhaAntiga">Palavra-Passe Antiga</label>
                            <div class="input-senha attbr">
                                <input type="password" placeholder="Digite a senha novamente" 
                                id="senhaAntiga" name="senhaAntiga" class="senha">
                                <i class="fa-solid fa-eye-slash senha-icon toggle"></i>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="senhaNova">Palavra-Passe Nova</label>
                            <div class="input-senha attbr">
                                <input type="password" placeholder="Digite a senha novamente" 
                                id="senhaAntiga" name="senhaAntiga" class="senha">
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="csenhaNova">Confirmar Palavra-Passe Nova</label>
                            <div class="input-senha attbr">
                                <input type="password" placeholder="Digite a senha novamente" 
                                id="senhaAntiga" name="senhaAntiga" class="senha">
                                <i class="fa-solid fa-eye-slash senha-icon toggle"></i>
                            </div>
                        </div>
                        <div class="input-group">
                            <button class="save">Salvar Alterações</button>
                        </div>
                    </div>
                    <div class="mp-row">
                        <span class="secao">Deletar a Conta</span>
                        <div class="input-group">
                            <p>Ao eliminar sua conta, todos os seus dados serão perdidos permanentemente.</p>
                            <a href ="404.page" class="save warning">Deletar</a>
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