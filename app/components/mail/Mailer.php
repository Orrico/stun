<?php

/**
 * Send emails
 */
function stunMailer($sends, $subject, $msg, $debug=0) {
    /** Mailer Container */
    $mailer = new \PHPMailer;

    $mailer->isSMTP();
    $mailer->SMTPDebug = $debug;
    $mailer->Debugoutput = 'html';
    $mailer->Host = 'smtp.gmail.com';
    $mailer->Port = 587;
    $mailer->SMTPSecure = 'tls';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'legisclubbrasil';
    $mailer->Password = 'Legisclub2016**';

    $mailer->setFrom('contato@legisclubbrasil.org.br', 'Legis Club Brasil');
    $mailer->addBCC('jonas@midiafutura.com.br', 'Jonas - Midia Futura');
    foreach($sends as $email => $name) {
        $mailer->addAddress($email, $name);
    }

    $mailer->isHTML(true);
    $mailer->Subject = $subject;
    $mailer->CharSet = 'UTF-8';
    $mailer->Body = $msg;
    $mailer->AltBody = $msg;

    if (!$mailer->send()) {
        echo 'Mailer Error: ' . $mailer->ErrorInfo;
        return false;
    }
    else {
        return true;
    }
}
