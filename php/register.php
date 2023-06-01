<?php 
function insertCA(){
    if(isset($_POST['submit'])){
        include_once 'conn.php';

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $datanascimento = $_POST['datanascimento'];
        $nacionalidade = $_POST['nacionalidade'];

        $result = mysqli_query($mysqli, "INSERT INTO candidato(nome,email,senha,data_de_nascimento,nacionalidade) VALUES ('$nome', '$email', '$senha','$datanascimento','$nacionalidade')");
        header('Location: login-page.php');

    }
}

function insertEM(){
    if(isset($_POST['submit'])){
        include_once 'conn.php';

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $nif = $_POST['nif'];
        $senha = $_POST['senha'];
        $result = mysqli_query($mysqli, "INSERT INTO empregador(nome,email,telefone,senha,nif) VALUES ('$nome','$email','$telefone','$senha','$nif')");
        header('Location: login-page.php');
    }
}

function insertVaga(){
    if(isset($_POST['submit'])){
        $titulo = $_POST['titulo_vaga'];
        $descricao = $_POST['descricao_vaga'];
        $localizacao = $_POST['localizacao'];
        $area_vaga = $_POST['area_vaga'];
    
        include_once 'conn.php';
        $result = mysqli_query($mysqli, "INSERT INTO vaga(titulo,descricao,area_de_vaga,localizacao) VALUES ('$titulo','$descricao','$area_vaga','$localizacao')");
        header('Location: manage-post.php');
    }
}
?>