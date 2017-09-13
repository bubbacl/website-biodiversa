<?php
   //Reseteamos variables a 0.
   $name = $email = $tel = $message = $para = $headers = $msjCorreo = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $name = $_POST['name'];
      $email = $_POST['email'];
      $tel = $_POST['tel'];
      $message = $_POST['message'];
      $client = 'rodrigo@bubbastudios.cl';

      //Creamos cabecera.
      $headers = 'De' . " " . $email . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $name;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Teléfono: " . $tel;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Mensaje: " . $message;
      $msjCorreo .= "\r\n";

    if (mail($client, $name, $msjCorreo, $headers)) {
         echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('Ups! No se ha enviado el email, intente más tarde.');
         </script>";
    }
  }
?>
