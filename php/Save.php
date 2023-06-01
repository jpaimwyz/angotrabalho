<?php 
    if(isset($_POST['update'])){
        include_once 'conn.php'; 

        $id = $_POST['id'];
        $titulo = $_POST['titulo_vaga'];
        $descricao = $_POST['descricao_vaga'];
        $localizacao = $_POST['localizacao'];
        $area_vaga = $_POST['area_vaga'];

        $sqlUpdate = "UPDATE vaga SET titulo = '$titulo', descricao= '$descricao' WHERE id='$id'";

        /*  area_de_vaga='$area_vaga', localizacao='$localizacao'  */
        $result = $mysqli->query($sqlUpdate);
        header('Location: ../manage-post.php');
    }
?>