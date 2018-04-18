<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Planos</title>
      <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-social.css">
      <link rel="stylesheet" type="text/css" href="dist/css/planos.css">
   </head>
   <body>
      <header style="padding-top:50px; padding-bottom:30px">
         <nav class="navbar navbar-fixed-top" style="padding-left:0px; padding-right:20px; background-color: navy; ">
            <div class="navbar-header">
               <a class="navbar-brand" href="#"></a>
            </div>
            <ul class="nav navbar-nav">
               <li><a href="index.php">Página Inicial</a></li>
               <li><a href="como-funciona.php">Como funciona</a></li>
               <li><a href="planos.php">Planos</a></li>
               <li><a href="suporte.php">Suporte</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
               <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
         </nav>
      </header>
      <div class="demo">
         <div class="container">
            <div class="row" style="padding-left: 25%;">
               <div class="col-md-4 col-sm-6">
                  <div class="pricingTable">
                     <div class="pricingTable-header">
                        <h3 class="title">Grátis</h3>
                        <span class="price-value">
                        $0<span class="month">/ mês</span>
                        </span>
                     </div>
                     <ul class="pricing-content">
                        <li>3 fotos por anúncio</li>
                        <li>50MB banda mensal</li>
                        <li>Até 2 anúncios por mês</li>
                     </ul>
                     <a href="login.php" class="pricingTable-signup">Adquirir</a>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="pricingTable orange">
                     <div class="pricingTable-header">
                        <h3 class="title">Fixo</h3>
                        <span class="price-value">
                        $15<span class="month">/ mês</span>
                        </span>
                     </div>
                     <ul class="pricing-content">
                        <li>8 fotos por anúncio</li>
                        <li>150MB banda mensal</li>
                        <li>Até 5 anúncios por mês</li>
                     </ul>
                     <a href="login.php" class="pricingTable-signup">Adquirir</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript" src="dist/js/jquery.js"></script>
      <script type="text/javascript" src="dist/js/bootstrap.js"></script>
   </body>
</html>