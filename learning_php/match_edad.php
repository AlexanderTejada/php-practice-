<?php

$edad=18;

$resultado= match (true) {
     $edad >= 60 => "eres de la tercera edad",
     $edad >= 30 => "eres adulto",
     $edad >= 18 => "eres un  adulto joven",
     default=> "eres un niño"
};

echo $resultado