<?php

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_studio;charset=utf8', 'root', '');
    }

    function getUser($user)
    {
        $query = $this->db->prepare('SELECT * FROM user WHERE email = ?');
        $query->execute(array($user));
        $DB_user = $query->fetch(PDO::FETCH_OBJ);
        return $DB_user;
    }

    function getUserByID ($user_id){
        $query = $this->db->prepare('SELECT * FROM user WHERE id = ?');
        $query->execute(array($user_id));
        $DB_user = $query->fetch(PDO::FETCH_OBJ);
        return $DB_user;
    }

    function getUsers()
    {
        $query = $this->db->prepare('SELECT * FROM user');
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }

    function insertUser($user, $password)
    {
        $query = $this->db->prepare('INSERT INTO user(email, password) VALUES (?,?)');
        $query->execute(array($user, $password));
    }

    function toggleAdmin ($id_user) {
        $query = $this->db->prepare('UPDATE user SET is_admin=!is_admin WHERE user.id=?');
        $query->execute(array($id_user));
    }

    function deleteUser($id_user) {
        $query = $this->db->prepare('DELETE FROM user WHERE id=?');
        $query->execute(array($id_user));
    }
}
