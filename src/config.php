<?php

global $pdo;
try {
	$pdo = new PDO("mysql:dbname=portaria;host=localhost", "root", "");
} catch(PDOException $e) {
	echo "FALHOU: ".$e->getMessage();
	exit;
} 
define("BASE_URL", "http://localhost/controleDePortaria/src/");

?>