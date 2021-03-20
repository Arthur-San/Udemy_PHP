<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>
	<?php 

	//Operatores Condicionais/Comparação
	//==
	//===
	//!= ou <>
	//!==
	//<
	//>
	//<=
	//>=

	//Operatores Lógicos
	//E: && ou AND -> retorna verdadeiro se todos os resultados das expressões forem verdadeiro
	//OU: || ou OR -> retorna verdadeiro se pelo menos um dos resultados seja verdadeiro
	//XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeiroa e a outra falsa, ou vice-versa
	//! -> inverte o resultado retornado pela expressão

	// () estabelecer precedência
	//(v e v) = v ou f = v
	if ((22 == 22 && 3 == 3) || 5 != 5) {
		echo "Verdadeiro";
	}else{
		echo "Falso";
	}

	
	?>

	 
</body>
</html>