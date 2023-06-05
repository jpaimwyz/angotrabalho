<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AngoTrabalho | Seu portal de recrutamento e seleção</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <!-- -----------------CABEÇALHO---------- -->
    <header>
            <a href="index.php" class="logo">
                <img src="img/AngoTrabalho.png" alt="logo">
            </a>
        <nav class="nav-menu">
            <a href="index.php">Início</a>
            <a href="404.php">Candidatos</a>
            <a href="404.php">Planos</a>
            <a href="login-page.php">Iniciar Sessão</a>
            <div class="btn"><a href="register-EM.php">Registar</a></div> 
        </nav>
    </header>
    <!-- --------------CONTÉUDO PRINCIPAL--------------- -->
    <main>
        <section class="info-container">
            <article class="banner">
                <div class="content">
                    <h1>Contrate os melhores <br><span>Talentos</span> no mercado.</h1>
                    <p>Encontre agora os melhores talentos do mercado <br> e impulsione o crescimento da sua empresa.</p>
                </div>
            </article>
            <img src="img/layered-waves-haikei.svg" class="wave">
            <!-- INFORMAÇÕES INICIAIS -->
            <article class="info-row">
                <img src="img/analisando-gráficos.jpg" alt="Pessoas em reunião analisando papéis">
                <div class="info-content">
                    <span class="info-category"></span>
                    <h1 class="info-title">Você merece o que há de melhor.</h1>
                    <p>Você sabe que sua empresa merece o que há de melhor, e isso inclui os talentos que você contrata. Não perca mais tempo procurando candidatos de forma aleatória, aproveite as vantagens que este site pode oferecer. Com os melhores talentos ao seu alcance, você estará mais próximo do que nunca de alcançar seus objetivos de negócios. </p>
                    <a href="login-page.php" class="info-btn-check">Publicar Agora</a>
                </div>
            </article>
            <article class="info-row">
                <div class="info-content">
                    <span class="info-category"></span>
                    <h2 class="info-title">Tudo que precisa em um só lugar.</h2>
                    <p>Sua empresa trabalha duro para oferecer o melhor aos seus clientes, e você merece o mesmo em troca. Para empresas, ter todas as ferramentas necessárias em um só lugar pode ser extremamente benéfico. Além disso, uma plataforma centralizada pode ajudar a reduzir a sobrecarga de informações e minimizar a necessidade de alternar entre várias ferramentas diferentes. Isso pode economizar tempo e recursos valiosos para a empresa. </p>
                    <a href="login-page.php" class="info-btn-check">Publicar Ofertas</a>
                </div>
                <img src="img/graficos3-1.png" alt="">
            </article>
        </section>
        <!-- <img src="img/layered-waves-haikei (2).svg" class="wave"> -->
        <!-- ------------SERVIÇOS------------------ -->
        <!-- <section class="services-container">
                <h3 class="services-title">Nossos Serviços</h3>
                <article class="services-row">
                    <img src="img/alvo.png" alt="">
                    <h2>Lorem ipsum dolor sit.</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </article>
                <article class="services-row">
                    <img src="img/combinado.png" alt="">
                    <h2>Lorem ipsum dolor sit.</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </article>
                <article class="services-row">
                    <img src="img/marketing.png" alt="">
                    <h2>Lorem ipsum dolor sit.</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </article>
            </section> -->
    </main>
    <!-- ---------------RODAPÉ----------------- -->
    <?php
    include_once 'php/pages/footer.php';
    ?>
    <!-- FontAwesome JS -->
    <script src="js/all.min.js"></script>
</body>
</html>