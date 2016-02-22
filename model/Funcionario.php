<?php

class Funcionario {
    private $idFuncionario;
    private $nome;
    private $email;
    private $dataNasc;
    private $cpf;
    private $pw1;
    private $cargo;

    function setEmail($email) {
        $this->email = $email;
    }

    function setDataNasc($dataNasc) {
        $this->dataNasc = $dataNasc;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setPw1($pw1) {
        $this->pw1 = $pw1;
    }

    public function setNome ($nome){
        $this->nome = $nome;
    }

    public function getNome (){
        return $this->nome;
    }
    function getEmail() {
        return $this->email;
    }

    function getDataNasc() {
        return $this->dataNasc;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getPw1() {
        return $this->pw1;
    }

    function getIdFuncionario() {
        return $this->idFuncionario;
    }

    function getCargo() {
        return $this->cargo;
    }

    function setIdFuncionario($idFuncionario) {
        $this->idFuncionario = $idFuncionario;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }
}
