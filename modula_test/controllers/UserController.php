<?php

namespace Controllers;

use Services\UserService;

class UserController
{
    public function login($inputLogin, $inputPassword)
    {
        //Appel le service UserService 
        if (!empty($_POST['inputLogin']) && !empty($_POST['inputPassword'])) {
            $isLoginExist = $_POST['inputLogin'];
            $isPasswordExist = $_POST['inputPassword'];
            $userService = new UserService();
            $userService->connectUser($isLoginExist, $isPasswordExist);
            $userNotExist = $userService->connectUser($isLoginExist, $isPasswordExist);
            // Renvoie la variable vers AdminController
            return $userNotExist;
        }
    }

    public function logout()
    {
        $userDisconnect = new UserService();
        $userDisconnect->logout();
        require('views/logout.php');
    }
}