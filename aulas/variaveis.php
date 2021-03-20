<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>
	<?php 
		//string
		$nome = 'Arthur Santos';
		
		//int
		$idade = 18;

		//float
		$peso = 70;

		//boolean
		$fumante_sn = true; //true ou false


	 ?>

	 <h1>Ficha Cadastral</h1>
	 <br>
	 <p>Nome: <?= $nome ?> </p>
	 <p>Idade: <?= $idade ?> </p>
	 <p>Peso: <?= $peso ?> </p>
	 <p>Fumante: <?= $fumante_sn ?> </p>

	 
</body>
</html>