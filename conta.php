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
      <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-social.css">
      <link rel="stylesheet" type="text/css" href="dist/css/menu.css">
      <link rel="stylesheet" type="text/css" href="dist/css/footer.css">










   </head>
 <body>
      <header style="padding-top:3%; padding-bottom:3%">
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
           

<div class="container" style="padding-bottom: 30px;">
         <div class="row">
            <div class="col-md-6">
               <div class="container bg-danger" style="border-radius: 1rem; width: 740px">
                  <div class="container">
                     <h1>Sua Conta</h1>
                     <hr>
                     <div class="row">
                        <!-- left column -->
                        <div class="col-md-3">
                           <div class="text-center">
                              <img src="/img" class="avatar img-circle" alt="avatar">
                              <h6>Atualize sua foto...</h6>
                              <input class="form-control" type="file">
                           </div>
                        </div>
                        <!-- edit form column -->
                        <div class="col-md-9 personal-info">
                           <div class="alert alert-info alert-dismissable">
                              <a class="panel-close close" data-dismiss="alert">×</a> 
                              <i class="fa fa-coffee"></i>
                              This is an <strong>.alert</strong>. Use this to show important messages to the user.
                           </div>
                           <h3>Informações Pessoais</h3>
                           <form class="form-horizontal" role="form">
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Nome:</label>
                                 <div class="col-md-5">
                                    <input class="form-control" value="Caio" type="text">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Sobrenome:</label>
                                 <div class="col-md-5">
                                    <input class="form-control" value="Henrique" type="text">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Idade:</label>
                                 <div class="col-md-3">
                                    <input class="form-control" value="12" type="text">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label">CPF:</label>
                                 <div class="col-md-4">
                                    <input class="form-control" value="1234567-89" type="text" maxlength="8">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label">CEP:</label>
                                 <div class="col-md-4">
                                    <input class="form-control" value="123456-78" type="text" maxlength="8">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Email:</label>
                                 <div class="col-md-5">
                                    <input class="form-control" value="email@gmail.com" type="email">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label">Senha:</label>
                                 <div class="col-md-4">
                                    <input class="form-control" value="111111" type="password" minlength="5" maxlength="10">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 control-label"></label>
                                 <div class="col-md-8">
                                    <input class="btn btn-primary" value="Salvar" type="submit">
                                    <span></span>
                                    <input class="btn btn-default" value="Cancelar" type="reset">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <hr>
                  <div class="container" style="background-color: green; padding-top: 20px">
                     <h5><b>DIAS RESTANTES ATÉ O PLANO ACABAR</b></h5>
                     <div class="progress" style="width: 30%">
                        <div class="progress-bar progress-bar-striped active" aria-value="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                           15 dias restando
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>



         </div>
      </div>
      <--FALTA 2 TAGS DA DIV -->
</div>
</div>




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
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
      <!-- Latest compiled and minified JavaScript -->
      <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
   </body>
</html>



