<?php

function verificacao(){
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']); 
    header('Location: index.php'); //Esse código também serve para terminar sessão.
    }
}
?>
