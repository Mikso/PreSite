


<?php
   error_reporting( ~E_NOTICE ); // avoid notice
 include 'servidor/config.php';
 
 if(isset($_POST['btnsave']))
 {
  $username = $_POST['user_name'];// user name
  $userjob = $_POST['user_job'];// user email
  
  $imgFile = $_FILES['user_image']['name'];
  $tmp_dir = $_FILES['user_image']['tmp_name'];
  $imgSize = $_FILES['user_image']['size'];
  
  
  if(empty($username)){
   $errMSG = "Please Enter Username.";
  }
  else if(empty($userjob)){
   $errMSG = "Please Enter Your Job Work.";
  }
  else if(empty($imgFile)){
   $errMSG = "Please Select Image File.";
  }
  else
  {
   $upload_dir = 'fotos/'; // upload directory
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
   // rename uploading image
   $userpic = rand(1000,1000000).".".$imgExt;
    
   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){   
    // Check file size '5MB'
    if($imgSize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    }
    else{
     $errMSG = "Sorry, your file is too large.";
    }
   }
   else{
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   }
  }
  
  
  // if no error occured, continue ....
  if(!isset($errMSG))
  {
   $stmt = $pdo->prepare('INSERT INTO fotos(usuario, job, imagem) VALUES(:uname, :ujob, :upic)');
   $stmt->bindParam(':uname',$username);
   $stmt->bindParam(':ujob',$userjob);
   $stmt->bindParam(':upic',$userpic);
   
   if($stmt->execute())
   {
    echo 'inserido';
    //header("refresh:5;index.php"); // redirects image view page after 5 seconds.
   }
   else
   {
      echo 'erro';
   }
  }
 }
?>







<!DOCTYPE html>
<html>
   <head>
      <title>Meus Anúncios</title>

      <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
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
           

<--UPLOAD DE IMAGENS-->

<form method="post" enctype="multipart/form-data" class="form-horizontal">
     
 <table class="table table-bordered table-responsive">
 
    <tr>
     <td><label class="control-label">Username.</label></td>
        <td><input class="form-control" type="text" name="user_name" placeholder="Enter Username"></td>
    </tr>
    
    <tr>
     <td><label class="control-label">Profession(Job).</label></td>
        <td><input class="form-control" type="text" name="user_job" placeholder="Your Profession"></td>
    </tr>
    
    <tr>
     <td><label class="control-label">Profile Img.</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        </td>
    </tr>
    
    </table>
    
</form>




<--UPLOAD DE IMAGENS-->

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
      <script type="text/javascript" src="dist/js/upload.js"></script> 
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
      <!-- Latest compiled and minified JavaScript -->
      <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>





   </body>
</html>