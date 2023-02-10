<?php
$to = "luciaguerra441@gmail.com";
$subject = "Mail desde el formulario";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];
$message = "
<h1>Información del formulario</h1>
<p>Nombre: $nombre </p>
<p>Email: $email </p>
<p>Comentarios: $comentarios </p>
";
 echo 'Gracias por comunicarse con nosotros';
mail("luciaguerra441@gmail.com", "Consulta", $message);
?>