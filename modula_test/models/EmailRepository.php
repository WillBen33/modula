<?php

namespace Models;

use Models\Message;
use Models\Repository;

class EmailRepository extends Repository
{
    // Sauvegarder le message en base de données
    public function saveMessage($firstName, $lastName, $email, $message, $ip)
    {       
        // Connexion à la base de données
        $db = $this->getDb();
        
        // Requête
        $newMessage = $db->prepare("INSERT INTO `messages`(firstName, lastName, email, message, date, ip) VALUES (:firstName, :lastName, :email, :message, NOW(), :ip)");
        $newMessage->bindParam(':firstName', $firstName, \PDO::PARAM_STR);
        $newMessage->bindParam(':lastName', $lastName, \PDO::PARAM_STR);
        $newMessage->bindParam(':email', $email, \PDO::PARAM_STR);
        $newMessage->bindParam(':message', $message, \PDO::PARAM_STR);
        $newMessage->bindParam(':ip', $ip, \PDO::PARAM_STR);
        
        // Résultat
        return $newMessage->execute();
    }

    // Récupérer la liste de TOUS les messages en base de données
    public function getMessagesList()
    {
        // Connexion à la base de données
        $db = $this->getDb();

        // Requête
        $request = $db->query('SELECT * FROM messages ORDER BY date DESC');
        $request->execute(array());

        // Résultat
        $result = $request->fetchAll();
        $messagesList = [];
        foreach ($result as $message) {
            $newMessage = new Message($message['id'], $message['firstName'], $message['lastName'], $message['email'], $message['message'], $message['date'], $message['ip']);
            $messagesList[] = $newMessage;
        }
        return $messagesList;
    }

    // Récupérer le contenu d'un SEUL message
    public function getMessage($id)
    {
        // Connexion à la base de données
        $db = $this->getDb();

        // Requête
        $request = $db->prepare('SELECT id, firstName, lastName, email, message, date, ip FROM messages WHERE id = ?');
        $request->execute(array($id));

        // Résultat
        $message = $request->fetch();
        return new Message($message['id'], $message['firstName'], $message['lastName'], $message['email'], $message['message'], $message['date'], $message['ip']);
    }
}