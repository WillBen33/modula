<?php

namespace Controllers;

use Models\EmailRepository;
use Services\ValidationService;

class ContactController
{
    public function index()
    {
        // Si méthode POST alors on envoie les données
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            // Vérification du captcha
            $newValidationService = new ValidationService();
            $isCaptchaOk = $newValidationService->isCaptchaOk();
            
            // Si le captcha est validé
            if ($isCaptchaOk) {

                $captchaIsOk = 'Merci pour votre message !';

                $firstname = $_POST['inputFirstName'];
                $lastname = $_POST['inputLastName'];
                $email = $_POST['inputEmail'];
                $message = $_POST['inputMessage'];
                $ipAddr = $_POST['inputIpAddr'];

                $newMessage = new EmailRepository();
                $newMessage->saveMessage($firstname, $lastname, $email, $message, $ipAddr);
            }
            // Sinon, le captcha n'est pas validé
            else {
                $captchaIsNotOk = 'Vous devez valider le Captcha';
            }

        }// Sinon on reste sur la vue
        require('views\contact.php');
    }
}