<?php
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    
    unset($_SESSION['email']);
    unset($_SESSION['senha']); 
    header('Location: login-page.php'); //Esse código também serve para terminar sessão.
} 
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
    <link rel="stylesheet" href="css/feed.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="css/all.min.css">
</head> 
<body>
    <!-- ------------CABEÇALHO-------------- -->
    <header>
        <a href="index.php" class="logo">
            <img src="img/AngoTrabalho.png" alt="logo">
        </a>
        <nav class="profile">
            <img src="img/nophoto.jpeg" alt="user-pic" class="user-pic" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="img/nophoto.jpeg">
                        <?php  echo "<h4>$logado</h4>"?>
                    </div>
                    <hr>
                    <a href="404.php" class="sub-menu-link">
                        <i class="fa-solid fa-gear icon"></i>
                        <p>Definições</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- CONTEÚDO PRINCIPAL -------------- -->
        <div class="admin-container">
            <!-- Navegação lateral ----------------- -->
            <nav class="sidebar-container">
                <div class="sidebar">
                    <div class="sidebar-content">
                    <ul class="lists">
                        <li class="list">
                        <a href="" class="nav-link">
                            <i class="fa-solid fa-chart-simple icon"></i>
                            <span class="link">Estatíticas Diárias</span>
                        </a>
                        </li>
                        <li class="list">
                        <a href="" class="nav-link">
                            <i class="fa-solid fa-triangle-exclamation icon"></i>
                            <span class="link">Central de Denúncias</span>
                        </a>
                        </li>
                        <li class="list">
                        <a href="" class="nav-link">
                            <i class="fa-solid fa-circle-exclamation icon"></i>
                            <span class="link">Problemas Reportados</span>
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
            <!-- Tabela de gerência----------------- -->
            <div class="charts">
                <section class="attendance">
                    <h2>Suas Estatíticas</h2>
                    <div class="attendance-list">
                        <div class="boxes">
                            <div class="box box1">
                                <i class="fa-solid fa-users icon"></i>
                                <span class="text">Usuários Recentes</span>
                                <span class="number">6</span>
                            </div>
                            <div class="box box2">
                                <i class="fa-solid fa-briefcase icon"></i>
                                <span class="text">Vagas Criadas</span>
                                <span class="number">0</span>
                            </div>
                            <div class="box box3">
                                <i class="fa-solid fa-triangle-exclamation icon"></i>
                                <span class="text">Total de Denúncias</span>
                                <span class="number">0</span>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="attendance">
                    <h2>Membros Recentes</h2>
                    <div class="attendance-list">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Empresa</th>
                                    <th>Email</th>
                                    <th>NIF</th>
                                    <th>Entrou em:</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once 'php/conn.php';
                                $sql = "SELECT * FROM empregador ORDER BY id DESC";
                                $result = $mysqli->query($sql);
                                if(!$result){
                                die("Invalid query: " . $mysqli->error);
                                }
                                while($row = $result->fetch_assoc()){
                                    echo "<tr>
                                    <td>". $row["id"] ."</td>
                                    <td>". $row["nome"] ."</td>
                                    <td>". $row["email"] ."</td>
                                    <td>". $row["nif"] ."</td>
                                    <td>". $row["data_de_criacao"] ."</td>       
                                </tr>";
                                }
                                ?>
                            </tbody>
                        </table>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Entrou em:</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include_once 'php/conn.php';
                                $sql = "SELECT * FROM candidato ORDER BY id DESC";
                                $result = $mysqli->query($sql);
                                if(!$result){
                                die("Invalid query: " . $mysqli->error);
                                }
                                while($row = $result->fetch_assoc()){
                                    echo "<tr>
                                    <td>". $row["id"] ."</td>
                                    <td>". $row["nome"] ."</td>
                                    <td>". $row["email"] ."</td>
                                    <td>". $row["data_de_criacao"] ."</td>       
                                </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="attendance">
                    <h2>Central de Denúncias</h2>
                    <div class="attendance-list">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Depart</th>
                                    <th>Date</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Sam David</td>
                                    <td>Design</td>
                                    <td>03-24-22</td>
                                    <td><button>View</button></td>
                                </tr>
                                <tr class="active">
                                    <td>02</td>
                                    <td>Balbina Kherr</td>
                                    <td>Coding</td>
                                    <td>03-24-22</td>
                                    <td><button>View</button></td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Badan John</td>
                                    <td>testing</td>
                                    <td>03-24-22</td>
                                    <td><button>View</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
    <!-- FontAwesome JS -->
    <script src="js/all.min.js"></script>
</body>
</html>