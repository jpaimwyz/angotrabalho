<?php
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    
    unset($_SESSION['email']);
    unset($_SESSION['senha']); 
    header('Location: index-candidatos.php'); //Esse código também serve para terminar sessão.
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
    <header>
        <a href="index.html" class="logo">
            <img src="img/AngoTrabalho.png" alt="logo">
        </a>
        <nav class="profile">
            <img src="img/user.png" alt="user-pic" class="user-pic" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="img/user.png">
                        <h4>Nome do Usuário</h2>
                    </div>
                    <hr>
                    <a href="profile-CA.html" class="sub-menu-link">
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
                    <a href="php/logout.php" class="sub-menu-link">
                        <i class="fa-solid fa-arrow-right-from-bracket icon"></i>
                        <p>Logout</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
        <div class="feed-container">
            <aside class="filtering">
                <h5>Filtragem</h5>
                <label for="pesquisarCargo">O que deseja procurar?</label>
                <input type="text" class="search" placeholder="Insira as palavras-chaves" name="pesquisarCargo" id="pesquisarCargo" autocomplete="off">
                <label for="">Onde?</label>
                <select name="pesquisarZona" id="pesquisarCargo" class="search sel">
                    <option value="Todas">Todas</option>
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
                
                <label for="area-atuacao">Área de atuacão</label>
                <select name="area-atuacao" id="area-atuacao" class="search sel">
                    <option disabled see>Selecione uma área</option>
                    <option value="Administração e apoio de escritório">Administração e apoio de escritório</option>
                    <option value="Beleza, fitness e desporto">Beleza, fitness e desporto</option>
                    <option value="Finanças e contabilidade">Finanças e contabilidade</option>
                    <option value="Consultoria, auditoria e estratégia empresa
                    ">Consultoria, auditoria e estratégia empresarial</option>
                    <option value="Compras, logística e comércio">Compras, logística e comércio</option>
                    <option value="Ensino, formação e línguas">Ensino, formação e línguas</option>
                    <option value="Engenharia">Engenharia</option>
                    <option value="Gestão e executivo">Gestão e executivo</option>
                    <option value="Informática e TI">Informática e TI</option>
                    <option value="Imobiliário e construção">Imobiliário e construção</option>
                    <option value="Jurídico">Jurídico</option>
                    <option value="Marketing, comunicação e relações públicas">Marketing, comunicação e relações públicas</option>
                    <option value="Moda e espectáculo">Moda e espectáculo</option>
                    <option value="Pesquisa e Desenvolvimento">Pesquisa e Desenvolvimento</option>
                    <option value="Petróleos – Técnico especializado">Petróleos – Técnico especializado</option>
                    <option value="Banca, seguros">Banca, seguros</option>
                    <option value="Actividade agrícola">Actividade agrícola</option>
                    <option value="Ciências">Ciências</option>
                    <option value="Indústria editorial">Indústria editorial</option>
                    <option value="Vendas e atendimento ao cliente">Vendas e atendimento ao cliente</option>
                    <option value="Profissionais, operários e ofícios">Profissionais, operários e ofícios</option>
                    <option value="Qualidade, Higiene, Segurança e Ambiente">Qualidade, Higiene, Segurança e Ambiente</option>
                    <option value="Recursos Humanos">Recursos Humanos</option>
                    <option value="Restauração, hotelaria e turismo">Restauração, hotelaria e turismo</option>
                    <option value="Saúde">Saúde</option>
                    <option value="Aviação">Aviação</option>
                    
                </select>
                <div class="btn-filtering">
                    <button class="btn-filter">Limpar</button>
                    <button class="btn-filter">Aplicar</button>
                </div>
                
            </aside>
            <section class="central">
                <article class="job-card">
                    <h2><a href="#">Procura-se Programador Júnior</a></h2>
                    <h4>Dev & CO.</h4>
                    <span class="job-details"><i class="fa-solid fa-clock"></i> Tempo Inteiro</span>
                    <span class="job-details"><i class="fa-solid fa-location-dot"></i> Luanda</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil harum, libero nam quasi veritatis aperiam tempora odio dolorum atque architecto fuga excepturi sunt sapiente incidunt optio consectetur ea qui deleniti!
                    </p>
                
                    <a href="" class="central-btn">Saber mais</a> <a href="" class="central-btn">Aplicar</a>
                </article>
                <article class="job-card">
                    <h2><a href="#">Procura-se Gestor de projetos</a></h2>
                    <h4>RH, SA</h4>
                    <span class="job-details"><i class="fa-solid fa-clock"></i> Tempo Inteiro</span>
                    <span class="job-details"><i class="fa-solid fa-location-dot"></i> Luanda</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil harum, libero nam quasi veritatis aperiam tempora odio dolorum atque architecto fuga excepturi sunt sapiente incidunt optio consectetur ea qui deleniti! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, quos similique deleniti consequatur amet quis ipsa optio odio, nemo unde non ducimus officiis pariatur, quidem provident placeat impedit quo. Sint!
                    </p>
                    <a href="" class="central-btn">Saber mais</a> <a href="" class="central-btn">Aplicar</a>
                </article>
            </section>
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