<?php

require_once './api/APICommentsController.php';
require_once 'RouterClass.php';

$r = new Router();

$r->addRoute('comments', 'GET', 'APICommentsController', 'getComments');
$r->addRoute('comments/:ID', 'GET', 'APICommentsController', 'getComment');



$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 