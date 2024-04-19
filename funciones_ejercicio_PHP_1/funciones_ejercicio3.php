<?php

function resta (&$a){
    $a -= 5;
    echo "Dentro de la función: $a = $a \n" ;
}

$x = 10;

echo "Antes de llamar la función: $x = $x \n";

resta($x);

echo "Después de llamar la función: $x = $x \n";

?>
