<?php
ini_set('display_errors' ,1);

class ClienteDAO {
    public function salvar(Cliente $cliente) {
        require_once './DAO/Conecta.php';
        try {
            $con = new Conecta();
            $sql = "INSERT INTO Cliente (idCliente, nome, email, cpf, dataNasc, pw1) VALUES (NULL,:nome,:email,:cpf,:dataNasc,:pw1)";
            $stmt = $con->getConection()->prepare($sql);
            $stmt->bindParam(":nome",$cliente->getNome());
            $stmt->bindParam(":email",$cliente->getEmail());
            $stmt->bindParam(":cpf",$cliente->getCpf());
            $stmt->bindParam(":dataNasc",date("Y-m-d", strtotime($cliente->getDataNasc())));
            $stmt->bindParam(":pw1",crypt($cliente->getEmail(),$cliente->getPw1()));
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
            $sql = "SELECT * from Cliente";
            $stmt = $con->getConection()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $exc){
            echo "Erros de:". $exc->getMessage();
        }
    }

    public function buscarLogin($email, $pw1) {
        require_once '../DAO/Conecta.php';
         try {
            $con = new Conecta();
            $sql = "SELECT nome from Cliente where email=:email and pw1=:pw1";
            $stmt = $con->getConection()->prepare($sql);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":pw1", crypt($email,$pw1));
            $stmt->execute();
            $dados = $stmt->fetch(PDO::FETCH_BOTH);
            return $dados["nome"];
        } catch (PDOException $exc){
            echo "Erros de:". $exc->getMessage();
        }

    }

     public function buscarID($id){
        require_once './DAO/Conecta.php';
        try {
            $con = new Conecta();
            $sql = "SELECT * from Cliente where idCliente = :id";
            $stmt = $con->getConection()->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $exc){
            echo "Erros de:". $exc->getMessage();
        }
    }
}
