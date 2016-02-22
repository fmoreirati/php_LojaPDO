<?php

$email = trim($_POST["email"]);
$pw1 = trim($_POST["pw1"]);

require_once '../DAO/ClienteDAO.php';
$clienteDAO = new ClienteDAO();
if($clienteDAO->buscarLogin($email, $pw1) != null){
    session_start();
    $_SESSION["usuario"] = $clienteDAO->buscarLogin($email, $pw1);
    header("location:../index.php");
} else {
    header("location:../index.php?p=view/formLogin.php&e=0");
}


