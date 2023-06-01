<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']); 
header('Location: ../login-page.php'); //Esse código também serve para terminar sessão.
?>