<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Establece el correo electrónico de destino
  $to = "tuliontoledobigon2@gmail.com";

  // Establece el asunto del correo electrónico
  $subject = "me intereso tu portfolio";

  // Construye el cuerpo del correo electrónico
  $body = "Nombre: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Mensaje: " . $message;

  // Establece las cabeceras del correo electrónico
  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  // Envía el correo electrónico
  mail($to, $subject, $body, $headers);

  // Redirige al usuario a una página de confirmación o cualquier otra página deseada
  header("Location: confirmation.html");
  exit;
}
?>
