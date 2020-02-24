<?php

namespace Models;

abstract class Repository
{

    private $db;

    public function __construct()
    {
    }

    protected function getDb()
    {
        if ($this->db === null) {
            try {
                $this->db = new \PDO('mysql:host=localhost;dbname=modula;charset=utf8', 'root', '');
            } catch (\Exception $exception) {
                echo $exception->getMessage();
            }
        }
        return $this->db;
    }
}
