<?php



//function conectar(){


try{
	$pdo = new PDO("mysql:host=localhost;dbname=imoveis", "root", "");


	}catch(PDOException $e){
		var_dump($e);
		echo $e->getCode();
	
	}
//		return $pdo;
//	}

?>