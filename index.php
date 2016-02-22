<!DOCTYPE html>
<html>
    <head>
        <?php
            ini_set('display_errors' ,1);
            include_once "view/head.php"; ?>
    </head>
    <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
        <?php include_once "view/menu.php"; ?>

        <div class="container jumbotron">
            <?php
                if (isset($_GET["p"])){
                    $p = $_GET["p"];
                    include_once $p;
                } else {
                    echo ""
                    . "<div id='headerwrap' id='home' name='home'>
                        <header class='clearfix'>
                            <h1><span class='icon icon-shield'></span></h1>
                            <p> Loja de Produtos  </p>
                            <p> Especializada em ...</p>
                        </header>
                        </div>";
                }
            ?>
        </div>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="./view/js/jquery.min.js"></script>
    <script type="text/javascript" src="./view/js/jquery.mask.js"></script>
    <script type="text/javascript" src="./view/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./view/js/retina.js"></script>
    <script type="text/javascript" src="./view/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="./view/js/jquery-func.js"></script>
    <script type="text/javascript" src="./view/js/smoothscroll.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
        $(function() {
            $( "#dataNasc" ).datepicker();
            $( "#dataNasc" ).datepicker( "option", "dateFormat", "dd-mm-yy");
        });
    </script>

    <script type="text/javascript" src="./view/js/codigos.js"></script>

</body>
</html>
