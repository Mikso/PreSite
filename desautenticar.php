<?php
	incude 'servidor/config.php';

session_start();
session_destroy();
header("deslogado.php");

?>