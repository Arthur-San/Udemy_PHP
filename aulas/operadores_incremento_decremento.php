<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>

	<h3>Pós-incremento</h3>
	<?php 
		$a = 7;

		echo "O valor contido em A é $a <br />";	
		echo "O valor contido em A após o incremento é " . $a++ . "<br />";
		echo "O valor atualizado de A é $a <br />";	
	
	?>

	<h3>Pré-incremento</h3>
	<?php 
		$a = 7;

		echo "O valor contido em A é $a <br />";	
		echo "O valor contido em A pré o incremento é " . ++$a . "<br />";
		echo "O valor atualizado de A é $a <br />";	
	
	?>

	<h3>Pós-decremento</h3>
	<?php 
		$a = 7;

		echo "O valor contido em A é $a <br />";	
		echo "O valor contido em A após o decremento é " . $a-- . "<br />";
		echo "O valor atualizado de A é $a <br />";	
	
	?>

	<h3>Pré-decremento</h3>
	<?php 
		$a = 7;

		echo "O valor contido em A é $a <br />";	
		echo "O valor contido em A pré o decremento é " . --$a . "<br />";
		echo "O valor atualizado de A é $a <br />";	
	
	?>
</body>
</html>