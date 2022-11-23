<?php

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];

$destinatario="eps.estefania@gmail.com";
$asunto="Contacto desde nuestra web";

$carta= "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

mail($destinatario, $asunto, $carta);
header('Location:mensaje_de_envio.php');

?>
