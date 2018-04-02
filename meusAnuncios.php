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
	<title>Meus Anúncios</title>


<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="social/bootstrap-social.css">

<!-- Plugin para o upload de imagens-->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>



</head>
<body>

      <header style="padding-top:50px; padding-bottom:30px">
        <nav class="navbar navbar-fixed-top" style="padding-left:0px; padding-right:20px; background-color: navy; ">

            <div class="navbar-header">
                <a class="navbar-brand" href="#"></a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index-Logado.php">Página Inicial</a></li>
                <li><a href="como-funciona-logado.php">Como funciona</a></li>
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




<div class="container bg-primary" style="padding-bottom: 30px; padding-top: 50px; padding-left: 30px; padding-right: 30px"> 
<div class="container"">
    <form>
    
    </div>
    <br>
    
<div class="fileinput fileinput-new" data-provides="fileinput" style="width: 600px; height: 400px ;min-height: 10%; min-width: 10%;">
  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 60%; height: 70%; min-width: 60%; max-height: 70%;">
      
  </div>

  <div>

    <span class="btn btn-default btn-file"><span class="fileinput-new">Selecione a imagem</span>
    <span class="fileinput-exists">Mudar</span>
    <input type="file" name="..."></span>
    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
  </div>
</div>

    
                
    <div>            


    <input type="text" name="">
    <input type="text" name="">
    <input type="text" name="">
    <button type="submit">Enviar</button>
</form>
</div>



</div>
</div>
<br>
<br>














<footer style="background-color: #211b23; height: 150px;">

    
    <div class="container text-center text-md-left">
        <div class="row" style="padding-top: 20px">


            <div class="col-md-4" style="color: white;">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold" >AIM</h5>
                <p>Alpha Imóveis é um projeto continuo que busca trazer o desejo de se adquirir um imóvel e facilidade, sem exigir custos adicionais por seus serviços.</p>
            </div>
            

   

    
    <!--Copyright-->
    <div class="footer-copyright py-3 text-center" style="color:white">
        © 2018 Copyright:
        <a href="index.php"> AlphaImoveis </a>
    </div>
    <!--/.Copyright-->


</footer>

<script src="bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>