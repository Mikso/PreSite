<?php
    include 'config.php';


$email = $_POST['email'];
$senha = $_POST['senha'];

$senha = hash('md5', $senha); //encripta a senha no formato md5

$stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = ? and senha = ?");
$stmt->execute(array($email, $senha));




if($stmt->rowCount() > 0) {
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];
    
echo "Você foi autenticado";
header("location: ../menu.php");

} else {
    

//TEM QUE MUDAR ISSO


    header("location: ../login.php");

}


?>