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
      <title>Menu</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-social.css">
      <link rel="stylesheet" type="text/css" href="dist/css/menu.css">
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
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                     </span>Content</a>
                  </h4>
               </div>
               <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                     <table class="table">
                        <tr>
                           <td>
                              <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">Articles</a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <span class="glyphicon glyphicon-flash text-success"></span><a href="http://www.jquery2dotnet.com">News</a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Newsletters</a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Comments</a>
                              <span class="badge">42</span>
                           </td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                     </span>Modules</a>
                  </h4>
               </div>
               <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                     <table class="table">
                        <tr>
                           <td>
                              <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <a href="http://www.jquery2dotnet.com">Invoices</a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <a href="http://www.jquery2dotnet.com">Shipments</a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <a href="http://www.jquery2dotnet.com">Tex</a>
                           </td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                     </span>Account</a>
                  </h4>
               </div>
               <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                     <table class="table">
                        <tr>
                           <td>
                              <a href="http://www.jquery2dotnet.com">Change Password</a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <a href="http://www.jquery2dotnet.com">Import/Export</a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">
                              Delete Account</a>
                           </td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                     </span>Reports</a>
                  </h4>
               </div>
               <div id="collapseFour" class="panel-collapse collapse">
                  <div class="panel-body">
                     <table class="table">
                        <tr>
                           <td>
                              <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Sales</a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Customers</a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Products</a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>
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
      <br>
      <br>
      <div style="padding-top: 30%">
      <footer style="background-color: #211b23; height: 150px; padding-left: 20%;">
         <div class="text-center text-md-left">
         <div class="row" style="padding-top: 20px">
            <div class="col-md-4" style="color: white;">
               <h5 class="text-uppercase mb-4 mt-3 font-weight-bold" >AIM</h5>
               <p>Alpha Imóveis é um projeto continuo que busca trazer o desejo de se adquirir um imóvel e facilidade, sem exigir custos adicionais por seus serviços.</p>
            </div>
            <!--Copyright-->
            <div class="footer-copyright py-3 text-center" style="color:white">
               © 2018 Copyright
            </div>
            <!--/.Copyright-->
      </footer>
      </div>
      <script type="text/javascript" src="dist/js/jquery.js"></script>
      <script src="bootstrap/dist/js/bootstrap.js"></script>
   </body>
</html>