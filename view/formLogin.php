
<header class="clearfix col-sm-6">
    <?php
        if (isset($_GET["e"]))
            echo "<div class='alert alert-danger'>"
            . "<strong> Usuario não encontrado!</strong></div>";
    ?>
    <div class="well">
    <h2>Login do Cliente</h2>
    <form method="post" action="view/validaLogin.php" class="form">
        <div class="form-group">
            <label for="email"> E-mail:</label>
            <input type="email" name="email" class="form-control valida" autofocus>
        </div>

        <div class="form-group">
            <label for="pw1">Senha:</label>
            <input type="password" name="pw1" class="form-control valida"><br>
        </div>

        <button type="submit" class="btn btn-primary col-sm-offset-9">Entrar</button>
    </form>

    </div>
    <div class="well">
       <a href="index.php?p=view/formCliente.php"> <button class="btn btn-danger">Novos Clientes</button> </a>
    </div>
</header>
