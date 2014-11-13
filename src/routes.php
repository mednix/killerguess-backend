<?php

use Slim\Slim;
$app=Slim::getInstance();

$app->group('/api', function () use ($app) {


  $app->group('/questions', function () use ($app) {


    $app->get('/', function () {

    });

    $app->get('/:id', function ($id) {

    });

    $app->post('/:id', function ($id) {

    });

    $app->put('/:id', function ($id) {

    });

    $app->delete('/books/:id', function ($id) {

    });

  });

});
