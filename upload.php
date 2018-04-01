<?php
	include 'servidor/config.php'

	$msg = false;

	if(isset($_FILES['arquivo'])) {
		$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
		$novo_nome = md5(time()) . $extensao;
		$diretorio = "upload/";

		move_upload_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

		$sql_code = "INSERT INTO arquivo (id_arquivo, arquivo, data) VALUES (null, 'novo_nome', NOW())"
		if($mysqli->query($sql_code)) {
			$msg = "Arquivo enviado com sucesso";
		}else
		{
			$msg = "Falha ao enviar arquivo";
		}
	}

?>

<h1>Upload de imagens</h1>
<?php if($msg != false) echo "<p> $msg </p>"; ?>
	<form action="" method="post" enctype="multipart/form-data">
		Arquivo: <input type="file" name="arquivo" required="required">
		<input type="submit" value="Salvar">
	</form>













