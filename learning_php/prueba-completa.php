<!--
1) calcular el promedio de horas trabajadas por semana de 3 trabajadores

a) si es menor a 40 mostrar un mensaje de "es menor a 40 horas semanales"
b) si es mayor o igual a 40  y menor a 50 mostrar un mensaje de "es mayor a 40 horas semanales"
a) si es mayor o igual  a 60  mostrar un mensaje de "es mayor a 60 horas semanales"

mostrar el los datos de $MATERIAS : $PROGRAMACION1,$PROGRAMACION2,$PROGRAMACION3,

TEORIA

1)arquitectura cliente servidor
2) quien interpreta a html
3) que es un servidor web
4) que es un entorno de desarrollo y diga cuales son sus funciones
5) quien interpreta a php
-->

<?php
$trabajador1=40;
$trabajador2=20;

$trabajador1=$_POST['trabajador1'];
$trabajador2=$_POST["trabajador2"];
$trabajador3=$_POST["trabajador3"];

$promedio = ($trabajador1 + $trabajador2 + $trabajador3) / 3;

echo "el promedio de horas trabajadas es" $promedio;

if($trabajador1 < 40){
    echo "es menor a 40 horas semanales"
} if else ($trabajador2 >=== 40) {
    echo "es mayor a 40 horas semanales"
}
else ($trabajador3 > 60){
    echo "es mayor a 60 horas semanales"
}

foreach ($i = 0; $i ) {
    # code...
}

php>