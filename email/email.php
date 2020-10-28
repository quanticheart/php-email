<?php
    require 'config.php';
    
    function sendEmailAdm($name, $cellphone, $email, $neighborhood, $city, $msg) {
        
        $ip = $_SERVER['REMOTE_ADDR'];
        $data = date('d/m/Y');
        $hora = date('H:i:s');
        
        $destiny = $email;
        $reply = "Resposta";
        $subject = "Contato de " . $name;
        $altBody = 'This is the body in plain text for non-HTML mail clients';
        
        $html = admEmailTemplate($name, $cellphone, $email, $neighborhood, $city, $msg, $ip, $data, $hora);
        $mail = getEmailConfig($email, $name, $destiny, $reply, $subject, $altBody, $html);
        
        try {
            return $mail->send();
        } catch (Exception $e) {
            return false;
        }
    }