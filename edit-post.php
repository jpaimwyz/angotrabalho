<?php
    require_once 'php/edit.php';
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
        <nav class="profile">
            <img src="img/nophoto.jpeg" alt="user-pic" class="user-pic" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="img/nophoto.jpeg">
                        <?php  echo "<h4>$logado</h4>"?>
                    </div>
                    <hr>
                    <a href="profile-EM.html" class="sub-menu-link">
                        <i class="fa-solid fa-user icon"></i>
                        <p>Edit Profile</p>
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
    <main>
        <div class="container-post">
        <button class="create-btn" onclick="javascript:history.go(-1)">Voltar</button>
            <form action="php/Save.php" method="post">
                <div class="group-input">
                    <input type="text" name="titulo_vaga" id="titulo_vaga" placeholder="Título da vaga" value="<?php echo $titulo?>" title="Este campo não pode estar vazio!" required>
                </div>
                <!-- <div class="group-input">
                    <label for="area_vaga">Área</label>
                    <select name="area_vaga" id="area_vaga">
                        <option value="" selected disabled>Selecione a área</option>
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
                </div>
                <div class="group-input">
                    <label for="localizacao">Localização</label>
                    <select name="localizacao" id="localizacao">
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
                        <option value="Luanda">Luanda</option>
                        <option value="Lunda Norte">Lunda Norte</option>
                        <option value="Luanda Sul">Lunda Sul</option>
                        <option value="Malange">Malange</option>
                        <option value="Moxico">Moxico</option>
                        <option value="Namibe">Namibe</option>
                        <option value="Uíge">Uíge</option>
                        <option value="Zaire">Zaire</option>
                    </select>
                </div> -->
                <div class="group-input">
                    <label for="descricao_vaga">Descrição</label>
                    <textarea name="descricao_vaga" id="descricao_vaga" cols="30" rows="20" placeholder="Descreva a vaga, quais competências procura, o perfil ideal..." required><?php echo $descricao?></textarea>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                </div>
                <div class="group-input btn-row">
                    <button type="submit" name="update" class="btn-post"><i class="fa-solid fa-circle-plus"></i> Salvar post</button>
                    <a href="manage-post.php" onclick="javascript:history.go(-1)" class="btn-post"><i class="fa-solid fa-xmark"></i> Cancelar</a>
                </div>
            </form>
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