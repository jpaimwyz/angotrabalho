<?php
    require_once 'php/register.php';
    insertCA();

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
    <!-- --------------HEADER--------------- -->
    <header>
        <a href="index-candidatos.php" class="logo">
            <img src="img/AngoTrabalho.png" alt="logo">
        </a>
    </header>
    <main>
        <h1> Cadastre-se agora e tenha acesso <br> às melhores vagas do mercado.</h1>
        <div class="container-register">
            <p class="message">É uma Empresa/Empregador? <a href="register-EM.php">Cadastre-se aqui</a></p>
            <!-- FORMULÁRIO------------------ -->
            <form action="register-CA.php" id="form" name="form" method="POST">
                <div class="input-group">
                    <label for="nome">Nome Completo<span class="obrigatorio">*</span></label>
                    <input type="text" name="nome" class="attbr" placeholder="Insira o nome completo" autocomplete="off" required>
                </div>
                <div class="input-group">
                    <label for="email">Email<span class="obrigatorio">*</span></label>
                    <input type="email" name="email" class="attbr" placeholder="seunome@email.com" required autocomplete="off"> 
                </div>
                <!--  <div class="input-group">
                    <label for="telefone">Telefone<span class="obrigatorio">*</span></label>
                    <input type="number" placeholder="Insira o número de telefone" name="telefone" id="telefone" required>
                </div> -->
                <div class="input-group">
                    <label for="nacionalidade">Nacionalidade<span class="obrigatorio">*</span></label>
                    <select name="nacionalidade" size="1" class="attbr">
                        <option value="#" disabled>Selecione a Nacionalidade</option>
                        <option value="Bengo">Bengo</option>
                        <option value="Benguela">Benguela</option>
                        <option value="Bié">Bié</option>
                        <option value="Cabinda">Cabinda</option>
                        <option value="Cuando Cubango">Cuando Cubango</option>
                        <option value="Cuanza Norte">Cuanza Norte</option>
                        <option value="Cuanza Sul">Cuanza Sul</option>
                        <option value="Cunene">Cunene</option>
                        <option value="Huambo">Huambo</option>
                        <option value="Huíla">Huíla</option>
                        <option  value="Luanda">Luanda</option> <!-- selected="selected" -->
                        <option value="Lunda Norte">Lunda Norte</option>
                        <option value="Luanda Sul">Lunda Sul</option>
                        <option value="Malange">Malange</option>
                        <option value="Moxico">Moxico</option>
                        <option value="Namibe">Namibe</option>
                        <option value="Uíge">Uíge</option>
                        <option value="Zaire">Zaire</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="datanascimento">Data de Nascimento</label>
                    <input type="date" name="datanascimento" class="attbr">
                </div>
                <div class="input-group">
                    <label for="senha">Criar uma senha<span class="obrigatorio">*</span></label>
                    <input type="password" name="senha" class="attbr" placeholder="Digite a senha" required>
                </div>
                <div class="input-group">
                    <label for="csenha">Confirmar Senha<span class="obrigatorio">*</span></label>
                    <input type="password" name="csenha" class="attbr" placeholder="Digite a senha novamente"  required>
                </div>
                <span class="message">Ao criar conta, concorda com os nossos <a href="404.php">Termos e Condições</a></span>
                <div class="button">
                <input type="submit" name="submit" value="Cadastrar">
                </div>
            <p class="message">Já tem conta? <a href="login-page.php">Iniciar Sessão</a></p>
            </form>
        </div>
    </main>
            <!-- ------------------FOOTER-------------- -->
    <?php
    include_once 'php/pages/footer.php';
    ?>
    <!-- FontAwesome JS -->
    <script src="js/all.min.js"></script>
</body>
</html>