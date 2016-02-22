<?php

class Cliente {
    private $idCliente;
    private $nome;
    private $email;
    private $dataNasc;
    private $cpf;
    private $pw1;

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

    public function setIDCliente($id){
        $this->idCliente = $id;
    }

    public function getIDCliente(){
        return $this->idCliente;
    }

}
