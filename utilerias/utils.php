<?php

include_once 'RespuestaBDUtils.php';

class Utilerias
{

    public $urlvalida = "http://drapercode.com/pigmalion/valida/validaCorreo.php";
    public $urlRestablece = "http://drapercode.com/pigmalion/valida/RestableceCorreo.php";
    /* public $host = "smtp.gmail.com";
   public $username = "pigmalion@fvirtus.mx";
   public $password = "Pigmalion!V2020";
   public  $from = "Pigmalion Virtus <pigmalion@fvirtus.mx> ";
   public $port = "587";
    */
    public $host = "smtp.gmail.com";
    public $username = "darklaw84@gmail.com";
    public $password = "Ballack84";
    public  $from = "XaviPruebas <darklaw84@gmail.com> ";
    public $port = "587";

    /* public $host = "mail.drapercode.com";
   public $username = "xavi.gallegos@drapercode.com";
   public $password = "RealMadrid84*";
   public  $from = "XaviPruebas <xavi.gallegos@drapercode.com> ";
   public $port = "26";
*/
    function enviarCorreo($to, $nombre,$empresa,$apellidos,$telefono,$observaciones,$correo)
    {
        require_once "Mail.php";



        $subject = "Nueva petición de contacto Dardo";
        $body = " Se ha recibido la siguiente petición:

        Nombre: ".$nombre." ".$apellidos."
        Empresa: ".$empresa."
        Teléfono: ".$telefono."
        Correo: ".$correo."
        Observaciones: ".$observaciones."
        
    ";



        $headers = array(
            'From' => $this->from,
            'To' => $to,
            'Subject' => $subject
        );
        $smtp = Mail::factory(
            'smtp',
            array(
                'host' => $this->host,
                'auth' => true,
                'socket_options' => array('ssl' => array('verify_peer_name' => false, 'allow_self_signed' => true)),
                'username' => $this->username,
                'password' => $this->password,
                'port' => $this->port

            )
        );

        $mail = $smtp->send($to, $headers, $body);


        if (PEAR::isError($mail)) {
            return $mail->getMessage();
        } else {
            return "";
        }
    }



}
