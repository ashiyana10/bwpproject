<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom('jagatvasveliya2000@gmail.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('ashiyanahalvadiya123@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('jk.vasveliya.212@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer mail() test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//Replace the plain text body with one created manually
$mail->Body = 'This is a plain-text message body';
//Attach an image file

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}