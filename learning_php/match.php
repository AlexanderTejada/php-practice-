<?php
$a=7;

$x=10;
$y=9;
$z=7;

$resultado= match($a){
    $x => "Valor igual x",
    $y => "Valor igual a Z",
    $Z => "Valor igual a Z",
    default=> "No coincide con ninguna variable"
};

echo $resultado;