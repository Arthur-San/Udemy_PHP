<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    
    $funcionarios = array(
    	array('nome' =>'João', 'salário' => 2500, 'data_nascimento' => '06/03/1970'), 
    	array('nome' =>'Maria', 'salário' => 3000), 
    	array('nome' =>'Júlia', 'salário' => 2200) 
    );

    echo "<pre>";
    print_r($funcionarios);
    echo "</pre>";

    foreach($funcionarios as $idx => $funcionario){
    	foreach ($funcionario as $idx2 => $valor) {
    		echo "$idx2 - $valor <br />";
    	}
    	 echo "<hr />";
    }




        
    ?>


</body>

</html>