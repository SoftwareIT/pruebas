<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that

require 'application/libraries/PHPMailer/PHPMailerAutoload.php';

//PHPMailer Object
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = "html";

//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
// use
//$mail->Host = gethostbyname("smtp.gmail.com");
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = "tls";

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "noreply@kumocrm.com";

//Password to use for SMTP authentication
$mail->Password = "653!JHE91mqt$";

//Set who the message is to be sent from
$mail->setFrom("noreply@kumocrm.com", "First Last");

//Set who the message is to be sent to
$mail->addAddress("eledezma@cloudcall.mx", "John Doe");

//Set the subject line
$mail->Subject = "PHPMailer GMail SMTP test";

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("Holalallala");

//Replace the plain text body with one created manually
//$mail->AltBody = "This is a plain-text message body";


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

if($mail->send){
   echo "estoy feliz todoportuweb"
}
