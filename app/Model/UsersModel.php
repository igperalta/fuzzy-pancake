<?php

class UsersModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_studio;charset=utf8', 'root', '');
    }

    function getUser($user)
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE email = ?');
        $query->execute(array($user));
        $DB_user = $query->fetch(PDO::FETCH_OBJ);
        return $DB_user;
    }
}
