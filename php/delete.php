<?php
    if(!empty($_GET['id'])){
        include_once 'conn.php';

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM vaga WHERE id=$id";
        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0){
            $sqlDelete = "DELETE FROM vaga WHERE id=$id";
            $result = $mysqli->query($sqlDelete);
        }
    }
    header('Location: ../manage-post.php');
?>