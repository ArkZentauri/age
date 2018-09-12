<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
 
//$EmailTo = "gonzalordzam@mail.com";
$EmailTo = "gonzalo.rodriguez@cultura.gob.cl";
$Subject = "Mensaje desde agewebs.cl";
 
// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Telefono: ";
$Body .= $telefono;
$Body .= "\n";

$Body .= "Mensaje: ";
$Body .= $mensaje;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>