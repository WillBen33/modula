<?php

namespace Models;

class UserRepository extends Repository
{
    // Vérifie l'existence d'un user en base de données
    public function isUserExist($pseudo)
    {
        $db = $this->getDb();
        $request = $db->prepare('SELECT * FROM users WHERE login = :login');
        $request->bindParam(':login', $pseudo, \PDO::PARAM_STR);
        $request->execute();
        // Renvoie la variable vers UserService
        return $isUserExist = $request->fetch();
        
    }
}