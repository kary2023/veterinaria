<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $pregunta = $_POST["pregunta"];

    // Configura los datos del correo electrónico
    $destinatario = "tucorreo@example.com"; // Cambia esto por el correo de tu página
    $asunto = "Nueva pregunta desde el formulario de la página web";
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo: $correo\n";
    $cuerpoMensaje .= "Pregunta: $pregunta";

    // Envía el correo electrónico
    if (mail($destinatario, $asunto, $cuerpoMensaje)) {
        echo "¡Gracias por tu pregunta! Te responderemos pronto.";
    } else {
        echo "Hubo un problema al enviar la pregunta. Por favor, inténtalo más tarde.";
    }
}
?>