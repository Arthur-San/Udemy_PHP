<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    
    $registros = array(
    	array('título' => 'Titulo notícia 1', 'conteúdo' => 'conteúdo notícia 1'),
    	array('título' => 'Titulo notícia 2', 'conteúdo' => 'conteúdo notícia 2'),
    	array('título' => 'Titulo notícia 3', 'conteúdo' => 'conteúdo notícia 3'),
    	array('título' => 'Titulo notícia 4', 'conteúdo' => 'conteúdo notícia 4')
    );

    	echo "<pre>";
    	print_r($registros);
    	echo "</pre>";

    echo "<br />";
    echo "<br />";
    echo "<br />";
    
	$idx = 0;
	//count -> conta a quantidade de elementos de array
	echo 'O array possui: ' . count($registros) . ' registros';
	echo "<br / >";

	/*
    while ($idx < count($registros)) {
    	echo '<h3>' . $registros[$idx]['título'] . '</h3>';
    	echo '<p>' . $registros[$idx]['conteúdo'] . '</p>';
    	echo "<hr />";
    	$idx++;
    }
    */


    /*
    do{
    	echo '<h3>' . $registros[$idx]['título'] . '</h3>';
    	echo '<p>' . $registros[$idx]['conteúdo'] . '</p>';
    	echo "<hr />";
    	$idx++;

    }while ($idx < count($registros));
	*/

	for ($idx = 0; $idx < count($registros) ; $idx++) { 
		echo '<h3>' . $registros[$idx]['título'] . '</h3>';
    	echo '<p>' . $registros[$idx]['conteúdo'] . '</p>';
    	echo "<hr />";
	}

        
    ?>


</body>

</html>