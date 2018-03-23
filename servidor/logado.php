<?php
    include 'config.php';
    //$pdo = conectar();

/*
session_start();
    if(! (empty ( $_POST ) ) ) {
        if(isset ( $_POST['email'] ) && iseet( $_POST['senha'] ) ) {
            stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = ?");
            stmt = $pdo->bind_param('s', $_POST['email']);
            $stmt->execute();
            result = $stmt->get_result();
            $user = $result->fetch_object();

        if( passoword_verify( $_POST['senha'], $user->password) ) {
                $_SESSION['user_id' = $user->id;
                header("location: menu.php");
            }

        }
    }
*/





$email = $_POST['email'];
$senha = $_POST['senha'];


$stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = ? and senha = ?");
$stmt->execute(array($email, $senha));




if($stmt->rowCount() > 0) {
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];
    
echo "Você foi autenticado";
header("location: ../menu.php");

} else {
    echo "nao encontrado ou houve erro";

$linha = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($linha);
var_dump($stmt);

}




?>