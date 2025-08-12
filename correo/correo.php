 <?php
@session_start();
date_default_timezone_set('America/Bogota');
ini_set("display_errors", '1');


$opcion = "1";

switch($opcion){
    case 1: enviarCorreo(); break;
}
function enviarCorreo() {
    
 
    if( isset($_POST['name'])) $nombre  = $_POST['name'];
    if( isset($_POST['apellido'])) $apellido  = $_POST['apellido'];
    if( isset($_POST['email'])) $correo  = $_POST['email'];
    if( isset($_POST['message'])) $mensaje  = $_POST['message'];
    if( isset($_POST['celular'])) $celular  = $_POST['celular'];
    
    if($nombre == ""){
        echo "nombre";
        return;
    }
    if($apellido == ""){
        echo "apellido";
        return;
    }
    if($correo == ""){
        echo "correo";
        return;
    }
    if($mensaje == ""){
        echo "mensaje";
        return;
    }
    if($celular == ""){
        echo "celular";
        return;
    }
    
    $nombre = $nombre." ".$apellido;
    
    //$correoDestinatario = "arnol_saavedra@hotmail.com";
    $correoDestinatario = "test@hotmail.com";
    $asunto ="registro web - $nombre";
    //recibe 
    $to = $correoDestinatario;
    //remitente del correo
    $from = 'informacion@KEY.com';
    $fromName = 'Mensaje Web';
    //Asunto del email
    $subject = $asunto; 
     
    //Contenido del Email
    $htmlContent = '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="x-apple-disable-message-reformatting" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <style type="text/css">
         body, .maintable { height:100% !important; width:100% !important; margin:0; padding:0;}
         img, a img { border:0; outline:none; text-decoration:none;}
         p {margin-top:0; margin-right:0; margin-left:0; padding:0;}
         .ReadMsgBody {width:100%;}
         .ExternalClass {width:100%;}
         .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100%;}
         img {-ms-interpolation-mode: bicubic;}
         body, table, td, p, a, li, blockquote {-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;}
      </style>
      <style type="text/css">
         @media only screen and (max-width: 480px) {
         .rtable {width: 100% !important;}
         .rtable tr {height:auto !important; display: block;}
         .contenttd {max-width: 100% !important; display: block; width: auto !important;}
         .contenttd:after {content: ""; display: table; clear: both;}
         .hiddentds {display: none;}
         .imgtable, .imgtable table {max-width: 100% !important; height: auto; float: none; margin: 0 auto;}
         .imgtable.btnset td {display: inline-block;}
         .imgtable img {width: 100%; height: auto !important;display: block;}
         table {float: none;}
         .mobileHide {display: none !important;}
         }
         @media only screen and (min-width: 481px) {
         .desktopHide {display: none !important;}
         }
      </style>
      <!--[if gte mso 9]>
      <xml>
         <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
         </o:OfficeDocumentSettings>
      </xml>
      <![endif]-->
      <title></title>
   </head>
   <body style="overflow: auto; padding:0; margin:0; font-size: 14px; font-family: arial, helvetica, sans-serif; cursor:auto; background-color:#444545">
      <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#444545">
         <tr>
            <td style="FONT-SIZE: 0px; HEIGHT: 0px; LINE-HEIGHT: 0"></td>
         </tr>
         <tr>
            <td valign="top">
               <table class="rtable" style="WIDTH: 600px; MARGIN: 0px auto" cellspacing="0" cellpadding="0" width="600" align="center" border="0">
                  <tr>
                     <th class="contenttd" style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; WIDTH: 600px; BORDER-BOTTOM: medium none; FONT-WEIGHT: normal; PADDING-BOTTOM: 0px; TEXT-ALIGN: left; PADDING-TOP: 0px; PADDING-LEFT: 0px; BORDER-LEFT: medium none; PADDING-RIGHT: 0px; BACKGROUND-COLOR: transparent">
                        <table style="WIDTH: 100%" cellspacing="0" cellpadding="0" align="left" data-hidewhenresp="0">
                           <tr style="HEIGHT: 132px" height="132">
                              <th class="contenttd" style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; WIDTH: 585px; VERTICAL-ALIGN: middle; BORDER-BOTTOM: medium none; FONT-WEIGHT: normal; PADDING-BOTTOM: 20px; TEXT-ALIGN: left; PADDING-TOP: 20px; PADDING-LEFT: 0px; BORDER-LEFT: medium none; PADDING-RIGHT: 15px; BACKGROUND-COLOR: #feffff">
                                 <!--[if gte mso 12]>
                                 <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                       <td align="center">
                                          <![endif]-->
                                          <table class="imgtable" style="MARGIN: 0px auto" cellspacing="0" cellpadding="0" align="center" border="0">
                                             <tr>
                                                <td style="PADDING-BOTTOM: 2px; PADDING-TOP: 2px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px" align="center">
                                                   <table cellspacing="0" cellpadding="0" border="0">
                                                      <tr>
                                                         <td style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BACKGROUND-COLOR: transparent"><img style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; DISPLAY: block" alt="" src="https://www.ginecologiaeva.com/images/logo-dark-main-257x84.png" width="230" hspace="0" vspace="0" /></td>
                                                      </tr>
                                                   </table>
                                                </td>
                                             </tr>
                                          </table>
                                          <!--[if gte mso 12]>
                                       </td>
                                    </tr>
                                 </table>
                                 <![endif]-->
                              </th>
                           </tr>
                        </table>
                     </th>
                  </tr>
                  <tr>
                     <th class="contenttd" style="BORDER-TOP: #2d2d2d 5px solid; BORDER-RIGHT: medium none; WIDTH: 600px; BORDER-BOTTOM: medium none; FONT-WEIGHT: normal; PADDING-BOTTOM: 0px; TEXT-ALIGN: left; PADDING-TOP: 0px; PADDING-LEFT: 0px; BORDER-LEFT: medium none; PADDING-RIGHT: 0px; BACKGROUND-COLOR: #feffff">
                        <table style="WIDTH: 100%" cellspacing="0" cellpadding="0" align="left" data-hidewhenresp="0">
                           <tr style="HEIGHT: 166px" height="166">
                              <th class="contenttd" style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; WIDTH: 570px; VERTICAL-ALIGN: top; BORDER-BOTTOM: medium none; FONT-WEIGHT: normal; PADDING-BOTTOM: 20px; TEXT-ALIGN: left; PADDING-TOP: 20px; PADDING-LEFT: 15px; BORDER-LEFT: medium none; PADDING-RIGHT: 15px; BACKGROUND-COLOR: transparent">
                                 <p style="FONT-SIZE: 36px; MARGIN-BOTTOM: 0px; FONT-FAMILY: geneve, arial, helvetica, sans-serif; MARGIN-TOP: 0px; COLOR: #2d2d2d; TEXT-ALIGN: left; LINE-HEIGHT: 49px; BACKGROUND-COLOR: transparent; mso-line-height-rule: exactly" align="left">Nuevo mensaje:</p>
                                 <p style="FONT-SIZE: 14px; MARGIN-BOTTOM: 1em; FONT-FAMILY: arial, helvetica, sans-serif; MARGIN-TOP: 0px; COLOR: #575757; TEXT-ALIGN: left; LINE-HEIGHT: 22px; BACKGROUND-COLOR: transparent; mso-line-height-rule: exactly" align="left"><span style="FONT-SIZE: 20px">Nombre:  '.$nombre.' <br />
                                    Correo: '.$correo.' <br />
                                    Mensaje:  '.$mensaje.'<br />
                                    Contacto:  '.$celular.'<br />
                                    </span>
                                    

                                 </p>
                              </th>
                           </tr>
                        </table>
                     </th>
                  </tr>
                  <tr>
                     <th class="contenttd" style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; WIDTH: 600px; BORDER-BOTTOM: medium none; FONT-WEIGHT: normal; PADDING-BOTTOM: 1px; TEXT-ALIGN: left; PADDING-TOP: 1px; PADDING-LEFT: 0px; BORDER-LEFT: medium none; PADDING-RIGHT: 0px; BACKGROUND-COLOR: transparent">
                        <table style="WIDTH: 100%" cellspacing="0" cellpadding="0" align="left">
                           <tr style="HEIGHT: 24px" height="24">
                              <th class="contenttd" style="BORDER-TOP: medium none; BORDER-RIGHT: medium none; WIDTH: 570px; VERTICAL-ALIGN: top; BORDER-BOTTOM: medium none; FONT-WEIGHT: normal; PADDING-BOTTOM: 1px; TEXT-ALIGN: left; PADDING-TOP: 1px; PADDING-LEFT: 15px; BORDER-LEFT: medium none; PADDING-RIGHT: 15px; BACKGROUND-COLOR: transparent">
                                 <p style="FONT-SIZE: 10px; MARGIN-BOTTOM: 1em; FONT-FAMILY: arial, helvetica, sans-serif; MARGIN-TOP: 0px; COLOR: #7c7c7c; TEXT-ALIGN: center; LINE-HEIGHT: 12px; BACKGROUND-COLOR: transparent; mso-line-height-rule: exactly" align="center">&nbsp;</p>
                              </th>
                           </tr>
                        </table>
                     </th>
                  </tr>
               </table>
            </td>
         </tr>
         <tr>
            <td style="FONT-SIZE: 0px; HEIGHT: 8px; LINE-HEIGHT: 0">&nbsp;</td>
         </tr>
      </table>
   </body>
</html>
    ';
//Encabezado para información del remitente
$headers = "De: $fromName"." <".$from.">";
 
//Limite Email
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
 
//Encabezados para archivo adjunto 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
//límite multiparte
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
 
//preparación de archivo
if(!empty($file) > 0){
    if(is_file($file)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file,"rb");
        $data =  @fread($fp,filesize($file));
    
        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
        "Content-Description: ".basename($files[$i])."\n" .
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;
 
//Enviar EMail
$mail = @mail($to, $subject, $message, $headers, $returnpath); 
 
//Estado de envío de correo electrónico
echo $mail?json_encode("0"):json_encode("1");
}



?>