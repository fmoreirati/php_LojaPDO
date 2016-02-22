<header class="clearfix">
    <?php


    if (isset($_POST['nome'])){
        require_once './model/Cliente.php';
        $cliente = new Cliente();
        $cliente->setNome(trim($_POST["nome"]));
        $cliente->setEmail(trim($_POST["email"]));
        $cliente->setCpf(trim($_POST["cpf"]));
        $cliente->setDataNasc(trim($_POST["dataNasc"]));
        $cliente->setPw1(trim($_POST["pw1"]));

        require_once './controller/CtrlCliente.php';
        $ctrlCliente = new CtrlCliente();
        if ($ctrlCliente->valida($cliente) == ""){
            require_once './DAO/ClienteDAO.php';
            $clienteDAO = new ClienteDAO();
            if ($clienteDAO->salvar($cliente)){
              $m = "Cadastro realizado!";
            } else {
               $e ="Não foi possivle realizado o cadastro.";
            }
        } else {
             $e = $ctrlCliente->valida($cliente);
        }

        //Mostrar erros
        if (isset($m)){
           echo "<div class='alert alert-success'> <strong>".$m."</strong></div>";
        }
        if (isset($e)){
           echo "<div class='alert alert-danger'> <strong>".$e."</strong></div>";
        }
    }
    ?>

    <h2>Cadastro de Cliente</h2>
    <form method="post" action="" role="form">
        <div class="form-group">
            <label for="nome"> Nome: </label>
            <input type="text" name="nome" autofocus class="form-control" value="<?php $cliente->getNome()?>">
        </div>
        <div class="form-group">
            <label for="email"> E-mail:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="number" name="cpf" class="form-control">
        </div>
        <div class="form-group">
            <label for="dataNasc">Data Nasc.:</label>
            <input type="date" name="dataNasc" class="form-control"><br>
        </div>
        <div class="form-group">
            <label for="pw1">Senha:</label>
            <input type="password" name="pw1" class="form-control"><br>
        </div>

        <button type="submit" class="btn btn-default">Cadastrar</button>
    </form>
</header>
