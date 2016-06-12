<?php
/**
* Front controller
*/

/**
* Require the autoloader
*/

require_once __DIR__.'/../vendor/autoload.php';

/**
* Instanciate an app object
*/
$app = new Silex\Application();

/**
* Require the app configuration files
*/
require __DIR__.'/../app/config/dev.php';
require __DIR__.'/../app/app.php';
require __DIR__.'/../app/routes.php';

/**
* Execute the app object
*/
$app->run();
