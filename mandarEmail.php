<!DOCTYPE html>
<html>
<body>
<?php 
header('Content-Type: text/html; charset=UTF-8');
ini_set('SMTP','smtp.gmail.com');
ini_set('smtp_port',587);
$to = "almorranaferoz@gmail.com";
$headers = "Content-type: text/html; charset=UTF-8" . "\r\n";
//$headers = "Content-type: text/html" . "\r\n";
$headers .= "From: Consultas ANCAF" . "\r\n";
$subject = "Consulta de un cliente por la web";
$message = '<html><body>
                    <p><b>Nombre del cliente: </b>'.$_POST["nombre"].'</p>
                    <p><b>Telefono: </b>'.$_POST["telefono"].'</p>
                    <p><b>Correo electronico: </b>'.$_POST["correo"].'</p>
                    <p><b>Consulta: </b>'.$_POST["consulta"].'</p>
                    <p><b>Fin de la consulta.</b></p>
              </body></html>
                ';
mail($to, $subject, $message, $headers); 
echo "<script>window.location='consultaenviada.html';</script>";
?>
</body>
</html>