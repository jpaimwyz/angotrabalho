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
    <!-- ----------------CABEÇALHO-------------- -->
    <header>
        <a href="index.php" class="logo">
            <img src="img/AngoTrabalho.png" alt="logo">
        </a> 
        </div>
        <!-- -----------PERFIL TOGGLE----------- -->
        <nav class="profile">
            <img src="img/nophoto.jpeg" alt="user-pic" class="user-pic" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="img/nophoto.jpeg">
                        <?php  echo "<h4>$logado</h4>"?>
                    </div>
                    <hr>
                    <a href="config-EM.php" class="sub-menu-link">
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
        </nav>
    </header>
    <!-- ----------CONTÉUDO PRINCIPAL----------------- -->
    <main>
        <div class="container-manage">
            <div class="title">
                <h3>Gestão de Vagas</h3>
                <a class="create-btn" href="create-post.php"><i class="fa-solid fa-circle-plus"></i>Criar Nova Vaga</a>
                <button class="create-btn" onclick="javascript:history.go(-1)">Voltar</button>
            </div>
            <div class="divTable">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Área</th>
                            <th>Local</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once 'php/conn.php';
                        $sql = "SELECT * FROM vaga ORDER BY id DESC";
                        $result = $mysqli->query($sql);
                        if(!$result){
                            die("Invalid query: " . $mysqli->error);
                        }
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>
                            <td>". $row["id"] ."</td>
                            <td>". $row["titulo"] ."</td>
                            <td>". $row["area_de_vaga"] ."</td>
                            <td>". $row["localizacao"] ."</td>
                            <td>
                                <a href='edit-post.php?id=$row[id]' class='create-btn edit' name='editar'><i class='fa-solid fa-pen'></i></a>
                                <a href='php/delete.php?id=$row[id]' class='create-btn delete'><i class='fa-solid fa-trash'></i></a>  
                            </td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    </main>
    <!--------------------------- RODAPÉ ------------------------------ -->
    <?php
    include_once 'php/pages/footer.php';
    ?>
    <script src="js/script.js"></script>
    <!-- FontAwesome JS -->
    <script src="js/all.min.js"></script>
</body>
</html>