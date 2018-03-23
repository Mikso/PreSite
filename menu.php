<?php
    include 'servidor/config.php';
    session_start();

    if( !isset( $_SESSION["email"] ) || !isset( $_SESSION["senha"] ) ) {
        
        header("Location: index.php"); 
        exit();
    } else {
        echo "sucesso";
        //delay(300);
    }



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Index</title>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  


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
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Suporte</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>

        </nav>

</header>











<footer style="background-color: #211b23; height: 150px;">

    
    <div class="container text-center text-md-left">
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


<script src="bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>