<?php
$texto="Argentina";
$variable_1=$texto;
$variable_2= &$texto;

echo $variable_2;

$texto="Alexander Tejda";

echo $variable_2;