<?php 

include_once './utilerias/utils.php';

$utils= new Utilerias();

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$empresa=$_POST['empresa'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$observaciones=$_POST['observaciones'];


$utils->enviarCorreo("darklaw84@gmail.com",$nombre,$empresa,
$apellidos,$telefono,$observaciones,$correo);

?>