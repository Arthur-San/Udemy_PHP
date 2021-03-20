<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>
	<?php 

		//Se a idade informada estiver entre (e inclusive) 16 e 69 anos e o peso for igual ou superior a 50kg, então o sistema deve imprimir a mensagem "Atende aos requisitos", caso contrário o sistema deve imprimir a mensagem "Não atende aos requisitos".

		$idade = 18;
		$peso = 70;		

	 ?>

	 <h1>Doação de sangue</h1>
	 <br>
	 <p>Idade: <?= $idade ?> </p>
	 <p>Peso: <?= $peso ?> </p>
	 <p>Resultado: <?php 
		 if ($idade >= 16 && $idade <= 69 && $peso >= 50) {
				echo "Atende aos requisitos";
			}else{
				echo "Não atende aos requisitos";
			}

	 ?></p>

	 
</body>
</html>