<?php
if (!isset($_SESSION))
    session_start();
if(isset($_SESSION["usuario"])){
    $nome = $_SESSION["usuario"];
    //var_dump($nome);
    echo "Bem vindo ".$nome." <a href='./view/logoffUser.php'> <button class='btn btn-link'>Logoff</button></a>";
} else {
    echo "Bem vindo Visitante.";
    session_destroy();
}

