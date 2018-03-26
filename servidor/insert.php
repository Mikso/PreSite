<?php
	include 'config.php';
	//$pdo = conectar();


//$nome = $sobrenome = $idade = $cpf = $cep = $email$ = $senha = "";


	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$idade = $_POST['idade'];
	$cpf = $_POST['cpf'];
	$cep = $_POST['cep'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

try{

//$senha = password_hash($senha, PASSWORD_DEFAULT);
	//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = $pdo->prepare("INSERT INTO usuario(nome, sobrenome, idade, cpf, cep, email, senha) VALUES (:nome, :sobrenome, :idade, :cpf, :cep, :email, :senha)");
	$sql->bindValue(":nome", $nome);
	$sql->bindValue(":sobrenome", $sobrenome);
	$sql->bindValue(":idade", $idade);
	$sql->bindValue(":cpf", $cpf);
	$sql->bindValue(":cep", $cep);
	$sql->bindValue(":email", $email);
	$sql->bindValue(":senha", $senha);
	

	$sql->execute();
	echo "Gravado com sucesso";
	header("location: ../mensagens/success.php"); // Chama a mensagem de envio ao email
}catch(PDOException $e){
	var_dump($e);
	$e->getMessage();
	//$e->getCode();
}



?>