<?php
	//include 'config.php';
session_start();
var_dump($_SESSION);

session_destroy();
header("location: ../index.php");

?>