<?php

require_once 'app/Router.php';
require_once 'app/config/Connection.php';
require_once 'app/controllers/ArtistaController.php';
require_once 'app/controllers/ViewController.php';
require_once 'app/models/ArtistaModel.php';

$template = file_get_contents('app/template/base.html');

$router = new Router();

ob_start();
    $router->redirect($_GET);
    $result = ob_get_contents();
ob_end_clean();

$template = str_replace('{{conteudo}}', $result, $template);

echo $template;
