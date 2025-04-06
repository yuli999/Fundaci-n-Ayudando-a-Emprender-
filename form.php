<?php
$to = "fundacionayudandoaemprender.org@gmail.com";
$subject = "Nuevo mensaje desde el sitio web";
$message = "
    Nombre: " . $_POST['nombre'] . "\n
    Email: " . $_POST['email'] . "\n
    Mensaje:\n" . $_POST['mensaje'];
$headers = "From: " . $_POST['email'];

if (mail($to, $subject, $message, $headers)) {
    header("Location: gracias.html"); // Redirige si es exitoso
} else {
    header("Location: error.html");   // Redirige si falla
}
?>
