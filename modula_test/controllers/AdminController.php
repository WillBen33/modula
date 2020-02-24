<?php

namespace Controllers;

use Models\EmailRepository;

class AdminController
{
    // Connexion à la zone admin
    public function index()
    {        
        if (isset($_SESSION) && empty($_SESSION)) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $inputLogin = $_POST['inputLogin'];
                $inputPassword = $_POST['inputPassword'];
                $userController = new UserController();
                $userController->login($inputLogin, $inputPassword);
                $userNotExist = $userController->login($inputLogin, $inputPassword);
                if(isset($userNotExist) && $userNotExist === "Vous êtes connecté") {
                    $isLoginExist = $userNotExist;
                }
            }
            require('views/login.php');
        } else {
            header('Location: ?c=admin&t=list');
        }
    }

    // Récupérer la liste de TOUS les messages en base de données
    public function list()
    {
        $messageList = new EmailRepository();
        $messages = $messageList->getMessagesList();
        require('views/list.php');
    }

    // Récupérer le contenu d'un SEUL message
    public function message($id){
        
        $newMessage = new EmailRepository();
        $showMessage = $newMessage->getMessage($_GET['id']);
        
        // Si l'id du mêssage n'existe pas alors on affiche une erreur
        if ($showMessage->getId() == null)
        {
            require('views/error404.php');
        } else {
            require('views/message.php');
        }
    }
}