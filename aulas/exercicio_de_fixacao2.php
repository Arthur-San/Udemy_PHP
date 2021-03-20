<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>


<h3>Imposto de renda</h3>

	<?php 

	$salario = 2500;
		
	function calcularImpostoRenda($salario){
		$imposto = 0;


		if ($salario <= 1903.98) {
			$imposto = 0;

		}elseif ($salario >= 1903.98 && $salario <= 2826.65) {
			$imposto = ($salario *7.5) /100;
		}

		elseif ($salario >= 2826.65 && $salario <= 3751.05) {
			$imposto = ($salario * 15) /100;
		}

		elseif ($salario >= 3751.05 && $salario <= 4664.68) {
			$imposto = ($salario * 22.5) /100;
		}

		else {
			$imposto = ($salario * 27.5) /100;
		}

		return $imposto;

	}

	$resultado = calcularImpostoRenda($salario);


	echo "Seu salário é: R$ " . $salario . " <br />";
	echo "Seu imposto ficou: R$ " . $resultado . " <br />";
	echo "Total a ser cobrado: R$ " . ($salario + $resultado);



	
	?>
</body>
</html>