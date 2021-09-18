<?  
    //Aquí se envía el correo
    $destinatario = "jdflorez480@gmail.com";
    $asunto = "Alguien quiere comunicarse con CIZZ";
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $modoContacto = $_POST['modoContacto'];

    $header = "Enviado desde la pagina de CIZZ";
    $mensaje = "La persona: ".$nombre."\n Con teléfono: ".$telefono."\n Correo: ".$correo."\n Metodo de contacto: ".$modoContacto."\n Se quiere comunicar con CIZZ";
    
    mail($destinatario, $asunto, $mensaje, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='Index.html'\",1000)</script>";
?>