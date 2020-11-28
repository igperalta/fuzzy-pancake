<?php

require_once './/app/Model/CommentsModel.php';
require_once './api/APIView.php';

class APICommentsController {
    
    private $commentsModel;
    private $view;

    function __construct()
    {
        $this->commentsModel = new CommentsModel(); 
        $this->view = new APIView();
    }

    public function getComments($params = null) {
        $comments = $this->commentsModel->getComments();
        $this->view->response($comments, 200);
    }

    public function getComment ($params = null) {
        $comment_id = $params[':ID'];
        $comment = $this->commentsModel->getComment($comment_id);
        if ($comment) {
            $this->view->response($comment, 200);
        }
        else
            $this->view->response("El comentario con ID -> $comment_id no fue encontrado", 404);

    }
}