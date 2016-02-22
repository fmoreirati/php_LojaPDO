<header class="clearfix">
    <?php
    if (isset($_POST['descricao'])){
        require_once './model/Produto.php';
        $produto = new Produto();
        $produto->setDescricao(trim($_POST["descricao"]));
        $produto->setFoto($_FILES["file"]);
        $produto->setTipo(trim($_POST["tipo"]));
        $produto->setPreco(trim($_POST["preco"]));
        //var_dump($produto);

        require_once './controller/CtrlProduto.php';
        $ctrlProduto = new CtrlProduto();
        if ($ctrlProduto->valida($produto) == ""){
            require_once './DAO/ProdutoDAO.php';
            $produtoDAO = new ProdutoDAO();
            if ($produtoDAO->salvar($produto)){
              $m = "Cadastro realizado!";
            } else {
               $e ="Não foi possivel realizado o cadastro.";
            }
        } else {
             $e = $ctrlProduto->valida($produto);
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

    <h2>Cadastro de Produto</h2>
    <form method="post" action="" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="descricao"> Descrição: </label>
            <input type="text" name="descricao" autofocus class="form-control">
        </div>
        <div class="form-group">
            <label for="foto"> Foto: </label>
            <input type="file" name="file">
        </div>

        <div class="form-group">
            <label for="tipo"> Tipo:</label>
            <select name="tipo" class="form-control">
                <option value="1"/> Ativo
                <option value="0"/> Desativo
            </select>
        </div>
        <div class="form-group">
            <label for="preco">Preco:</label>
            <input type="number" name="preco" min="0.0" step=".1" class="form-control">
        </div>

        <button type="submit" class="btn btn-default">Cadastrar</button>
    </form>
</header>
