<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    
    $num = 1;
    
    //operadores comparação / lógicos
    echo '--Início do loop--<br />';

    while($num < 10) {

        $num += 1; //critério de parada

        if ($num == 2 || $num == 6) {
            continue;
        }

        echo "$num <br />";



        /*
        if ($num > 100) {
            break;
        }
        */
    }
    echo '--Início do loop--';


    ?>


</body>

</html>