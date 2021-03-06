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
<html lang="pt-br">
   <head>
      <title>Como Funciona</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-social.css">
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
               <li><a href="suporteLogado.php">Suporte</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php 
                     $nome = $_SESSION['email'];
                     echo "Logado como " . $nome ." ";
                     ?><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                     <li><a href="menu.php">Menu</a></li>
                     <li><a href="servidor/deslogado.php">Sair</a></li>
                  </ul>
               </li>
            </ul>
         </nav>
      </header>
      <div class="container bg bg-primary" style="padding-bottom: 30px;">
         <div class="container text-center" style="padding-top: 30px;">
            <h2><b>Como Funciona?</b></h2>
            <img src="img/Esquema.jpg" width="70%" height="50%">
         </div>
         <br>
         <div class="container text-center">
            <h3>Publique até 3 imagens por anúncio durante um mês. Depois disso cobramos um valor único por mês de uso.</h3>
         </div>
         <div class="container text-center">
            <article style="font-size: 16px">
               Você anucia gratis o seu imovel no nosso site durante um mês.<br> Quando alguma pessoa se interessar no seu anuncio, nós enviamos uma mensagem para você.<br> Não participamos da negociação ou seja não cobramos nada pelo serviço de intermediário.<br> Será apenas você e o comprador negociando.
            </article>
         </div>
         <br>
         <div class="container text-center">
            <button class="btn btn-success">Cadastre</button>
         </div>
      </div>
      <br><br>
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
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="dist/js/jquery.js"></script>
      <script src="bootstrap/dist/js/bootstrap.js"></script>
   </body>
</html>