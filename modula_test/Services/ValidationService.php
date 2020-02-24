<?php

namespace Services;

class ValidationService
{

    public function isCaptchaOk()
    {
        // Ma clé privée
        $secret = "6Lch-toUAAAAAMEwwyeM1Ju9uf7MKeBBAcKQ-DU3";
        // Paramètre renvoyé par le captcha
        $response = trim($_POST['g-recaptcha-response']);
        // On récupère l'IP de l'utilisateur
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
            . $secret
            . "&response=" . $response
            . "&remoteip=" . $remoteip ;

        $decode = json_decode(file_get_contents($api_url), true);

        // Si le captcha est valide on retourne 'true'
        $isCaptchaOk = boolval(false);
        if ($decode['success'] === true) {
            $isCaptchaOk = boolval(true);
        }
        return $isCaptchaOk;
    }
}