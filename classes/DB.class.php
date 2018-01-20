<?php 
	class BD{
		public function conectar(){
			$host ="localhost";
			$user ="root";
			$pass ="adm";
			$dbname ="sistemavotoonline";

			$conexao=mysql_connect($host,$user,$pass);

			$selectdb=mysql_select_db($dbname);

			return $conexao;
		}
	}

?>