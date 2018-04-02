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


<div class="container" style="padding-bottom: 30px;">

    <div class="row">
       
        <div class="col-md-4" style="background-color: #d9d9d9; width: 15%;border-radius: 1rem;">   <!-- Deixa a borda dos conteiners redonda --> 
             <h3>Menu</h3><br>
            <a href="#">Opções</a><br>
            <a href="mensagens.php">Caixa de mensagens</a><br>
            <a href="meusAnuncios.php">Meus anúncios</a><br>
            <a href="conta.php">Minha Conta</a><br><br>
        </div>

        <div class="col-md-6">
            <div class="container bg-danger" style="border-radius: 1rem">
                
                




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