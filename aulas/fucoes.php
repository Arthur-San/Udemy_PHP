<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>

	<?php 
		

	//void (sem retorno)
	function exibirBoasVidas(){
		echo "Seja bem vindo!<br />";
	}
	exibirBoasVidas();


	//return (com retorno)
	function calcularAreaTerreno($largura, $comprimento){
		$area = $largura * $comprimento;
		return $area ;
	}
	$resultado = calcularAreaTerreno(5,25);
	echo $resultado;


	?>
</body>
</html>