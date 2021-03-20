<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>
	<?php 
		
	$nome = 'Arthur';
	$cor = 'preto';
	$idade = '18';
	$atividade_preferida = 'andar de bicicleta';

	// operador   .   (ponto)
	echo "Olá " . $nome . ", vi que sua cor preferida é " . $cor . ", estou vendo também que você possui " . $idade . " anos e que gosta de " . $atividade_preferida;

	echo "<br />";

	//operador   ""  (aspas duplas)
	echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade_preferida";

	 ?>

	 
</body>
</html>