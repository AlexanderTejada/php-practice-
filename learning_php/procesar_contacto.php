<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'No especificado';
    $email = isset($_POST['email']) ? $_POST['email'] : 'No especificado';
    $localizacion = isset($_POST['localizacion']) ? $_POST['localizacion'] : 'No especificado';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : 'No especificado';
    $servicio = isset($_POST['servicio']) ? $_POST['servicio'] : 'No especificado';
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : 'No especificado';
    
    echo "<html>\n";
    echo "<head>\n";
    echo "<meta charset='UTF-8'>\n";
    echo "<title>Contacto recibido</title>\n";
    echo "</head>\n";
    echo "<body>\n";
    echo "<p>Bienvenido: " . htmlspecialchars($nombre) . "<br>\n";
    echo "El correo electrónico ingresado es: " . htmlspecialchars($email) . "<br>\n";
    echo "Localización: " . htmlspecialchars($localizacion) . "<br>\n";
    echo "Teléfono: " . htmlspecialchars($telefono) . "<br>\n";
    echo "Tipo de Servicio: " . htmlspecialchars($servicio) . "<br>\n";
    echo "Mensaje: " . nl2br(htmlspecialchars($mensaje)) . "</p>\n";
    echo "</body>\n";
    echo "</html>";
} else {
    echo "Por favor envía el formulario.";
}
?>
