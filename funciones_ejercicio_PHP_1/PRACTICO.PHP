<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>saludo mejorado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class= "p-3 mb-2 bg-light text-dark">
    <div class="container p-3 mb-2 bg-dark text-white" >
        <h1 class="p-3 mb-2 bg-info text-white ">saludo mejorado</h1>
        
        <?php
        function saludo_mejorado($nombre, $codigoDeSaludo) {
          switch ($codigoDeSaludo) {
            case 1:
              $saludo = "Buen dia ";
              break;
            case 2:
              $saludo = "Buenas tardes ";
              break;
            case 3:
              $saludo = "Buenas noches ";
              break;
            default:
              $saludo = "Saludos "; 
          }
            return $nombre . $saludo;
        }
        echo "<b>" . saludo_mejorado("Juan ", 1) . "</b><br>";
        echo "<b>" . saludo_mejorado("Maria ", 2) . "</b><br>";
        echo "<b>" . saludo_mejorado("Pedro ", 3) . "</b><br>";        
        ?>
    </div>

    <footer class =" p-3 mb-2 bg-dark text-white fixed-bottom" >
      Jorge Alexander Tejada, programacion 3, segundo primera. tecnicatura superior en desarrollo de software
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
