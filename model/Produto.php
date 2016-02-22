<?php

class Produto {
    private $idProduto;
    private $descricao;
    private $foto;
    private $tipo;
    private $preco;

    function getIdProduto() {
        return $this->idProduto;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getFoto() {
        return $this->foto;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getPreco() {
        return $this->preco;
    }

    function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }


}
