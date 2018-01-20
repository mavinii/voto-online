<?php
	$home="http:localhost/index.php";
	$tittle="Voto Online - LOGIN";

	//CONEXAO COM BANDO DE DADOS
	include("classes/DB.class.php");	
	$conectar=new BD;
	$conectar=$conectar->conectar();

	$query=mysql_query("SELECT * FROM usuarios");
	echo ".mysql_num_rows($query).";

?>