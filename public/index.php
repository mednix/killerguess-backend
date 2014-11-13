<?php
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Slim\Slim;
use Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware;

require '../vendor/autoload.php';

// Prepare app
$app = new Slim(array(
  'templates.path' => '../views',
));

// Create monolog logger and store logger in container as singleton
// (Singleton resources retrieve the same log resource definition each time)
$app->container->singleton('log', function () {
  $log = new Logger('killerguess');
  $log->pushHandler(new StreamHandler('../logs/app.log', Logger::DEBUG));
  return $log;
});
//setup PHP whoops error
$app->add(new WhoopsMiddleware);

//routes
include '../src/routes.php';

//Register 404 error handler
$app->notFound(function () use ($app) {
  $app->render('404.html');
});

// Run app
$app->run();

