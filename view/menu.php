<div id="navbar-main">
  <!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
      </button>
      <a class="navbar-brand" href="index.php"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php" class="smoothScroll">Inicio</a></li>
        <li><a href="index.php?p=view/pesqProdutos.php" class="smoothScroll">Produtos</a></li>
        <li><a href="index.php?p=view/formLogin.php" class="smoothScroll">Clientes</a></li>
        <?php
        if (!isset($_SESSION))
            session_start();
        if (isset($_SESSION["usuario"])){
            echo ' <li><a href="index.php?p=view/pesqCliente.php" class="smoothScroll">Lista</a></li>';
        }
        ?>
      </ul>
        <ul class="nav vbanavbar-nav navbar-right">
            <li class="well-sm"><strong><?php include_once 'validaUser.php';?></strong></li>
        </ul>

      </div>
   </div>
  </div>
</div>
</div>
