<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicion</title>
</head>
<body>
    <h1> Condicional </h1>
    <?php
$a= 1;
$b= 3;
echo "Valor de a: " . $a . " y el valor de b: " . $b . "<br>";
if ($a > $b) {
    echo "El valor es mayorr que b";
} else {
   echo "El valor de a no es menor que b. a: " . $a . " b: " . $b;
}
   
?> 
</body>
</html>