<?php

namespace Services;

use Models\UserRepository;

class UserService
{

    public function connectUser($isLoginExist, $isPasswordExist)
    {
        $userConnect = new UserRepository();
        $isUserRegistered = $userConnect->isUserExist($isLoginExist);
        
        if ($isUserRegistered == true) {

            if ($isUserRegistered['password'] === $isPasswordExist) {
                $_SESSION['id'] = $isUserRegistered['id'];
                $_SESSION['login'] = $isUserRegistered['login'];
                $_SESSION['password'] = $isUserRegistered['password'];
                $userIsConnected = 'Vous êtes connecté';
                // Renvoie la variable vers UserController
                return $userIsConnected;
            } else {
                $incorrectPassword = 'Mot de passe incorrect';
                // Renvoie la variable vers UserController
                return $incorrectPassword;
            }
        } else {
            $userNotExist = 'Utilisateur inconnu';
            // Renvoie la variable vers UserControlelr
            return $userNotExist;
        }
    }

    // Permet à l'utilisateur de se déconnecter
    public function logout()
    {
        require('views/disconnect.php');
    }
}