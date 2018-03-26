<?php
    include 'servidor/config.php';
    session_start();

    if( !isset( $_SESSION["email"] ) || !isset( $_SESSION["senha"] ) ) {
        
        header("Location: index.php"); 
        exit();
    } else {
        //echo "sucesso";
        //delay(300);
    }


?>


<!DOCTYPE html>
<html>
<head>
	<title>Minha Conta</title>


<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="social/bootstrap-social.css">



</head>
<body>

      <header style="padding-top:50px; padding-bottom:30px">
        <nav class="navbar navbar-fixed-top" style="padding-left:0px; padding-right:20px; background-color: navy; ">

            <div class="navbar-header">
                <a class="navbar-brand" href="#"></a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index-Logado.php">Página Inicial</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Suporte</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php 
                    $nome = $_SESSION['email'];
                    echo "Logado como " . $nome ." ";
                 ?><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="menu.php">Menu</a>
                    <li><a href="servidor/deslogado.php">Sair</a></li>
                </ul>
              </li>


            </ul>

        </nav>

</header>





<footer>
	



</footer>

<script src="bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>