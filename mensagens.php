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
      <title>Caixa de Mensagens</title>
      <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-social.css">
      <link rel="stylesheet" type="text/css" href="dist/css/menu.css">
      <link rel="stylesheet" type="text/css" href="dist/css/footer.css">


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
               <li><a href="planosLogado.php">Planos</a></li>
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


  <div class="container">
      <div class="row">
      <div class="col-sm-3 col-md-3">
         <div class="panel-group" id="accordion">
            <div class="panel panel-default">
               

               <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                     <table class="table">
                        <tr>
                           <td>
                              <span class="glyphicon glyphicon-pencil text-primary"></span><a href="#">Procurar</a>
                           </td>
                        </tr>

                        <tr>
                           <td>
                              <span class="glyphicon glyphicon-flash text-success"></span><a href="meusAnuncios.php">Meus Anuncios</a>
                           </td>
                        </tr>

                        <tr>
                           <td>
                              <span class="glyphicon glyphicon-file text-info"></span><a href="mensagens.php">Caixa de Mensagens</a>
                              <span class="badge">42</span>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <span class="glyphicon glyphicon-comment text-success"></span><a href="conta.php">Minha Conta</a>
                           </td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>



      


         

         </div>
      </div>
      <div class="col-sm-9 col-md-9">
         <div class="well">
            <h1>
               Accordion Menu With Icon
            </h1>
            Admin Dashboard Accordion Menu
         </div>
      </div>
   </div>
</div>
      <br>
      <br>

<!-- Footer -->
   <section id="footer" class="align-bottom">
      <div class="container">
         <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
               <h5>Quick links</h5>
               <ul class="list-unstyled quick-links">
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
               </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
               <h5>Quick links</h5>
               <ul class="list-unstyled quick-links">
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
               </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
               <h5>Quick links</h5>
               <ul class="list-unstyled quick-links">
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                  <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                  <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
               </ul>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
               <ul class="list-unstyled list-inline social text-center">
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
               </ul>
            </div>
            </hr>
         </div>   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
               <p>National Transaction Corporation is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
               <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
            </div>
            </hr>
         </div>   
      </div>


      <script type="text/javascript" src="dist/js/jquery.js"></script>
      <script src="bootstrap/dist/js/bootstrap.js"></script>
   </body>
</html>