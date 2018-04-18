<?php



//function conectar(){

$pass = "123456";

try{
	$pdo = new PDO("mysql:host=localhost;dbname=imoveis", "root", $pass);


	}catch(PDOException $e){
		var_dump($e);
		echo $e->getCode();
	
	}
//		return $pdo;
//	}

?>