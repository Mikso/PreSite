<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title>Menu</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="dist/css/menu.css">
      <link rel="stylesheet" type="text/css" href="dist/css/footer.css">

   </head>
   <body>
      <header style="padding-top:3%; padding-bottom:3%">
         <nav class="navbar navbar-fixed-top" style="padding-left:0px; padding-right:20px; background-color: navy; ">
            <div class="navbar-header">

               <a class="navbar-brand" href="#"><img src="C:/Users/Bruno/Desktop/Correaao/foto/imoveisLogo.png"></a>
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




<div class="container" style="margin-top:30px">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
  <div class="panel-heading" style="bottom-margin:10px"><h3 class="panel-title"><strong>Cadastro</strong></h3>
  </div>
  
  <div class="panel-body" style="margin-left: 10px; margin-right: 10px; padding-top: 20px;">
   <form role="form" id="teste">

   <div class="alert alert-danger">
                <a class="close" data-dismiss="alert" href="#">×</a>Dados inválidos, tente novamente!
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
               <div class="form-group">
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" tabindex="1">
               </div>
            </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
               <div class="form-group">
                        <input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder="Sobrenome" tabindex="1">
               </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
               <div class="form-group">
                  <input type="text" name="idade" id="idade" class="form-control " placeholder="Idade" tabindex="1">
               </div>
            </div>
         </div>



<div class="row">
   <div class="col-xs-12 col-sm-6 col-md-6">
         <div class="form-group">
            <input type="text" name="CPF" id="CPF" class="form-control " placeholder="CPF" tabindex="3">
         </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
         <div class="form-group">
            <input type="text" name="telefone" id="telefone" class="form-control " placeholder="Telefone" tabindex="3">
         </div>
      </div>
</div>



         <div class="form-group">
            <input type="email" name="email" id="email" class="form-control " placeholder="Email" tabindex="4">
         </div>
         <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
               <div class="form-group">
                  <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="5">
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
               <div class="form-group">
                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control " placeholder="Confirm Password" tabindex="6">
               </div>
            </div>
         </div>
                                    
                                 
                                    
  <button type="submit" class="btn btn-success">Registrar</button>
  
  <hr style="margin-top:10px;margin-bottom:10px;" >
  
  <div class="form-group">
                                    
       <div style="font-size:85%">
             Já possui uma conta? 
          <a href="login.php">
                Clique aqui!
"             </a>
           </div>
       </div> 
</form>
  </div>
</div>
</div>
</div>










<!-- Footer -->
   <section id="footer" class="align-bottom">
      <div class="container">
         <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
               <h5>Links de acesso</h5>
               <ul class="list-unstyled quick-links">
                  <li><a href="#"><i class="fa fa-angle-double-right"></i>Privacidade</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i>Dúvidas</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i>Relatos</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i>Denúncie</a></li>
                  
               </ul>
            </div>
        
       
         </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
               <ul class="list-unstyled list-inline social text-center">
                  <li class="list-inline-item"><a href="https://pt-br.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="https://twitter.com/login?lang=pt"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=pt-br"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="https://plus.google.com/discover?hl=pt-BR"></i></a></li>
                  <li class="list-inline-item"><a href="https://www.google.com/intl/pt/gmail/about/" target="_blank"><i class="fa fa-envelope"></i></a></li>
               </ul>
            </div>
            </hr>
         </div>   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
               <p>SPimóveis é uma empresa independente, todo o conteúdo publicado aqui esta de acordo com as normas vigêntes brasileiras de comércio eletrônico.</p>
               <p class="h6">Todos os direitos reservados.<a class="text-green ml-2" href="###" target="_blank"></a></p>
            </div>
            </hr>
         </div>   
      </div>


      <script type="text/javascript" src="dist/js/jquery.js"></script>
      <script src="bootstrap/dist/js/bootstrap.js"></script>



<script type="text/javascript">
   
   $(document).ready(function(){
      $('#teste').submit(function(){
         alert("foi algo ai?");
      });

   });



</script>






















   </body>
</html>