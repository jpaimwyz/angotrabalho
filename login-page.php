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
    <!-- -----------------Cabeçalho-------------------- -->
    <header>
        <a href="index.php" class="logo">
            <img src="img/AngoTrabalho.png" alt="logo">
        </a>
        </div>
    </header>
    <!-- ----------------------Conteúdo---------------- -->
    <main>
        <h1>Inicie sessão e acesse agora <br> as melhores vagas/ os melhores <br> candidatos do mercado</h1>
        <div class="form-container-login">
                <p class="title-login">Bem-vindo de volta!</p>
                <!--Formulário------------------- -->
                <form class="form-login" id="form-login" action="php/login.php" method="POST">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="emailn" class="attbr" placeholder="Insira o email" required>
                    </div>
                    <div class="input-group">
                        <label for="senha">Palavra-passe</label>
                        <div class="input-senha attbr">
                            <input type="password" placeholder="Digite a senha" required id="senha" name="senha" class="senha">
                            <i class="fa-solid fa-eye senha-icon" id="btn-senha" onclick="mostrarSenha()"></i>
                        </div>
                    </div>
                    <div class="forgot">
                        <a rel="noopener noreferrer" href="404.php">Esqueceu a senha?</a>
                    </div>
                    <button class="sign" rel="noopener noreferrer" type="submit" name="submit">Entrar</button>
                </form>
                <!-- Redes Sociais & Links úteis -->
                <div class="social-message">
                    <div class="line"></div>
                    <p class="message">Login com redes sociais</p>
                    <div class="line"></div>
                </div>
                <div class="social-icons">
                    <button aria-label="Log in with Google" class="icon">
                        <i class="fa-brands fa-facebook"></i>
                    </button>
                    <button aria-label="Log in with Twitter" class="icon">
                        <i class="fa-brands fa-twitter"></i>
                    </button>
                    <button aria-label="Log in with GitHub" class="icon">
                        <i class="fa-brands fa-discord"></i>
                    </button>
                </div>
                <p class="signup">Não tem uma conta? Cadastre-se como 
                    <a rel="noopener noreferrer" href="404.php">Candidato</a> 
                    ou 
                    <a rel="noopener noreferrer" href="register-EM.php">Empresa/Empregador</a> 
                </p>
            </div>
    </main>
    <!-- ----------------RODAPÉ---------------------- -->
    <?php
    include_once 'php/pages/footer.php';
    ?>
    <!-- ---------------------JS----------------- -->
    <script>
        function mostrarSenha(){
        let inputPass = document.getElementById('senha')
        let btnShowPass = document.getElementById('btn-senha')

        if(inputPass.type === 'password'){
            inputPass.setAttribute('type', 'text')
            btnShowPass.classList.replace('fa-eye', 'fa-eye-slash')
        }
        else{
            inputPass.setAttribute('type', 'password')
            btnShowPass.classList.replace('fa-eye-slash', 'fa-eye')
        }
}
    </script>
    <script src="js/script.js"></script>
    <!-- FontAwesome JS -->
    <script src="js/all.min.js"></script>
</body>
</html>