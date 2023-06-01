<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email'] && !empty($_POST['senha']))){
    //Acessa
    include_once 'conn.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $sqlCA = "SELECT * FROM candidato WHERE email = '$email' AND senha = '$senha'";
    $sqlEM = "SELECT * FROM empregador WHERE email = '$email' AND senha = '$senha'";
    $sqlAdmin = "SELECT * FROM administrador WHERE email = '$email' AND senha = '$senha'"; 

    $resultCA = $mysqli->query($sqlCA);
    $resultEM = $mysqli->query($sqlEM);
    $resultAdmin = $mysqli->query($sqlAdmin); 

    //Admin
    if(mysqli_num_rows($resultAdmin) ==  1 && mysqli_num_rows($resultCA) < 1){
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../panel-admin.php');
        
    }
    //Candidato
    elseif(mysqli_num_rows($resultCA) ==  1 && mysqli_num_rows($resultAdmin) < 1 ){
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../feed.php');
    }
    //empregador
    elseif(mysqli_num_rows($resultEM) ==  1){
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../profile-EM2.php');
    }
    else{
        unset($_SESSION['email']);
        unset($_SESSION['senha']); 
        header('Location: ../login-page.php');
    } 
}
else{
    //Não acessa o site
    header('Location: ../login-page.php');
}

?>