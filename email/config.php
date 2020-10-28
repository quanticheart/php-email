<?php
    require 'mailer/ExceptionC.php';
    require 'mailer/PHPMailer.php';
    require 'mailer/SMTP.php';
    include 'templates/admTemplate.php';
    
    function getEmailConfig($email, $name, $destiny, $reply, $subject, $altBody, $html, $debug = false) {
        $mail = new PHPMailer(true);
        
        try {
            //Server settings
            if ($debug === true) {
                $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
            }
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = "smtp.gmail.com";                    // Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = "quantichearttestes@gmail.com";                     // SMTP username
            $mail->Password = 'qQ@20202020';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
            //Recipients
            $mail->setFrom($email, $name);
//            $mail->addAddress($destiny, $de);     // Add a recipient
            $mail->addAddress($destiny);               // Name is optional
            $mail->addReplyTo($email, $reply);
//            $mail->addCC('cc@example.com');
//            $mail->addBCC('bcc@example.com');
            
            // Attachments
//        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $html;
            $mail->AltBody = $altBody;
            
            return $mail;
        } catch (Exception $e) {
            return null;
        }
    }