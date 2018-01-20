<?php 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset = "UTF-8">
	<title>Voto Online - LOGIN</title>
	<link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'> <!--FONT IMPORTADA FO GOOGLE FONTS-->
	<link rel="stylesheet" type="text/css" href="_css/style.css">
</head>

<body>
	<div id="cadastrar"><a href="cadastro.php" title="CADASTRE SEU CPF, SOMENTE A LOJA 0697!"> CADASTRAR CPF &raquo;</a></div>
	<div id="login" class="form bradius"> <!--`BRADIUS` PUXA DO CSS AS OPCOES-->
		<div class="message">
			<div class="logo"><a href="<?php echo $home;?>"title="<?php echo $title;?>"><img src="_imagens/logo-extra4.png" alt="<?php echo $title;?>" wight="250" height="72"/><a></div><!--LOGO-->
			
				<div class="acomodar">
					<form action="" method="post">
					<label for="nome"> NOME: </label><input id="nome" type="text" class="txt bradius" name="nome" value="">
					<label for="cpf">CPF: </label><input id="cpf" type="cpf" class="txt bradius" name="cpf" value="">
					<input type="submit" class="sb bradius" value="ENTRAR">	
					</form>
				</div><!--ACOMODAR-->
		</div><!--MESSAGE-->
	</div><!--LOGIN-->

</body>
</html>