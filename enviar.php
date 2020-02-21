<?php
 $destino="hernan333azul@gmail.com";
 $nombre=$_POST["name"];
 $correo=$_POST["email"];;
 $telefono=$_POST["telefono"];
 $mensaje=$_POST["message"];
  
 $contenido="Nombre: ".$nombre."\nCorreo: ".$correo. "\nTelefono: ".$telefono . "\nMensaje: ".$mensaje;
 mail($destino,"Contacto", $contenido);
 header("Location: form/mensaje-de-envio.html");

?>
