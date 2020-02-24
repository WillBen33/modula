<?php

namespace Services;

use Models\EmailRepository;

class EmailService
{
    /*
    public function send($inputFirstName, $inputLastName, $inputEmail, $inputMessage)
    {
        // Destinataire
        $to = 'contact@wilfridbenoit.fr';
        // Expéditeur
        $from = htmlspecialchars($inputFirstName, $inputLastName);
        // Email de l'expéditeur
        $email = htmlspecialchars($inputEmail);
        // Message
        $message = htmlspecialchars($inputMessage);
        // Corps du mail reçu par le webmaster
        $text = "
                Vous avez reçu un message de la part de $from (email : $email).
                Voici son message :
                $message
            ";

        $headers ='Content-Type: text/plain; charset="utf-8"'." ";
        $headers .='Content-Transfer-Encoding: 8bit';
        $headers .= 'From: ' . $email . "\r\n" .
                'Reply-To: ' . $email . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

        // Envoi du mail
        $isMailGone = mail($to, $text, $headers);
        // Renvoie si le mail est parti ou non
        return $isMailGone;
    }
    */

    public function save($inputLastName, $inputFirstName, $inputEmail, $inputMessage, $inputIpAddr)
    {
        $newEmailRepository = new EmailRepository();
        $newEmailRepository->saveMessage($inputLastName, $inputFirstName, $inputEmail, $inputMessage, $inputIpAddr);
    }

}
