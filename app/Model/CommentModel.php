<?php

class CommentModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_studio;charset=utf8', 'root', '');
    }

    function getComments()
    {
        $query = $this->db->prepare('SELECT * FROM comment');
        $query->execute();
        $comments = $query->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }

    function getComment($id_comment)
    {
        $query = $this->db->prepare('SELECT comment.id_comment, comment.content, comment.score, comment.id_user, comment.id_component FROM comment WHERE comment.id_comment=?');
        $query->execute(array($id_comment));
        $comment = $query->fetch(PDO::FETCH_OBJ);
        return $comment;
    }

    function deleteComment($id_comment) 
    {
        $query = $this->db->prepare('DELETE FROM comment WHERE id_comment=?');
        $query->execute(array($id_comment));
        return $query->rowCount();
    }

    function insertComment ($content, $score, $user_id, $id_component) {
        $query = $this->db->prepare('INSERT INTO comment(content, score, id_user, id_component) VALUES (?,?,?,?)');
        $query->execute(array($content, $score, $user_id, $id_component));
        return $this->db->lastInsertId();
    }




  
}
