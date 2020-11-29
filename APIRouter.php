<?php

require_once './api/APICommentsController.php';
require_once 'RouterClass.php';

$r = new Router();

$r->addRoute('comments', 'GET', 'APICommentsController', 'getComments');
$r->addRoute('comments/:ID', 'GET', 'APICommentsController', 'getComment');
$r->addRoute('comments/component/:ID', 'GET', 'APICommentsController', 'getCommentsByComponentID');
$r->addRoute('comments/:ID', 'DELETE', 'APICommentsController', 'deleteComment');
$r->addRoute('comments/:ID', 'PUT', 'APICommentsController', 'editComment');
$r->addRoute('comments', 'POST', 'APICommentsController', 'postComment');



$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 