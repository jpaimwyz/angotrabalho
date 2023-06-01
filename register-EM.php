<?php
    require_once 'php/register.php';
    insertEM();
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
    <header>
        <a href="index.php" class="logo">
            <img src="img/AngoTrabalho.png" alt="logo">
        </a>
    </header>
    
    <main>
        <h1> Cadastre-se agora e tenha acesso <br> aos melhores candidatos.</h1>
        <div class="container-register">
            <p class="message">É um Candidato? <a href="register-CA.php">Cadastre-se aqui</a></p>
            <!-- FORMULÁRIO------------------------------------------------------------ -->
            <form action="register-EM.php" id="form" name="form" method="POST">
                    <div class="input-group">
                        <label for="nome">Nome da Empresa<span class="obrigatorio">*</span></label>
                        <input type="text" placeholder="Insira o nome da empresa" required autocomplete="off" id="nome" name="nome" class="attbr">
                        <span class="msg-text"></span>
                    </div>
                    <div class="input-group">
                        <label for="email">Email<span class="obrigatorio">*</span></label>
                        <input type="email" placeholder="nomedaempesa@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required autocomplete="off" id="email" name="email" class="attbr">
                        <span class="msg-text"></span>
                    </div>
                    <div class="input-group">
                        <div class="single-container">
                            <div class="single">
                                <label for="telefone">Telefone<span class="obrigatorio">*</span></label>
                                <input type="number" placeholder="912 345 678" required  id="telefone" name="telefone" class="attbr">
                                <span class="msg-text"></span>
                            </div>
                            <div class="single">
                                <label for="nif">NIF<span class="obrigatorio">*</span></label>
                                <input type="number" placeholder="Insira o NIF da Empresa" required id="nif" name="nif" class="attbr">
                                <span class="msg-text"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="senha">Criar uma senha <span class="obrigatorio">*</span></label>
                        <div class="input-senha attbr">
                            <input type="password" placeholder="Digite a senha" required id="senha" name="senha" class="senha">
                            <i class="fa-solid fa-eye-slash senha-icon toggle"></i>
                        </div>
                        <span class="msg-text"></span>
                    </div>
                    <div class="input-group">
                        <label for="senha2">Confirmar Senha <span class="obrigatorio">*</span></label>
                        <div class="input-senha attbr">
                            <input type="password" placeholder="Digite a senha novamente" required id="senha2" name="senha2" class="senha">
                            <i class="fa-solid fa-eye-slash senha-icon toggle"></i>
                        </div>
                        <span class="msg-text"></span>
                    </div>
                <span class="message">Ao criar conta, concorda com os nossos <a href="404.php">Termos e Condições</a></span>
                <div class="button">
                    <input type="submit" name="submit" value="Cadastrar">
                </div>
                <p class="message">Já tem conta? <a href="login-page.php">Iniciar Sessão</a></p>
            </form>
        </div>
    </main>

    <?php
    include_once 'php/pages/footer.php';
    ?>
    <script src="js/validation.js"></script>
    <!-- FontAwesome JS -->
    <script src="js/all.min.js"></script>
</body>
</html>