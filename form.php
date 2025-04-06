<?php
// Destinatario
$to = "fundacionayudandoaemprender.org@gmail.com";

// Datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Asunto y cuerpo del email
$subject = "Nuevo mensaje - Fundación Ayudando a Emprender";
$body = "
    Nombre: $nombre\n
    Email: $email\n
    Mensaje:\n $mensaje
";

// Cabeceras
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Envía el email
if (mail($to, $subject, $body, $headers)) {
    // Redirige a página de éxito
    header("Location: gracias.html");
} else {
    // Redirige a página de error
    header("Location: error.html");
}
?>