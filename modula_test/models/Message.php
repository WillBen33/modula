<?php

namespace models;

class Message {

    /* Attributs */
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $message;
    private $date;
    private $ip;

    /* Constantes */

    /* Constructeur */
    public function __construct($id, $firstName, $lastName, $email, $message, $date, $ip ) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->message = $message;
        $this->date = $date;
        $this->ip = $ip;
    }

    /* Getters */
    public function getId() {
        return $this->id;
    }
    public function getFirstName() {
        return $this->firstName;
    }
    public function getLastName() {
        return $this->lastName;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getMessage() {
        return $this->message;
    }
    public function getDate() {
        return $this->date;
    }
    public function getIp() {
        return $this->ip;
    }

    /* Setters */
    public function setId($id) {
        $this->id = $id;
    }
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
    public function setTitle($lastName) {
        $this->lastName = $lastName;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setMessage($message) {
        $this->message = $message;
    }
    public function setDate($date) {
        $this->date = $date;
    }
    public function setIp($ip) {
        $this->ip = $ip;
    }
}