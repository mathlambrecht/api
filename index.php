<?php

define('DS', DIRECTORY_SEPARATOR);
define('WWW_ROOT', __DIR__ . DS);

require_once WWW_ROOT."dao".DS."SkirmDAO.php";
require_once WWW_ROOT."api".DS."Slim".DS."Slim.php";

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$skirmDAO = new SkirmDAO();

$app->get("/skirms/:id/?", function($id) use($skirmDAO)
{
    header("Content-Type:application/json");
    echo json_encode($skirmDAO->getSkirmsByUserId($id));
    exit();
});

$app->run();