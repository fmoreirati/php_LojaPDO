<?php
ini_set('display_errors' ,1);

class ProdutoDAO {
    public function salvar(Produto $produto) {
        require_once './DAO/Conecta.php';
        try {
            $con = new Conecta();
            $sql = "INSERT INTO produto (idProduto, descricao, foto,tipo, preco) VALUES (NULL,:descricao,:foto,:tipo,:preco)";
            $stmt = $con->getConection()->prepare($sql);
            $stmt->bindParam(":descricao",$produto->getDescricao());
            $foto = $produto->getFoto();
            $stmt->bindParam(":foto",$foto["name"]);
            $stmt->bindParam(":tipo",$produto->getTipo());
            $stmt->bindParam(":preco",$produto->getPreco());
            $stmt->execute();
            return true;
        } catch (PDOException $exc){
            echo "Erros de:". $exc->getMessage();
        }

    }

    public function listarTodos(){
        require_once './DAO/Conecta.php';
        try {
            $con = new Conecta();
            $sql = "SELECT * from Produto";
            $stmt = $con->getConection()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $exc){
            echo "Erros de:". $exc->getMessage();
        }
    }

    public function buscar($dados) {
        require_once './DAO/Conecta.php';
         try {
            $con = new Conecta();
            $sql = "SELECT * from produto where descricao like ?";
            $stmt = $con->getConection()->prepare($sql);
            $stmt->bindParam(1, $dados);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_BOTH);
        } catch (PDOException $exc){
            echo "Erros de:". $exc->getMessage();
        }

    }

}
