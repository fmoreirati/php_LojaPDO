<!DOCTYPE html>
<html>
    <head>
        <?php include_once "head.php"; ?>
    </head>
    <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
        <?php include_once "menu.php"; ?>

        <div id="home" name="home">
            <header class="clearfix">
                <h2>Lista de Cliente</h2>
                <?php
                require_once './DAO/ClienteDAO.php';
                $clienteDAO = new ClienteDAO();
                $lista = $clienteDAO->listarTodos();
                //var_dump($lista);
                echo"<table class='table'>"
                    . "<th> Cod. </th>"
                    . "<th> Nome </th>"
                    . "<th> E-mail </th>"
                    . "<th> CPF </th>"
                    . "<th> Data Nasc.</th>"
                    . "<th> Senha </th>";
                foreach ($lista as $l){
                    echo "<tr>"
                       . "<td>".$l["idCliente"]."</td>"
                       . "<td>".$l["nome"]."</td>"
                       . "<td>".$l["email"]."</td>"
                       . "<td>".$l["cpf"]."</td>"
                       . "<td>".date("d-m-Y",strtotime($l["dataNasc"]))."</td>"
                       . "<td>".$l["pw1"]."</td>"
                       . "</tr>";
                }

                ?>

            </header>
        </div><!-- /headerwrap -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="/view/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/view/js/retina.js"></script>
        <script type="text/javascript" src="/view/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="/view/js/smoothscroll.js"></script>
        <script type="text/javascript" src="/view/js/jquery-func.js"></script>
    </body>
</html>
