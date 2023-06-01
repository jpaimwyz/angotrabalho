<?php
    if(!empty($_GET['id'])){
        include_once 'conn.php';

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM vaga WHERE id=$id";
        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $titulo = $row['titulo'];
                $descricao = $row['descricao'];
                $localizacao = $row['localizacao'];
                $area_vaga = $row['area_de_vaga'];
            }
        }
        else{
            header('Location: ../manage-post.php');
        }
    }
?>