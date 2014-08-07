<?php

define("DS", DIRECTORY_SEPARATOR);
define("WWW_ROOT",dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.DS."stealthtracker".DS);

require_once WWW_ROOT."dao".DS."SkirmDAO.php";
require_once WWW_ROOT."api".DS."Slim".DS."Slim.php";

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$skirmDAO = new SkirmDAO();

