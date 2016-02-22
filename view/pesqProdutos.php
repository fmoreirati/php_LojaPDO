<div id="home" name="home">
    <header class="clearfix">
        <h2>Lista de Produto</h2>
        <div class="well">
        <form  method="get" class="form" role="form" action="">
            <div class="form-group">
                <label>Pesquisa de Produtos:</label>
                <input type="text" name="busca" class="form" autofocus>
                <input type="hidden" name="p" value="view/pesqProdutos.php">
                <button type="submit" class="btn btn-primary">OK</button>
            </div>
        </form>
        </div>
        <div class="well">
           <a href="index.php?p=view/formProduto.php"> <button class="btn btn-danger">Novo Produto</button> </a>
        </div>

        <?php
        if (isset($_GET["busca"])){
        require_once './DAO/ProdutoDAO.php';
        $produtoDAO = new ProdutoDAO();

        $lista = $produtoDAO->buscar(trim($_GET["busca"].'%'));
        /*
        echo"<table class='table'>"
            . "<th> Cod. </th>"
            . "<th> Descrição </th>"
            . "<th> Fotos </th>"
            . "<th> Tipo </th>"
            . "<th> Preço </th>";
        foreach ($lista as $l){
            echo "<tr>"
               . "<td>".$l["idProduto"]."</td>"
               . "<td>".$l["descricao"]."</td>"
               . "<td><img src='./view/produtos/".$l["foto"]."' width='40' heigth='40'></td>";
            if ($l["tipo"]== 0)
               echo  "<td> Desativado </td>";
            else
               echo  "<td> Ativado </td>";
            echo "<td>".$l["preco"]."</td> </tr>";*/
        echo "<div class='produto'>";
        foreach ($lista as $l){
            echo "
                <div class='col-sm-3 well'>
                    <h3>".$l["descricao"]."</h3>
                    <a href='./view/produtos/".$l["foto"]."'>
                    <div class='fotos' style='
                        background-image: url('./view/produtos/".$l["foto"]."');
                    '>
                    </div></a>

                    <div class='col-sm-3 center>
				         <a href='carrinho.php?id=".$l["idProduto"]."'><button class='btn btn-primary'>Comprar</button></a>
			         </div>
                </div>
            ";
        }
        echo "</div>";
        }
        ?>
    </header>
</div>
