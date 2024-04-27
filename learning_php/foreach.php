 <?php

 $laptop=["acer Nitro 5", "windows 11", "AMD ryzen 5 4600h", "SDD 256gb", "RAM 24gb"];

 $frutas= [
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=> 17,
    "Manzanas"=>9

 ];

 foreach($frutas as $clave => $valor){
    echo "Hay " .$valor." ".$clave." en el inventario" ."<br>";
 }